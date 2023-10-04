<?php

namespace Modules\Ums\Http\Controllers;

use App\Http\Controllers\Controller;

// requests...
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use Modules\Ums\Http\Requests\RegistrationStoreRequest;
use Modules\Ums\Http\Requests\RegistrationUpdateRequest;

// datatable...
use Modules\Ums\DataTables\RegistrationDataTable;
use Modules\Ums\Services\AcademicSessionService;
use Modules\Ums\Services\BatchService;
use Modules\Ums\Services\Profile\PersonalInfoService;
use Modules\Ums\Services\RegistrationService;
use Modules\Ums\Services\UserService;

// services...

class RegistrationController extends Controller
{
    /**
     * @var $batchService
     */
    protected $batchService;

    /**
     * @var $sessionService
     */
    protected $sessionService;

    /**
     * @var $registrationService
     */
    protected $registrationService;

    /**
     * @var $userService
     */
    protected $userService;

    /**
     * @var $personalInfoService
     */
    protected $personalInfoService;


    /**
     * Constructor
     *
     * @param BatchService $batchService
     * @param AcademicSessionService $sessionService
     * @param RegistrationService $registrationService
     * @param UserService $userService
     * @param PersonalInfoService $personalInfoService
     */
    public function __construct(
        BatchService $batchService,
        AcademicSessionService $sessionService,
        RegistrationService $registrationService,
        UserService $userService,
        PersonalInfoService $personalInfoService
    )
    {
        $this->batchService = $batchService;
        $this->sessionService = $sessionService;
        $this->registrationService = $registrationService;
        $this->userService = $userService;
        $this->personalInfoService = $personalInfoService;
    }

    /**
     * Registration list
     *
     * @param RegistrationDataTable $datatable
     * @return View
     */
    public function index(RegistrationDataTable $datatable)
    {
        return $datatable->render('ums::registration.index');
    }

    /**
     * Create registration
     *
     * @return View
     */
    public function create()
    {
        // data
        $batches = $this->batchService->all();
        $sessions = $this->sessionService->all();

        // return view
        return view('ums::registration.create', compact('batches', 'sessions'));
    }


    /**
     * Store registration
     *
     * @param RegistrationStoreRequest $request
     * @return RedirectResponse
     */
    public function store(RegistrationStoreRequest $request)
    {
        try {
            DB::beginTransaction();

            // get data
            $data = $request->all();
            $data['approved_at'] = Carbon::now();
            $data['approved_by'] = auth()->user()->id;

            $registration = $this->registrationService->create($data);

            $userData = [
                'username' => $data['phone'],
                'email' => $data['email'],
                'phone' => $data['phone'],
                'password' => bcrypt($data['password']),
                'email_verified_at' => Carbon::now(),
                'is_alumni' => 1,
                'registration_id' => $registration->id,
                'approved_at' => Carbon::now(),
                'approved_by' => auth()->user()->id,
            ];

            $user = $this->userService->create($userData);
            $this->registrationService->update(['user_id' => $user->id], $registration->id);

            $user->assignRole(['User']);

            $personalData = [
                'first_name' => $data['first_name'],
                'last_name' => $data['last_name'],
                'personal_email' => $data['email'],
                'phone_no' => $data['phone'],
                'user_id' => $user->id
            ];

            $this->personalInfoService->create($personalData);

            notifier()->success('Registration completed successfully!');

            DB::commit();
        } catch (\Exception $exception) {
            DB::rollBack();

            notifier()->error('Error occurred! Registration cannot be completed.');
        }

        // redirect back
        return redirect()->back();
    }

    /**
     * Show registration.
     *
     * @param $id
     * @return mixed
     */
    public function show($id)
    {
        // get registration
        $registration = $this->registrationService->find($id);
        // check if registration doesn't exist
        if (empty($registration)) {
            // flash notification
            notifier()->error('Registration not found!');
            // redirect back
            return redirect()->back();
        }
        // return view
        return view('ums::registration.show', compact('registration'));
    }

    /**
     * Show registration.
     *
     * @param $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|RedirectResponse|View
     */
    public function edit($id)
    {
        // get registration
        $registration = $this->registrationService->find($id);
        // check if registration doesn't exist
        if (empty($registration)) {
            // flash notification
            notifier()->error('Registration not found!');
            // redirect back
            return redirect()->back();
        }
        // get batches
        $batches = $this->batchService->all();
        // get sessions
        $sessions = $this->sessionService->all();
        // return view
        return view('ums::registration.edit', compact('registration', 'batches', 'sessions'));
    }

    /**
     * Update registration
     *
     * @param RegistrationUpdateRequest $request
     * @param $id
     * @return RedirectResponse
     */
    public function update(RegistrationUpdateRequest $request, $id)
    {
        // get registration
        $registration = $this->registrationService->find($id);
        // check if registration doesn't exist
        if (empty($registration)) {
            // flash notification
            notifier()->error('Registration not found!');
            // redirect back
            return redirect()->back();
        }
        // get data
        $data = $request->all();
        // update registration
        $this->registrationService->update($data, $id);

        notifier()->success('Registration updated successfully!');

        // redirect back
        return redirect()->back();
    }

    /**
     * Delete registration
     *
     * @param $id
     * @return RedirectResponse
     */
    public function destroy($id)
    {
        try {
            DB::beginTransaction();

            // get registration
            $registration = $this->registrationService->find($id);
            // check if registration doesn't exist
            if (empty($registration)) {
                // flash notification
                notifier()->error('Registration not found!');
                // redirect back
                return redirect()->back();
            }
            // delete registration
            if ($this->registrationService->delete($id)) {
                $this->userService->delete($registration->user_id);
                // flash notification
                notifier()->success('Registration deleted successfully.');
            } else {
                // flash notification
                notifier()->success('Registration cannot be deleted.');
            }

            DB::commit();
        } catch (\Exception $exception) {
            DB::rollBack();

            notifier()->error('Something went wrong! Registration cannot be deleted!');
        }
        // redirect back
        return redirect()->back();
    }
}
