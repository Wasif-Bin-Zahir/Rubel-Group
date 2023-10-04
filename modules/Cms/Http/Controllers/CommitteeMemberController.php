<?php

namespace Modules\Cms\Http\Controllers;

use App\Http\Controllers\Controller;

// requests...
use Modules\Cms\Http\Requests\CommitteeMemberStoreRequest;
use Modules\Cms\Http\Requests\CommitteeMemberUpdateRequest;

// datatable...
use Modules\Cms\DataTables\CommitteeMemberDataTable;

// services...
use Modules\Cms\Services\CommitteeMemberService;
use Modules\Cms\Services\CommitteeCategoryService;

class CommitteeMemberController extends Controller
{
    /**
     * @var $committeeCategoryService
     */
    protected $committeeCategoryService;

    /**
     * @var $committeeMemberService
     */
    protected $committeeMemberService;

    /**
     * Constructor
     *
     * @param CommitteeMemberService $committeeMemberService
     * @param CommitteeCategoryService $committeeCategoryService
     */
    public function __construct(CommitteeMemberService $committeeMemberService, CommitteeCategoryService $committeeCategoryService)
    {
        $this->committeeCategoryService = $committeeCategoryService;
        $this->committeeMemberService = $committeeMemberService;
    }

    /**
     * CommitteeMember list
     *
     * @param CommitteeMemberDataTable $datatable
     * @return \Illuminate\View\View
     */
    public function index(CommitteeMemberDataTable $datatable)
    {
        return $datatable->render('cms::committee_member.index');
    }

    /**
     * Create committeeMember
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        // get committee categories
        $committeeCategories = $this->committeeCategoryService->all();
        // return view
        return view('cms::committee_member.create', compact('committeeCategories'));
    }


    /**
     * Store committeeMember
     *
     * @param CommitteeMemberStoreRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(CommitteeMemberStoreRequest $request)
    {
        // create committeeMember
        $committeeMember = $this->committeeMemberService->create($request->all());
        // upload files
        $committeeMember->uploadFiles();
        // check if committeeMember created
        if ($committeeMember) {
            // flash notification
            notifier()->success('CommitteeMember created successfully.');
        } else {
            // flash notification
            notifier()->error('CommitteeMember cannot be created successfully.');
        }
        // redirect back
        return redirect()->back();
    }

    /**
     * Show committeeMember.
     *
     * @param $id
     * @return mixed
     */
    public function show($id)
    {
        // get committeeMember
        $committeeMember = $this->committeeMemberService->find($id);
        // check if committeeMember doesn't exist
        if (empty($committeeMember)) {
            // flash notification
            notifier()->error('CommitteeMember not found!');
            // redirect back
            return redirect()->back();
        }
        // return view
        return view('cms::committee_member.show', compact('committeeMember'));
    }

    /**
     * Show committeeMember.
     *
     * @param $id
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        // get committee categories
        $committeeCategories = $this->committeeCategoryService->all();
        // get committeeMember
        $committeeMember = $this->committeeMemberService->find($id);
        // upload files
        $committeeMember->uploadFiles();
        // check if committeeMember doesn't exist
        if (empty($committeeMember)) {
            // flash notification
            notifier()->error('CommitteeMember not found!');
            // redirect back
            return redirect()->back();
        }
        // return view
        return view('cms::committee_member.edit', compact('committeeMember', 'committeeCategories'));
    }

    /**
     * Update committeeMember
     *
     * @param CommitteeMemberUpdateRequest $request
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(CommitteeMemberUpdateRequest $request, $id)
    {
        // get committeeMember
        $committeeMember = $this->committeeMemberService->find($id);
        // check if committeeMember doesn't exist
        if (empty($committeeMember)) {
            // flash notification
            notifier()->error('CommitteeMember not found!');
            // redirect back
            return redirect()->back();
        }
        // update committeeMember
        $committeeMember = $this->committeeMemberService->update($request->all(), $id);
        // check if committeeMember updated
        if ($committeeMember) {
            // flash notification
            notifier()->success('CommitteeMember updated successfully.');
        } else {
            // flash notification
            notifier()->error('CommitteeMember cannot be updated successfully.');
        }
        // redirect back
        return redirect()->back();
    }

    /**
     * Delete committeeMember
     *
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        // get committeeMember
        $committeeMember = $this->committeeMemberService->find($id);
        // check if committeeMember doesn't exist
        if (empty($committeeMember)) {
            // flash notification
            notifier()->error('CommitteeMember not found!');
            // redirect back
            return redirect()->back();
        }
        // delete committeeMember
        if ($this->committeeMemberService->delete($id)) {
            // flash notification
            notifier()->success('CommitteeMember deleted successfully.');
        } else {
            // flash notification
            notifier()->success('CommitteeMember cannot be deleted.');
        }
        // redirect back
        return redirect()->back();
    }
}
