<?php

namespace Modules\Ums\Http\Controllers\Profile;

use App\Http\Controllers\Controller;

// requests...
use Modules\Ums\Http\Requests\Profile\PersonalInfoStoreRequest;

// services...
use Modules\Ums\Services\Profile\PersonalInfoService;

class PersonalInfoController extends Controller
{
    /**
     * @var $personalInfoService
     */
    protected $personalInfoService;

    /**
     * Constructor
     *
     * @param PersonalInfoService $personalInfoService
     */
    public function __construct(PersonalInfoService $personalInfoService)
    {
        $this->personalInfoService = $personalInfoService;
    }

    /**
     * PersonalInfo list
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        // first or create user personal info
        $personalInfo = $this->personalInfoService->firstOrCreate([
            'user_id' => auth()->user()->id
        ]);
        // return view
        return view('ums::profile.personal_info.index', compact('personalInfo'));
    }

    /**
     * Store personalInfo
     *
     * @param PersonalInfoStoreRequest $request
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(PersonalInfoStoreRequest $request, $id)
    {
        // Check authorized user
        $personalInfo = $this->personalInfoService->find($id);
        if ($personalInfo->user_id != auth()->user()->id) {
            // flash notification
            notifier()->error('Personal info cannot be updated.');
            // redirect back
            return redirect()->back();
        }

        // data
        $data = $request->all();
        $data['user_id'] = auth()->user()->id;
        // create personalInfo
        $personalInfo = $this->personalInfoService->update($data, $id);
        // upload files
        $personalInfo->uploadFiles();
        // check if personalInfo created
        if ($personalInfo) {
            // flash notification
            notifier()->success('Personal info has been updated successfully.');
        } else {
            // flash notification
            notifier()->error('Personal info cannot be updated.');
        }
        // redirect back
        return redirect()->back();
    }
}
