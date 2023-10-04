<?php

namespace Modules\Cms\Http\Controllers;

use App\Http\Controllers\Controller;

// requests...
use Modules\Cms\Http\Requests\CommitteeCategoryStoreRequest;
use Modules\Cms\Http\Requests\CommitteeCategoryUpdateRequest;

// datatable...
use Modules\Cms\DataTables\CommitteeCategoryDataTable;

// services...
use Modules\Cms\Services\CommitteeCategoryService;

class CommitteeCategoryController extends Controller
{
    /**
     * @var $committeeCategoryService
     */
    protected $committeeCategoryService;

    /**
     * Constructor
     *
     * @param CommitteeCategoryService $committeeCategoryService
     */
    public function __construct(CommitteeCategoryService $committeeCategoryService)
    {
        $this->committeeCategoryService = $committeeCategoryService;
    }

    /**
     * CommitteeCategory list
     *
     * @param CommitteeCategoryDataTable $datatable
     * @return \Illuminate\View\View
     */
    public function index(CommitteeCategoryDataTable $datatable)
    {
        return $datatable->render('cms::committee_category.index');
    }

    /**
     * Create committeeCategory
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        // return view
        return view('cms::committee_category.create');
    }


    /**
     * Store committeeCategory
     *
     * @param CommitteeCategoryStoreRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(CommitteeCategoryStoreRequest $request)
    {
        // create committeeCategory
        $committeeCategory = $this->committeeCategoryService->create($request->all());
        // check if committeeCategory created
        if ($committeeCategory) {
            // flash notification
            notifier()->success('CommitteeCategory created successfully.');
        } else {
            // flash notification
            notifier()->error('CommitteeCategory cannot be created successfully.');
        }
        // redirect back
        return redirect()->back();
    }

    /**
     * Show committeeCategory.
     *
     * @param $id
     * @return mixed
     */
    public function show($id)
    {
        // get committeeCategory
        $committeeCategory = $this->committeeCategoryService->find($id);
        // check if committeeCategory doesn't exist
        if (empty($committeeCategory)) {
            // flash notification
            notifier()->error('CommitteeCategory not found!');
            // redirect back
            return redirect()->back();
        }
        // return view
        return view('cms::committee_category.show', compact('committeeCategory'));
    }

    /**
     * Show committeeCategory.
     *
     * @param $id
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        // get committeeCategory
        $committeeCategory = $this->committeeCategoryService->find($id);
        // check if committeeCategory doesn't exist
        if (empty($committeeCategory)) {
            // flash notification
            notifier()->error('CommitteeCategory not found!');
            // redirect back
            return redirect()->back();
        }
        // return view
        return view('cms::committee_category.edit', compact('committeeCategory'));
    }

    /**
     * Update committeeCategory
     *
     * @param CommitteeCategoryUpdateRequest $request
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(CommitteeCategoryUpdateRequest $request, $id)
    {
        // get committeeCategory
        $committeeCategory = $this->committeeCategoryService->find($id);
        // check if committeeCategory doesn't exist
        if (empty($committeeCategory)) {
            // flash notification
            notifier()->error('CommitteeCategory not found!');
            // redirect back
            return redirect()->back();
        }
        // update committeeCategory
        $committeeCategory = $this->committeeCategoryService->update($request->all(), $id);
        // check if committeeCategory updated
        if ($committeeCategory) {
            // flash notification
            notifier()->success('CommitteeCategory updated successfully.');
        } else {
            // flash notification
            notifier()->error('CommitteeCategory cannot be updated successfully.');
        }
        // redirect back
        return redirect()->back();
    }

    /**
     * Delete committeeCategory
     *
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        // get committeeCategory
        $committeeCategory = $this->committeeCategoryService->find($id);
        // check if committeeCategory doesn't exist
        if (empty($committeeCategory)) {
            // flash notification
            notifier()->error('CommitteeCategory not found!');
            // redirect back
            return redirect()->back();
        }
        // delete committeeCategory
        if ($this->committeeCategoryService->delete($id)) {
            // flash notification
            notifier()->success('CommitteeCategory deleted successfully.');
        } else {
            // flash notification
            notifier()->success('CommitteeCategory cannot be deleted.');
        }
        // redirect back
        return redirect()->back();
    }
}
