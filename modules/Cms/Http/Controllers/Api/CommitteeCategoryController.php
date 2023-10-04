<?php

namespace Modules\Cms\Http\Controllers\Api;

use App\Http\Controllers\Controller;

// services...
use Modules\Cms\Services\CommitteeCategoryService;

// requests...
use Modules\Cms\Http\Requests\CommitteeCategoryStoreRequest;
use Modules\Cms\Http\Requests\CommitteeCategoryUpdateRequest;

// resources...
use Modules\Cms\Transformers\CommitteeCategoryResource;

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
     * CommitteeCategory list.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // get all committeeCategories
        $committeeCategories = $this->committeeCategoryService->all(request()->get('limit') ?? 0);
        // if no committeeCategory found
        if (!count($committeeCategories)) {
            // error response
            return responder()
                ->status('success')
                ->code(404)
                ->message('CommitteeCategory not available.');
        }
        // transform committeeCategories
        $committeeCategories = CommitteeCategoryResource::collection($committeeCategories);
        // success response
        return responder()
            ->status('success')
            ->code(200)
            ->message('Data available')
            ->data($committeeCategories);
    }

    /**
     * Store a committeeCategory.
     *
     * @param CommitteeCategoryStoreRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(CommitteeCategoryStoreRequest $request)
    {
        // create committeeCategory
        $committeeCategory = $this->committeeCategoryService->create($request->all());
        // check if created
        if ($committeeCategory) {
            // transform committeeCategory
            $committeeCategory = CommitteeCategoryResource::make($committeeCategory);
            // success response
            return responder()
                ->status('success')
                ->code(201)
                ->message('CommitteeCategory created successfully.')
                ->data($committeeCategory);
        } else {
            // error response
            return responder()
                ->status('error')
                ->code(400)
                ->message('CommitteeCategory cannot be created.');
        }
    }

    /**
     * Show committeeCategory.
     *
     * @param $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // get committeeCategory
        $committeeCategory = $this->committeeCategoryService->find($id);
        // if no committeeCategory found
        if (empty($committeeCategory)) {
            // error response
            return responder()
                ->status('error')
                ->code(404)
                ->message('CommitteeCategory not found.');
        }
        // transform committeeCategory
        $committeeCategory = CommitteeCategoryResource::make($committeeCategory);
        // success response
        return responder()
            ->status('success')
            ->code(200)
            ->message('CommitteeCategory is available.')
            ->data($committeeCategory);
    }

    /**
     * Update committeeCategory.
     *
     * @param CommitteeCategoryUpdateRequest $request
     * @param $id
     * @return \Illuminate\Http\Response
     */
    public function update(CommitteeCategoryUpdateRequest $request, $id)
    {
        // get committeeCategory
        $committeeCategory = $this->committeeCategoryService->find($id);
        // if no committeeCategory found
        if (empty($committeeCategory)) {
            // error response
            return responder()
                ->status('error')
                ->code(404)
                ->message('CommitteeCategory not found.');
        }
        // update committeeCategory
        $committeeCategory = $this->committeeCategoryService->update($request->all(), $id);
        // check if updated
        if ($committeeCategory) {
            // get updated committeeCategory
            $committeeCategory = $this->committeeCategoryService->find($id);
            // transform committeeCategory
            $committeeCategory = CommitteeCategoryResource::make($committeeCategory);
            // success response
            return responder()
                ->status('success')
                ->code(200)
                ->message('CommitteeCategory updated successfully.')
                ->data($committeeCategory);
        } else {
            // error response
            return responder()
                ->status('error')
                ->code(400)
                ->message('CommitteeCategory cannot be updated.');
        }
    }

    /**
     * Remove committeeCategory.
     *
     * @param $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // get committeeCategory
        $committeeCategory = $this->committeeCategoryService->find($id);
        // if no committeeCategory found
        if (empty($committeeCategory)) {
            // error response
            return responder()
                ->status('error')
                ->code(404)
                ->message('CommitteeCategory not found.');
        }
        // delete committeeCategory
        if ($this->committeeCategoryService->delete($id)) {
            // success response
            return responder()
                ->status('success')
                ->code(200)
                ->message('CommitteeCategory deleted successfully.');
        } else {
            // error response
            return responder()
                ->status('error')
                ->code(400)
                ->message('CommitteeCategory cannot be deleted.');
        }
    }
}
