<?php

namespace Modules\Ums\Http\Controllers\Profile;

use App\Http\Controllers\Controller;

// requests...
use Modules\Ums\Http\Requests\Profile\ResidentialInfoStoreRequest;

// services...
use Modules\Ums\Services\Profile\ResidentialInfoService;

class ResidentialInfoController extends Controller
{
    /**
     * @var $residentialInfoService
     */
    protected $residentialInfoService;

    /**
     * Constructor
     *
     * @param ResidentialInfoService $residentialInfoService
     */
    public function __construct(ResidentialInfoService $residentialInfoService)
    {
        $this->residentialInfoService = $residentialInfoService;
    }

    /**
     * ResidentialInfo list
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        // first or create user residential info
        $residentialInfo = $this->residentialInfoService->firstOrCreate([
            'user_id' => auth()->user()->id
        ]);
        // return view
        return view('ums::profile.residential_info.index', compact('residentialInfo'));
    }

    /**
     * Store residentialInfo
     *
     * @param ResidentialInfoStoreRequest $request
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(ResidentialInfoStoreRequest $request, $id)
    {
        // Check authorized user
        $residentialInfo = $this->residentialInfoService->find($id);
        if ($residentialInfo->user_id != auth()->user()->id) {
            // flash notification
            notifier()->error('Residential info cannot be updated.');
            // redirect back
            return redirect()->back();
        }

        // data
        $data = $request->all();
        $data['user_id'] = auth()->user()->id;
        // create residentialInfo
        $residentialInfo = $this->residentialInfoService->update($data, $id);
        // check if residentialInfo created
        if ($residentialInfo) {
            // flash notification
            notifier()->success('Residential info has been updated successfully.');
        } else {
            // flash notification
            notifier()->error('Residential info cannot be updated.');
        }
        // redirect back
        return redirect()->back();
    }
}
