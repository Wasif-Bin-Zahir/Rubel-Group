<?php

namespace Modules\Ums\Http\Controllers;

use App\Http\Controllers\Controller;

// requests...
use Modules\Ums\Http\Requests\AcademicSessionStoreRequest;
use Modules\Ums\Http\Requests\AcademicSessionUpdateRequest;

// datatable...
use Modules\Ums\DataTables\AcademicSessionDataTable;

// services...
use Modules\Ums\Services\AcademicSessionService;

class AcademicSessionController extends Controller
{
    /**
     * @var $academicSessionService
     */
    protected $academicSessionService;

    /**
     * Constructor
     *
     * @param AcademicSessionService $academicSessionService
     */
    public function __construct(AcademicSessionService $academicSessionService)
    {
        $this->academicSessionService = $academicSessionService;
    }

    /**
     * AcademicSession list
     *
     * @param AcademicSessionDataTable $datatable
     * @return \Illuminate\View\View
     */
    public function index(AcademicSessionDataTable $datatable)
    {
        return $datatable->render('ums::academic_session.index');
    }

    /**
     * Create academicSession
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        // return view
        return view('ums::academic_session.create');
    }


    /**
     * Store academicSession
     *
     * @param AcademicSessionStoreRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(AcademicSessionStoreRequest $request)
    {
        // create academicSession
        $academicSession = $this->academicSessionService->create($request->all());
        // check if academicSession created
        if ($academicSession) {
            // flash notification
            notifier()->success('AcademicSession created successfully.');
        } else {
            // flash notification
            notifier()->error('AcademicSession cannot be created successfully.');
        }
        // redirect back
        return redirect()->back();
    }

    /**
     * Show academicSession.
     *
     * @param $id
     * @return mixed
     */
    public function show($id)
    {
        // get academicSession
        $academicSession = $this->academicSessionService->find($id);
        // check if academicSession doesn't exist
        if (empty($academicSession)) {
            // flash notification
            notifier()->error('AcademicSession not found!');
            // redirect back
            return redirect()->back();
        }
        // return view
        return view('ums::academic_session.show', compact('academicSession'));
    }

    /**
     * Show academicSession.
     *
     * @param $id
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        // get academicSession
        $academicSession = $this->academicSessionService->find($id);
        // check if academicSession doesn't exist
        if (empty($academicSession)) {
            // flash notification
            notifier()->error('AcademicSession not found!');
            // redirect back
            return redirect()->back();
        }
        // return view
        return view('ums::academic_session.edit', compact('academicSession'));
    }

    /**
     * Update academicSession
     *
     * @param AcademicSessionUpdateRequest $request
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(AcademicSessionUpdateRequest $request, $id)
    {
        // get academicSession
        $academicSession = $this->academicSessionService->find($id);
        // check if academicSession doesn't exist
        if (empty($academicSession)) {
            // flash notification
            notifier()->error('AcademicSession not found!');
            // redirect back
            return redirect()->back();
        }
        // update academicSession
        $academicSession = $this->academicSessionService->update($request->all(), $id);
        // check if academicSession updated
        if ($academicSession) {
            // flash notification
            notifier()->success('AcademicSession updated successfully.');
        } else {
            // flash notification
            notifier()->error('AcademicSession cannot be updated successfully.');
        }
        // redirect back
        return redirect()->back();
    }

    /**
     * Delete academicSession
     *
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        // get academicSession
        $academicSession = $this->academicSessionService->find($id);
        // check if academicSession doesn't exist
        if (empty($academicSession)) {
            // flash notification
            notifier()->error('AcademicSession not found!');
            // redirect back
            return redirect()->back();
        }
        // delete academicSession
        if ($this->academicSessionService->delete($id)) {
            // flash notification
            notifier()->success('AcademicSession deleted successfully.');
        } else {
            // flash notification
            notifier()->success('AcademicSession cannot be deleted.');
        }
        // redirect back
        return redirect()->back();
    }
}
