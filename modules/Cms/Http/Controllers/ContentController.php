<?php

namespace Modules\Cms\Http\Controllers;

use App\Http\Controllers\Controller;

// requests...
use Modules\Cms\Http\Requests\ContentStoreRequest;
use Modules\Cms\Http\Requests\ContentUpdateRequest;

// datatable...
use Modules\Cms\DataTables\ContentDataTable;

// services...
use Modules\Cms\Services\ContentCategoryService;
use Modules\Cms\Services\ContentService;

class ContentController extends Controller
{
    /**
     * @var $contentService
     */
    protected $contentService;

    /**
     * @var $contentCategoryService
     */
    protected $contentCategoryService;

    /**
     * @var $category
     */
    protected $category;

    /**
     * Constructor
     *
     * @param ContentService $contentService
     * @param ContentCategoryService $contentCategoryService
     */
    public function __construct(ContentService $contentService, ContentCategoryService $contentCategoryService)
    {
        $this->contentService = $contentService;
        $this->contentCategoryService = $contentCategoryService;

        if (request()->has('category_id')) {
            $this->category = $this->contentCategoryService->find(request()->get('category_id'));
        } else {
            $this->category = $this->contentCategoryService->first();
        }
    }

    /**
     * Content list
     *
     * @param ContentDataTable $datatable
     * @return \Illuminate\View\View
     */
    public function index(ContentDataTable $datatable)
    {
        // get category
        $category = $this->category;
        // return view
        return $datatable->render('cms::content.index', compact('category'));
    }

    /**
     * Create content
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        $category = $this->category;
        // get all content categories
        $contentCategories = $this->contentCategoryService->all();
        // return view
        return view('cms::content.create', compact('contentCategories', 'category'));
    }


    /**
     * Store content
     *
     * @param ContentStoreRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(ContentStoreRequest $request)
    {
        // create content
        $content = $this->contentService->create($request->all());
        // upload files
        $content->uploadFiles();
        // check if content created
        if ($content) {
            // flash notification
            notifier()->success('Content created successfully.');
        } else {
            // flash notification
            notifier()->error('Content cannot be created successfully.');
        }
        // redirect back
        return redirect()->back();
    }

    /**
     * Show content.
     *
     * @param $id
     * @return mixed
     */
    public function show($id)
    {
        // get category
        $category = $this->category;
        // get content
        $content = $this->contentService->find($id);
        // check if content doesn't exist
        if (empty($content)) {
            // flash notification
            notifier()->error('Content not found!');
            // redirect back
            return redirect()->back();
        }
        // return view
        return view('cms::content.show', compact('content', 'category'));
    }

    /**
     * Show content.
     *
     * @param $id
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        // get category
        $category = $this->category;
        // get all content categories
        $contentCategories = $this->contentCategoryService->all();
        // get content
        $content = $this->contentService->find($id);
        // check if content doesn't exist
        if (empty($content)) {
            // flash notification
            notifier()->error('Content not found!');
            // redirect back
            return redirect()->back();
        }
        // return view
        return view('cms::content.edit', compact('content', 'contentCategories', 'category'));
    }

    /**
     * Update content
     *
     * @param ContentUpdateRequest $request
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(ContentUpdateRequest $request, $id)
    {
        // get content
        $content = $this->contentService->find($id);
        // check if content doesn't exist
        if (empty($content)) {
            // flash notification
            notifier()->error('Content not found!');
            // redirect back
            return redirect()->back();
        }
        // update content
        $content = $this->contentService->update($request->all(), $id);
        // upload files
        $content->uploadFiles();
        // check if content updated
        if ($content) {
            // flash notification
            notifier()->success('Content updated successfully.');
        } else {
            // flash notification
            notifier()->error('Content cannot be updated successfully.');
        }
        // redirect back
        return redirect()->back();
    }

    /**
     * Delete content
     *
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        // get content
        $content = $this->contentService->find($id);
        // check if content doesn't exist
        if (empty($content)) {
            // flash notification
            notifier()->error('Content not found!');
            // redirect back
            return redirect()->back();
        }
        // delete content
        if ($this->contentService->delete($id)) {
            // flash notification
            notifier()->success('Content deleted successfully.');
        } else {
            // flash notification
            notifier()->success('Content cannot be deleted.');
        }
        // redirect back
        return redirect()->back();
    }
}
