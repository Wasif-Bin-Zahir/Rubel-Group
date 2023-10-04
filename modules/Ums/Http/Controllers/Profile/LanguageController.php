<?php

namespace Modules\Ums\Http\Controllers\Profile;

use App\Http\Controllers\Controller;

// requests...
use Modules\Ums\Http\Requests\Profile\LanguageStoreRequest;
use Modules\Ums\Http\Requests\Profile\LanguageUpdateRequest;

// datatable...
use Modules\Ums\DataTables\Profile\LanguageDataTable;

// services...
use Modules\Ums\Services\Profile\LanguageService;

class LanguageController extends Controller
{
    /**
     * @var $languageService
     */
    protected $languageService;

    /**
     * Constructor
     *
     * @param LanguageService $languageService
     */
    public function __construct(LanguageService $languageService)
    {
        $this->languageService = $languageService;
    }

    /**
     * Language list
     *
     * @param LanguageDatatable $datatable
     * @return \Illuminate\View\View
     */
    public function index(LanguageDatatable $datatable)
    {
        return $datatable->render('ums::profile.language.index');
    }

    /**
     * Create language
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        // return view
        return view('ums::profile.language.create');
    }


    /**
     * Store language
     *
     * @param LanguageStoreRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(LanguageStoreRequest $request)
    {
        // data
        $data = $request->all();
        $data['user_id'] = auth()->user()->id;
        // create language
        $language = $this->languageService->create($data);
        // check if language created
        if ($language) {
            // flash notification
            notifier()->success('Language created successfully.');
        } else {
            // flash notification
            notifier()->error('Language cannot be created successfully.');
        }
        // redirect back
        return redirect()->back();
    }

    /**
     * Show language.
     *
     * @param $id
     * @return mixed
     */
    public function show($id)
    {
        // get language
        $language = $this->languageService->find($id);
        // check if language doesn't exist
        if (empty($language) && $language->user_id != auth()->user()->id) {
            // flash notification
            notifier()->error('Language not found!');
            // redirect back
            return redirect()->back();
        }
        // return view
        return view('ums::profile.language.show', compact('language'));
    }

    /**
     * Show language.
     *
     * @param $id
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        // get language
        $language = $this->languageService->find($id);
        // check if language doesn't exist
        if (empty($language) && $language->user_id != auth()->user()->id) {
            // flash notification
            notifier()->error('Language not found!');
            // redirect back
            return redirect()->back();
        }
        // return view
        return view('ums::profile.language.edit', compact('language'));
    }

    /**
     * Update language
     *
     * @param LanguageUpdateRequest $request
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(LanguageUpdateRequest $request, $id)
    {
        // get language
        $language = $this->languageService->find($id);
        // check if language doesn't exist
        if (empty($language) && $language->user_id != auth()->user()->id) {
            // flash notification
            notifier()->error('Language not found!');
            // redirect back
            return redirect()->back();
        }
        // data
        $data = $request->all();
        $data['user_id'] = auth()->user()->id;
        // update language
        $language = $this->languageService->update($data, $id);
        // check if language updated
        if ($language) {
            // flash notification
            notifier()->success('Language updated successfully.');
        } else {
            // flash notification
            notifier()->error('Language cannot be updated successfully.');
        }
        // redirect back
        return redirect()->back();
    }

    /**
     * Delete language
     *
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        // get language
        $language = $this->languageService->find($id);
        // check if language doesn't exist
        if (empty($language) && $language->user_id != auth()->user()->id) {
            // flash notification
            notifier()->error('Language not found!');
            // redirect back
            return redirect()->back();
        }
        // delete language
        if ($this->languageService->delete($id)) {
            // flash notification
            notifier()->success('Language deleted successfully.');
        } else {
            // flash notification
            notifier()->success('Language cannot be deleted.');
        }
        // redirect back
        return redirect()->back();
    }
}
