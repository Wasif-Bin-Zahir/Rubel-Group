<?php

namespace Modules\Cms\Http\Controllers;

use App\Http\Controllers\Controller;

// requests...
use Modules\Cms\Http\Requests\FormStoreRequest;
use Modules\Cms\Http\Requests\FormUpdateRequest;

// datatable...
use Modules\Cms\DataTables\FormDataTable;

// services...
use Modules\Cms\Services\FormService;

class FormController extends Controller
{
    /**
     * @var $formService
     */
    protected $formService;

    /**
     * Constructor
     *
     * @param FormService $formService
     */
    public function __construct(FormService $formService)
    {
        $this->formService = $formService;
    }

    /**
     * Form list
     *
     * @param FormDataTable $datatable
     * @return \Illuminate\View\View
     */
    public function index(FormDataTable $datatable)
    {
        return $datatable->render('cms::form.index');
    }

    /**
     * Create form
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        // return view
        return view('cms::form.create');
    }


    /**
     * Store form
     *
     * @param FormStoreRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(FormStoreRequest $request)
    {
        // create form
        $form = $this->formService->create($request->all());
        // check if form created
        if ($form) {
            // flash notification
            notifier()->success('Form created successfully.');
        } else {
            // flash notification
            notifier()->error('Form cannot be created successfully.');
        }
        // redirect back
        return redirect()->back();
    }

    /**
     * Show form.
     *
     * @param $id
     * @return mixed
     */
    public function show($id)
    {
        // get form
        $form = $this->formService->find($id);
        // check if form doesn't exist
        if (empty($form)) {
            // flash notification
            notifier()->error('Form not found!');
            // redirect back
            return redirect()->back();
        }
        $data = json_decode($form->data);
        // return view
        return view('cms::form.show', compact('form', 'data'));
    }

    /**
     * Show form.
     *
     * @param $id
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        // get form
        $form = $this->formService->find($id);
        // check if form doesn't exist
        if (empty($form)) {
            // flash notification
            notifier()->error('Form not found!');
            // redirect back
            return redirect()->back();
        }
        // return view
        return view('cms::form.edit', compact('form'));
    }

    /**
     * Update form
     *
     * @param FormUpdateRequest $request
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(FormUpdateRequest $request, $id)
    {
        // get form
        $form = $this->formService->find($id);
        // check if form doesn't exist
        if (empty($form)) {
            // flash notification
            notifier()->error('Form not found!');
            // redirect back
            return redirect()->back();
        }
        // update form
        $form = $this->formService->update($request->all(), $id);
        // check if form updated
        if ($form) {
            // flash notification
            notifier()->success('Form updated successfully.');
        } else {
            // flash notification
            notifier()->error('Form cannot be updated successfully.');
        }
        // redirect back
        return redirect()->back();
    }

    /**
     * Delete form
     *
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        // get form
        $form = $this->formService->find($id);
        // check if form doesn't exist
        if (empty($form)) {
            // flash notification
            notifier()->error('Form not found!');
            // redirect back
            return redirect()->back();
        }
        // delete form
        if ($this->formService->delete($id)) {
            // flash notification
            notifier()->success('Form deleted successfully.');
        } else {
            // flash notification
            notifier()->success('Form cannot be deleted.');
        }
        // redirect back
        return redirect()->back();
    }
}
