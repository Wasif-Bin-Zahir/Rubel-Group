<?php

namespace Modules\Cms\Http\Controllers;

use App\Http\Controllers\Controller;

// requests...
use Modules\Cms\Http\Requests\EventStoreRequest;
use Modules\Cms\Http\Requests\EventUpdateRequest;

// datatable...
use Modules\Cms\DataTables\EventDataTable;

// services...
use Modules\Cms\Services\EventService;

class EventController extends Controller
{
    /**
     * @var $EventService
     */
    protected $EventService;

    /**
     * Constructor
     *
     * @param EventService $EventService
     */
    public function __construct(EventService $EventService)
    {
        $this->EventService = $EventService;
    }

    /**
     * Event list
     *
     * @param EventDataTable $datatable
     * @return \Illuminate\View\View
     */
    public function index(EventDataTable $datatable)
    {
        return $datatable->render('cms::event.index');
    }

    /**
     * Create Event
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        // return view
        return view('cms::event.create');
    }


    /**
     * Store Event
     *
     * @param EventStoreRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(EventStoreRequest $request)
    {
        // create Event
        $Event = $this->EventService->create($request->all());
        // check if Event created
        if ($Event) {
            // flash notification
            notifier()->success('Event created successfully.');
        } else {
            // flash notification
            notifier()->error('Event cannot be created successfully.');
        }
        // redirect back
        return redirect()->back();
    }

    /**
     * Show Event.
     *
     * @param $id
     * @return mixed
     */
    public function show($id)
    {
        // get Event
        $Event = $this->EventService->find($id);
        // check if Event doesn't exist
        if (empty($Event)) {
            // flash notification
            notifier()->error('Event not found!');
            // redirect back
            return redirect()->back();
        }
        // return view
        return view('cms::event.show', compact('Event'));
    }

    /**
     * Show Event.
     *
     * @param $id
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        // get Event
        $Event = $this->EventService->find($id);
        // check if Event doesn't exist
        if (empty($Event)) {
            // flash notification
            notifier()->error('Event not found!');
            // redirect back
            return redirect()->back();
        }
        // return view
        return view('cms::event.edit', compact('Event'));
    }

    /**
     * Update Event
     *
     * @param EventUpdateRequest $request
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(EventUpdateRequest $request, $id)
    {
        // get Event
        $Event = $this->EventService->find($id);
        // check if Event doesn't exist
        if (empty($Event)) {
            // flash notification
            notifier()->error('Event not found!');
            // redirect back
            return redirect()->back();
        }
        // update Event
        $Event = $this->EventService->update($request->all(), $id);
        // check if Event updated
        if ($Event) {
            // flash notification
            notifier()->success('Event updated successfully.');
        } else {
            // flash notification
            notifier()->error('Event cannot be updated successfully.');
        }
        // redirect back
        return redirect()->back();
    }

    /**
     * Delete Event
     *
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        // get Event
        $Event = $this->EventService->find($id);
        // check if Event doesn't exist
        if (empty($Event)) {
            // flash notification
            notifier()->error('Event not found!');
            // redirect back
            return redirect()->back();
        }
        // delete Event
        if ($this->EventService->delete($id)) {
            // flash notification
            notifier()->success('Event deleted successfully.');
        } else {
            // flash notification
            notifier()->success('Event cannot be deleted.');
        }
        // redirect back
        return redirect()->back();
    }
}
