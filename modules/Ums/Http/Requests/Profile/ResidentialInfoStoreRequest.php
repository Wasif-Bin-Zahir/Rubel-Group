<?php

namespace Modules\Ums\Http\Requests\Profile;

use Illuminate\Foundation\Http\FormRequest;

class ResidentialInfoStoreRequest extends FormRequest
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
            'present_country' => 'required|max:50',
            'present_state' => 'required|max:50',
            'present_city' => 'required|max:50',
            'present_area' => 'nullable|max:50',
            'present_road' => 'nullable|max:100',
            'present_address' => 'nullable|max:255',
            'permanent_country' => 'required|max:50',
            'permanent_state' => 'required|max:50',
            'permanent_city' => 'required|max:50',
            'permanent_area' => 'nullable|max:50',
            'permanent_road' => 'nullable|max:100',
            'permanent_address' => 'nullable|max:255',
        ];
    }
}
