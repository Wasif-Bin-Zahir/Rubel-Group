<?php

namespace Modules\Ums\Http\Controllers\Profile;

use App\Http\Controllers\Controller;

// requests...
use Modules\Ums\Http\Requests\Profile\SocialAccountStoreRequest;

// services...
use Modules\Ums\Services\Profile\PersonalInfoService;

class SocialAccountController extends Controller
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
        return view('ums::profile.social_account.index', compact('personalInfo'));
    }

    /**
     * Store personalInfo
     *
     * @param SocialAccountStoreRequest $request
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(SocialAccountStoreRequest $request, $id)
    {
        // Check authorized user
        $personalInfo = $this->personalInfoService->find($id);
        if ($personalInfo->user_id != auth()->user()->id) {
            // flash notification
            notifier()->error('Social account cannot be updated.');
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
            notifier()->success('Social account has been updated successfully.');
        } else {
            // flash notification
            notifier()->error('Social account cannot be updated.');
        }
        // redirect back
        return redirect()->back();
    }
}
