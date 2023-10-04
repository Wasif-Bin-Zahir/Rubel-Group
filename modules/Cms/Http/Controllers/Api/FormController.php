<?php

namespace Modules\Cms\Http\Controllers\Api;

use App\Http\Controllers\Controller;

// services...
use Modules\Cms\Services\FormService;

// requests...
use Modules\Cms\Http\Requests\FormStoreRequest;
use Modules\Cms\Http\Requests\FormUpdateRequest;

// resources...
use Modules\Cms\Transformers\FormResource;

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
     * Form list.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // get all forms
        $forms = $this->formService->all(request()->get('limit') ?? 0);
        // if no form found
        if (!count($forms)) {
            // error response
            return responder()
                ->status('success')
                ->code(404)
                ->message('Form not available.');
        }
        // transform forms
        $forms = FormResource::collection($forms);
        // success response
        return responder()
            ->status('success')
            ->code(200)
            ->message('Data available')
            ->data($forms);
    }

    /**
     * Store a form.
     *
     * @param FormStoreRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(FormStoreRequest $request)
    {
        // create form
        $form = $this->formService->create($request->all());
        // check if created
        if ($form) {
            // transform form
            $form = FormResource::make($form);
            // success response
            return responder()
                ->status('success')
                ->code(201)
                ->message('Form created successfully.')
                ->data($form);
        } else {
            // error response
            return responder()
                ->status('error')
                ->code(400)
                ->message('Form cannot be created.');
        }
    }

    /**
     * Show form.
     *
     * @param $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // get form
        $form = $this->formService->find($id);
        // if no form found
        if (empty($form)) {
            // error response
            return responder()
                ->status('error')
                ->code(404)
                ->message('Form not found.');
        }
        // transform form
        $form = FormResource::make($form);
        // success response
        return responder()
            ->status('success')
            ->code(200)
            ->message('Form is available.')
            ->data($form);
    }

    /**
     * Update form.
     *
     * @param FormUpdateRequest $request
     * @param $id
     * @return \Illuminate\Http\Response
     */
    public function update(FormUpdateRequest $request, $id)
    {
        // get form
        $form = $this->formService->find($id);
        // if no form found
        if (empty($form)) {
            // error response
            return responder()
                ->status('error')
                ->code(404)
                ->message('Form not found.');
        }
        // update form
        $form = $this->formService->update($request->all(), $id);
        // check if updated
        if ($form) {
            // get updated form
            $form = $this->formService->find($id);
            // transform form
            $form = FormResource::make($form);
            // success response
            return responder()
                ->status('success')
                ->code(200)
                ->message('Form updated successfully.')
                ->data($form);
        } else {
            // error response
            return responder()
                ->status('error')
                ->code(400)
                ->message('Form cannot be updated.');
        }
    }

    /**
     * Remove form.
     *
     * @param $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // get form
        $form = $this->formService->find($id);
        // if no form found
        if (empty($form)) {
            // error response
            return responder()
                ->status('error')
                ->code(404)
                ->message('Form not found.');
        }
        // delete form
        if ($this->formService->delete($id)) {
            // success response
            return responder()
                ->status('success')
                ->code(200)
                ->message('Form deleted successfully.');
        } else {
            // error response
            return responder()
                ->status('error')
                ->code(400)
                ->message('Form cannot be deleted.');
        }
    }
}
