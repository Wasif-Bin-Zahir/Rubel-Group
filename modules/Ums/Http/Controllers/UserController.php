<?php

namespace Modules\Ums\Http\Controllers;

use App\Http\Controllers\Controller;

// requests...
use Carbon\Carbon;
use Modules\Ums\Entities\User;
use Modules\Ums\Http\Requests\UserStoreRequest;
use Modules\Ums\Http\Requests\UserUpdateRequest;

// datatable...
use Modules\Ums\DataTables\UserDataTable;

// services...
use Modules\Ums\Services\RoleService;
use Modules\Ums\Services\BatchService;
use Modules\Ums\Services\Profile\PersonalInfoService;
use Modules\Ums\Services\UserService;
use function GuzzleHttp\Promise\all;

class UserController extends Controller
{
    /**
     * @var $userService
     */
    protected $userService;

    /**
     * @var $personalInfoService
     */
    protected $userPersonalInfoService;

    /**
     * @var $roleService
     */
    protected $roleService;

    /**
     * @var $batchService
     */
    protected $batchService;


    /**
     * Constructor
     *
     * @param UserService $userService
     * @param PersonalInfoService $userPersonalInfoService
     * @param RoleService $roleService
     */
    public function __construct(BatchService $batchService,UserService $userService, PersonalInfoService $userPersonalInfoService, RoleService $roleService)
    {
        $this->batchService = $batchService;
        $this->userService = $userService;
        $this->userPersonalInfoService = $userPersonalInfoService;
        $this->roleService = $roleService;
    }

    /**
     * User list
     *
     * @param UserDataTable $datatable
     * @return \Illuminate\View\View
     */
    public function index(UserDataTable $datatable)
    {
        return $datatable->render('ums::user.index');
    }

    /**
     * Create user
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        // roles
        $roles = $this->roleService->all();
        $batches = $this->batchService->all();
        // return view
        return view('ums::user.create', compact('roles','batches'));
    }


    /**
     * Store user
     *
     * @param UserStoreRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(UserStoreRequest $request)
    {
        // get data
        $data = $request->all();
        $data['password'] = bcrypt($data['password']);
        $data['approved_at'] = Carbon::now();
        $data['approved_by'] = auth()->user()->id;
        // create user
        $user = $this->userService->create($data);
        // assign roles
        if (count($data['roles']) > 0) {
            // remove chairman role
            if (in_array('Chairman', $data['roles'])) {
                $chairman = User::role('Chairman')->first();
                $chairman->removeRole('Chairman');
            }
            // assign roles
            $user->assignRole($data['roles']);
        }
        // upload files
        $user->uploadFiles();
        // check if user created
        if ($user) {
            $data['user_id'] = $user->id;
            $data['personal_email'] = $user->email;
            $data['personal_phone'] = $user->phone;
            $personalInfo = $this->userPersonalInfoService->create($data);
            // upload files
            $personalInfo->uploadFiles();
            if ($personalInfo) {
                // flash notification
                notifier()->success('User created successfully.');
            } else {
                // flash notification
                notifier()->error('User cannot be created successfully.');
            }
        } else {
            // flash notification
            notifier()->error('User cannot be created successfully.');
        }
        // redirect back
        return redirect()->back();
    }

    /**
     * Show user.
     *
     * @param $id
     * @return mixed
     */
    public function show($id)
    {
        // get user
        $user = $this->userService->find($id);
        // check if user doesn't exist
        if (empty($user)) {
            // flash notification
            notifier()->error('User not found!');
            // redirect back
            return redirect()->back();
        }
        // given roles
        $givenRoles = $user->roles->pluck('name')->toArray();
        // return view
        return view('ums::user.show', compact('user', 'givenRoles'));
    }

    /**
     * Show user.
     *
     * @param $id
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        // get user
        $user = $this->userService->find($id);
        // check if user doesn't exist
        if (empty($user)) {
            // flash notification
            notifier()->error('User not found!');
            // redirect back
            return redirect()->back();
        }
        // roles
        $roles = $this->roleService->all();
        // given roles
        $givenRoles = $user->roles->pluck('name')->toArray();
        // return view
        return view('ums::user.edit', compact('user', 'roles', 'givenRoles'));
    }

    /**
     * Update user
     *
     * @param UserUpdateRequest $request
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(UserUpdateRequest $request, $id)
    {
        // get user
        $user = $this->userService->find($id);
        // check if user doesn't exist
        if (empty($user)) {
            // flash notification
            notifier()->error('User not found!');
            // redirect back
            return redirect()->back();
        }
        // get data
        $data = $request->all();
        // upload files
        $user->uploadFiles();
        // update user
        $user = $this->userService->update($data, $id);
        // assign roles
        if (count($data['roles']) > 0) {
            // remove chairman role
            if (in_array('Chairman', $data['roles'])) {
                $chairman = User::role('Chairman')->first();

                $chairman->removeRole('Chairman');
            }
            // assign roles
            $user->syncRoles($data['roles']);
        }
        // check if user updated
        if ($user) {
            $data['personal_email'] = $user->email;
            $data['personal_phone'] = $user->phone;
            $personalInfo = $this->userPersonalInfoService->updateOrCreate(['user_id' => $user->id], $data);
            // upload files
            $personalInfo->uploadFiles();
            if ($personalInfo) {
                // flash notification
                notifier()->success('User updated successfully.');
            } else {
                // flash notification
                notifier()->error('User cannot be updated successfully.');
            }
        } else {
            // flash notification
            notifier()->error('User cannot be updated successfully.');
        }
        // redirect back
        return redirect()->back();
    }

    /**
     * Delete user
     *
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        // get user
        $user = $this->userService->find($id);
        // check if user doesn't exist
        if (empty($user)) {
            // flash notification
            notifier()->error('User not found!');
            // redirect back
            return redirect()->back();
        }
        // delete user
        if ($this->userService->delete($id)) {
            // flash notification
            notifier()->success('User deleted successfully.');
        } else {
            // flash notification
            notifier()->success('User cannot be deleted.');
        }
        // redirect back
        return redirect()->back();
    }
}
