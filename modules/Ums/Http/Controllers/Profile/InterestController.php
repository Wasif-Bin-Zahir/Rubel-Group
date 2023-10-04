<?php

namespace Modules\Ums\Http\Controllers\Profile;

use App\Http\Controllers\Controller;

// requests...
use Modules\Ums\Http\Requests\Profile\InterestStoreRequest;
use Modules\Ums\Http\Requests\Profile\InterestUpdateRequest;

// datatable...
use Modules\Ums\DataTables\Profile\InterestDataTable;

// services...
use Modules\Ums\Services\Profile\InterestService;
use Modules\Ums\Services\UserService;

class InterestController extends Controller
{
    /**
     * @var $interestService
     */
    protected $interestService;

    /**
     * Constructor
     *
     * @param InterestService $interestService
     */
    public function __construct(InterestService $interestService)
    {
        $this->interestService = $interestService;
    }

    /**
     * Interest list
     *
     * @param InterestDatatable $datatable
     * @return \Illuminate\View\View
     */
    public function index(InterestDatatable $datatable)
    {
        return $datatable->render('ums::profile.interest.index');
    }

    /**
     * Create interest
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        // return view
        return view('ums::profile.interest.create');
    }


    /**
     * Store interest
     *
     * @param InterestStoreRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(InterestStoreRequest $request)
    {
        // data
        $data = $request->all();
        $data['user_id'] = auth()->user()->id;
        // create interest
        $interest = $this->interestService->create($data);
        // check if interest created
        if ($interest) {
            // flash notification
            notifier()->success('Interest created successfully.');
        } else {
            // flash notification
            notifier()->error('Interest cannot be created successfully.');
        }
        // redirect back
        return redirect()->back();
    }

    /**
     * Show interest.
     *
     * @param $id
     * @return mixed
     */
    public function show($id)
    {
        // get interest
        $interest = $this->interestService->find($id);
        // check if interest doesn't exist
        if (empty($interest) && $interest->user_id != auth()->user()->id) {
            // flash notification
            notifier()->error('Interest not found!');
            // redirect back
            return redirect()->back();
        }
        // return view
        return view('ums::profile.interest.show', compact('interest'));
    }

    /**
     * Show interest.
     *
     * @param $id
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        // get interest
        $interest = $this->interestService->find($id);
        // check if interest doesn't exist
        if (empty($interest) && $interest->user_id != auth()->user()->id) {
            // flash notification
            notifier()->error('Interest not found!');
            // redirect back
            return redirect()->back();
        }
        // return view
        return view('ums::profile.interest.edit', compact('interest'));
    }

    /**
     * Update interest
     *
     * @param InterestUpdateRequest $request
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(InterestUpdateRequest $request, $id)
    {
        // get interest
        $interest = $this->interestService->find($id);
        // check if interest doesn't exist
        if (empty($interest) && $interest->user_id != auth()->user()->id) {
            // flash notification
            notifier()->error('Interest not found!');
            // redirect back
            return redirect()->back();
        }
        // data
        $data = $request->all();
        $data['user_id'] = auth()->user()->id;
        // update interest
        $interest = $this->interestService->update($data, $id);
        // check if interest updated
        if ($interest) {
            // flash notification
            notifier()->success('Interest updated successfully.');
        } else {
            // flash notification
            notifier()->error('Interest cannot be updated successfully.');
        }
        // redirect back
        return redirect()->back();
    }

    /**
     * Delete interest
     *
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        // get interest
        $interest = $this->interestService->find($id);
        // check if interest doesn't exist
        if (empty($interest)) {
            // flash notification
            notifier()->error('Interest not found!');
            // redirect back
            return redirect()->back();
        }
        // delete interest
        if ($this->interestService->delete($id) && $interest->user_id != auth()->user()->id) {
            // flash notification
            notifier()->success('Interest deleted successfully.');
        } else {
            // flash notification
            notifier()->success('Interest cannot be deleted.');
        }
        // redirect back
        return redirect()->back();
    }
}
