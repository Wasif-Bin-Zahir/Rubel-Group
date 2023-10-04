<?php

namespace Modules\Ums\Http\Controllers\Profile;

use App\Http\Controllers\Controller;

// requests...
use Modules\Ums\Http\Requests\Profile\EducationalInfoStoreRequest;
use Modules\Ums\Http\Requests\Profile\EducationalInfoUpdateRequest;

// datatable...
use Modules\Ums\DataTables\Profile\EducationalInfoDataTable;

// services...
use Modules\Ums\Services\Profile\EducationalInfoService;
use Modules\Ums\Services\UserService;

class EducationalInfoController extends Controller
{
    /**
     * @var $educationalInfoService
     */
    protected $educationalInfoService;

    /**
     * Constructor
     *
     * @param EducationalInfoService $educationalInfoService
     * @param UserService $userService
     */
    public function __construct(EducationalInfoService $educationalInfoService, UserService $userService)
    {
        $this->educationalInfoService = $educationalInfoService;
    }

    /**
     * EducationalInfo list
     *
     * @param EducationalInfoDatatable $datatable
     * @return \Illuminate\View\View
     */
    public function index(EducationalInfoDatatable $datatable)
    {
        return $datatable->render('ums::profile.educational_info.index');
    }

    /**
     * Create educationalInfo
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        // return view
        return view('ums::profile.educational_info.create');
    }


    /**
     * Store educationalInfo
     *
     * @param EducationalInfoStoreRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(EducationalInfoStoreRequest $request)
    {
        // data
        $data = $request->all();
        $data['user_id'] = auth()->user()->id;
        // create educationalInfo
        $educationalInfo = $this->educationalInfoService->create($data);
        // check if educationalInfo created
        if ($educationalInfo) {
            // flash notification
            notifier()->success('Educational info added successfully.');
        } else {
            // flash notification
            notifier()->error('Educational info cannot be added successfully.');
        }
        // redirect back
        return redirect()->back();
    }

    /**
     * Show educationalInfo.
     *
     * @param $id
     * @return mixed
     */
    public function show($id)
    {
        // get educationalInfo
        $educationalInfo = $this->educationalInfoService->find($id);
        // check if educationalInfo doesn't exist
        if (empty($educationalInfo) || $educationalInfo->user_id != auth()->user()->id) {
            // flash notification
            notifier()->error('Educational info not found!');
            // redirect back
            return redirect()->back();
        }
        // return view
        return view('ums::profile.educational_info.show', compact('educationalInfo'));
    }

    /**
     * Show educationalInfo.
     *
     * @param $id
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        // get educationalInfo
        $educationalInfo = $this->educationalInfoService->find($id);
        // check if educationalInfo doesn't exist
        if (empty($educationalInfo) || $educationalInfo->user_id != auth()->user()->id) {
            // flash notification
            notifier()->error('Educational info not found!');
            // redirect back
            return redirect()->back();
        }
        // return view
        return view('ums::profile.educational_info.edit', compact('educationalInfo'));
    }

    /**
     * Update educationalInfo
     *
     * @param EducationalInfoUpdateRequest $request
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(EducationalInfoUpdateRequest $request, $id)
    {
        // get educationalInfo
        $educationalInfo = $this->educationalInfoService->find($id);
        // check if educationalInfo doesn't exist
        if (empty($educationalInfo) || $educationalInfo->user_id != auth()->user()->id) {
            // flash notification
            notifier()->error('Educational info not found!');
            // redirect back
            return redirect()->back();
        }
        // data
        $data = $request->all();
        $data['user_id'] = auth()->user()->id;
        // update educationalInfo
        $educationalInfo = $this->educationalInfoService->update($data, $id);
        // check if educationalInfo updated
        if ($educationalInfo) {
            // flash notification
            notifier()->success('Educational info updated successfully.');
        } else {
            // flash notification
            notifier()->error('Educational info cannot be updated successfully.');
        }
        // redirect back
        return redirect()->back();
    }

    /**
     * Delete educationalInfo
     *
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        // get educationalInfo
        $educationalInfo = $this->educationalInfoService->find($id);
        // check if educationalInfo doesn't exist
        if (empty($educationalInfo) || $educationalInfo->user_id != auth()->user()->id) {
            // flash notification
            notifier()->error('Educational info not found!');
            // redirect back
            return redirect()->back();
        }
        // delete educationalInfo
        if ($this->educationalInfoService->delete($id)) {
            // flash notification
            notifier()->success('Educational info deleted successfully.');
        } else {
            // flash notification
            notifier()->success('Educational info cannot be deleted.');
        }
        // redirect back
        return redirect()->back();
    }
}
