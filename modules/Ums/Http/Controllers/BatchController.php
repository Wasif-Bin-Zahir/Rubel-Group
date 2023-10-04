<?php

namespace Modules\Ums\Http\Controllers;

use App\Http\Controllers\Controller;

// requests...
use Modules\Ums\Http\Requests\BatchStoreRequest;
use Modules\Ums\Http\Requests\BatchUpdateRequest;

// datatable...
use Modules\Ums\DataTables\BatchDataTable;

// services...
use Modules\Ums\Services\BatchService;

class BatchController extends Controller
{
    /**
     * @var $batchService
     */
    protected $batchService;

    /**
     * Constructor
     *
     * @param BatchService $batchService
     */
    public function __construct(BatchService $batchService)
    {
        $this->batchService = $batchService;
    }

    /**
     * Batch list
     *
     * @param BatchDataTable $datatable
     * @return \Illuminate\View\View
     */
    public function index(BatchDataTable $datatable)
    {
        return $datatable->render('ums::batch.index');
    }

    /**
     * Create batch
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        // return view
        return view('ums::batch.create');
    }


    /**
     * Store batch
     *
     * @param BatchStoreRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(BatchStoreRequest $request)
    {
        // create batch
        $batch = $this->batchService->create($request->all());
        // check if batch created
        if ($batch) {
            // flash notification
            notifier()->success('Batch created successfully.');
        } else {
            // flash notification
            notifier()->error('Batch cannot be created successfully.');
        }
        // redirect back
        return redirect()->back();
    }

    /**
     * Show batch.
     *
     * @param $id
     * @return mixed
     */
    public function show($id)
    {
        // get batch
        $batch = $this->batchService->find($id);
        // check if batch doesn't exist
        if (empty($batch)) {
            // flash notification
            notifier()->error('Batch not found!');
            // redirect back
            return redirect()->back();
        }
        // return view
        return view('ums::batch.show', compact('batch'));
    }

    /**
     * Show batch.
     *
     * @param $id
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        // get batch
        $batch = $this->batchService->find($id);
        // check if batch doesn't exist
        if (empty($batch)) {
            // flash notification
            notifier()->error('Batch not found!');
            // redirect back
            return redirect()->back();
        }
        // return view
        return view('ums::batch.edit', compact('batch'));
    }

    /**
     * Update batch
     *
     * @param BatchUpdateRequest $request
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(BatchUpdateRequest $request, $id)
    {
        // get batch
        $batch = $this->batchService->find($id);
        // check if batch doesn't exist
        if (empty($batch)) {
            // flash notification
            notifier()->error('Batch not found!');
            // redirect back
            return redirect()->back();
        }
        // update batch
        $batch = $this->batchService->update($request->all(), $id);
        // check if batch updated
        if ($batch) {
            // flash notification
            notifier()->success('Batch updated successfully.');
        } else {
            // flash notification
            notifier()->error('Batch cannot be updated successfully.');
        }
        // redirect back
        return redirect()->back();
    }

    /**
     * Delete batch
     *
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        // get batch
        $batch = $this->batchService->find($id);
        // check if batch doesn't exist
        if (empty($batch)) {
            // flash notification
            notifier()->error('Batch not found!');
            // redirect back
            return redirect()->back();
        }
        // delete batch
        if ($this->batchService->delete($id)) {
            // flash notification
            notifier()->success('Batch deleted successfully.');
        } else {
            // flash notification
            notifier()->success('Batch cannot be deleted.');
        }
        // redirect back
        return redirect()->back();
    }
}
