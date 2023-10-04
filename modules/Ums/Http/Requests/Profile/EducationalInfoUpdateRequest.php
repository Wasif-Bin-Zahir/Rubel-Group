<?php

namespace Modules\Ums\Http\Requests\Profile;

use Illuminate\Foundation\Http\FormRequest;

class EducationalInfoUpdateRequest extends FormRequest
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
            'institute_name' => 'required|max:255',
            'course_name' => 'required|max:100',
            'degree_name' => 'required|max:100',
            'start_date' => 'required|before:end_date',
            'end_date' => 'required',
        ];
    }
}
