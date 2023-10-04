<?php

namespace Modules\Cms\Http\Controllers;

use App\Http\Controllers\Controller;

// requests...
use Modules\Cms\Http\Requests\ContentCategoryStoreRequest;
use Modules\Cms\Http\Requests\ContentCategoryUpdateRequest;

// datatable...
use Modules\Cms\DataTables\ContentCategoryDataTable;

// services...
use Modules\Cms\Services\ContentCategoryService;

class ContentCategoryController extends Controller
{
    /**
     * @var $contentCategoryService
     */
    protected $contentCategoryService;

    /**
     * Constructor
     *
     * @param ContentCategoryService $contentCategoryService
     */
    public function __construct(ContentCategoryService $contentCategoryService)
    {
        $this->contentCategoryService = $contentCategoryService;
    }

    /**
     * ContentCategory list
     *
     * @param ContentCategoryDataTable $datatable
     * @return \Illuminate\View\View
     */
    public function index(ContentCategoryDataTable $datatable)
    {
        return $datatable->render('cms::content_category.index');
    }

    /**
     * Create contentCategory
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        // return view
        return view('cms::content_category.create');
    }


    /**
     * Store contentCategory
     *
     * @param ContentCategoryStoreRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(ContentCategoryStoreRequest $request)
    {
        notifier()->error('Forbidden request.');
        return redirect()->back();

        // create contentCategory
        $contentCategory = $this->contentCategoryService->create($request->all());
        // check if contentCategory created
        if ($contentCategory) {
            // flash notification
            notifier()->success('ContentCategory created successfully.');
        } else {
            // flash notification
            notifier()->error('ContentCategory cannot be created successfully.');
        }
        // redirect back
        return redirect()->back();
    }

    /**
     * Show contentCategory.
     *
     * @param $id
     * @return mixed
     */
    public function show($id)
    {
        // get contentCategory
        $contentCategory = $this->contentCategoryService->find($id);
        // check if contentCategory doesn't exist
        if (empty($contentCategory)) {
            // flash notification
            notifier()->error('ContentCategory not found!');
            // redirect back
            return redirect()->back();
        }
        // return view
        return view('cms::content_category.show', compact('contentCategory'));
    }

    /**
     * Show contentCategory.
     *
     * @param $id
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        notifier()->error('Forbidden request.');
        return redirect()->back();

        // get contentCategory
        $contentCategory = $this->contentCategoryService->find($id);
        // check if contentCategory doesn't exist
        if (empty($contentCategory)) {
            // flash notification
            notifier()->error('ContentCategory not found!');
            // redirect back
            return redirect()->back();
        }
        // return view
        return view('cms::content_category.edit', compact('contentCategory'));
    }

    /**
     * Update contentCategory
     *
     * @param ContentCategoryUpdateRequest $request
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(ContentCategoryUpdateRequest $request, $id)
    {
        notifier()->error('Forbidden request.');
        return redirect()->back();

        // get contentCategory
        $contentCategory = $this->contentCategoryService->find($id);
        // check if contentCategory doesn't exist
        if (empty($contentCategory)) {
            // flash notification
            notifier()->error('ContentCategory not found!');
            // redirect back
            return redirect()->back();
        }
        // update contentCategory
        $contentCategory = $this->contentCategoryService->update($request->all(), $id);
        // check if contentCategory updated
        if ($contentCategory) {
            // flash notification
            notifier()->success('ContentCategory updated successfully.');
        } else {
            // flash notification
            notifier()->error('ContentCategory cannot be updated successfully.');
        }
        // redirect back
        return redirect()->back();
    }

    /**
     * Delete contentCategory
     *
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        notifier()->error('Forbidden request.');
        return redirect()->back();

        // get contentCategory
        $contentCategory = $this->contentCategoryService->find($id);
        // check if contentCategory doesn't exist
        if (empty($contentCategory)) {
            // flash notification
            notifier()->error('ContentCategory not found!');
            // redirect back
            return redirect()->back();
        }
        // delete contentCategory
        if ($this->contentCategoryService->delete($id)) {
            // flash notification
            notifier()->success('ContentCategory deleted successfully.');
        } else {
            // flash notification
            notifier()->success('ContentCategory cannot be deleted.');
        }
        // redirect back
        return redirect()->back();
    }
}
