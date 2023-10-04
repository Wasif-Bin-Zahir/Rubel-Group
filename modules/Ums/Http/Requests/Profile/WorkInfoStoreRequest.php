<?php

namespace Modules\Ums\Http\Requests\Profile;

use Illuminate\Foundation\Http\FormRequest;

class WorkInfoStoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'company_name' => 'required|max:255',
            'designation' => 'required|max:100',
			'company_address' => 'required|max:255',
            'start_date' => 'required|before:end_date',
            'end_date' => 'nullable',
            'description' => 'nullable|max:1500',
        ];
    }
}
