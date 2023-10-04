<?php

namespace Modules\Ums\Http\Controllers\Profile;

use App\Http\Controllers\Controller;

// requests...
use Modules\Ums\Http\Requests\Profile\WorkInfoStoreRequest;
use Modules\Ums\Http\Requests\Profile\WorkInfoUpdateRequest;

// datatable...
use Modules\Ums\DataTables\Profile\WorkInfoDataTable;

// services...
use Modules\Ums\Services\UserService;
use Modules\Ums\Services\Profile\WorkInfoService;

class WorkInfoController extends Controller
{
    /**
     * @var $workInfoService
     */
    protected $workInfoService;

    /**
     * Constructor
     *
     * @param WorkInfoService $workInfoService
     * @param UserService $userService
     */
    public function __construct(WorkInfoService $workInfoService, UserService $userService)
    {
        $this->workInfoService = $workInfoService;
    }

    /**
     * WorkInfo list
     *
     * @param WorkInfoDatatable $datatable
     * @return \Illuminate\View\View
     */
    public function index(WorkInfoDatatable $datatable)
    {
        return $datatable->render('ums::profile.work_info.index');
    }

    /**
     * Create workInfo
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        // return view
        return view('ums::profile.work_info.create');
    }


    /**
     * Store workInfo
     *
     * @param WorkInfoStoreRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(WorkInfoStoreRequest $request)
    {
        // data
        $data = $request->all();
        $data['user_id'] = auth()->user()->id;
        // create workInfo
        $workInfo = $this->workInfoService->create($data);
        // check if workInfo created
        if ($workInfo) {
            // flash notification
            notifier()->success('Work info created successfully.');
        } else {
            // flash notification
            notifier()->error('Work info cannot be created successfully.');
        }
        // redirect back
        return redirect()->back();
    }

    /**
     * Show workInfo.
     *
     * @param $id
     * @return mixed
     */
    public function show($id)
    {
        // get workInfo
        $workInfo = $this->workInfoService->find($id);
        // check if workInfo doesn't exist
        if (empty($workInfo) && $workInfo->user_id != auth()->user()->id) {
            // flash notification
            notifier()->error('WorkInfo not found!');
            // redirect back
            return redirect()->back();
        }
        // return view
        return view('ums::profile.work_info.show', compact('workInfo'));
    }

    /**
     * Show workInfo.
     *
     * @param $id
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        // get workInfo
        $workInfo = $this->workInfoService->find($id);
        // check if workInfo doesn't exist
        if (empty($workInfo) && $workInfo->user_id != auth()->user()->id) {
            // flash notification
            notifier()->error('WorkInfo not found!');
            // redirect back
            return redirect()->back();
        }
        // return view
        return view('ums::profile.work_info.edit', compact('workInfo'));
    }

    /**
     * Update workInfo
     *
     * @param WorkInfoUpdateRequest $request
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(WorkInfoUpdateRequest $request, $id)
    {
        // get workInfo
        $workInfo = $this->workInfoService->find($id);
        // check if workInfo doesn't exist
        if (empty($workInfo) && $workInfo->user_id != auth()->user()->id) {
            // flash notification
            notifier()->error('WorkInfo not found!');
            // redirect back
            return redirect()->back();
        }
        // data
        $data = $request->all();
        $data['user_id'] = auth()->user()->id;
        // update workInfo
        $workInfo = $this->workInfoService->update($data, $id);
        // check if workInfo updated
        if ($workInfo) {
            // flash notification
            notifier()->success('WorkInfo updated successfully.');
        } else {
            // flash notification
            notifier()->error('WorkInfo cannot be updated successfully.');
        }
        // redirect back
        return redirect()->back();
    }

    /**
     * Delete workInfo
     *
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        // get workInfo
        $workInfo = $this->workInfoService->find($id);
        // check if workInfo doesn't exist
        if (empty($workInfo) && $workInfo->user_id != auth()->user()->id) {
            // flash notification
            notifier()->error('WorkInfo not found!');
            // redirect back
            return redirect()->back();
        }
        // delete workInfo
        if ($this->workInfoService->delete($id)) {
            // flash notification
            notifier()->success('WorkInfo deleted successfully.');
        } else {
            // flash notification
            notifier()->success('WorkInfo cannot be deleted.');
        }
        // redirect back
        return redirect()->back();
    }
}
