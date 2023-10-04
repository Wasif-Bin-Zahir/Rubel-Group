<?php

namespace Modules\Ums\Http\Requests\Profile;

use Illuminate\Foundation\Http\FormRequest;
use Modules\Ums\Entities\UserPersonalInfo;

class PersonalInfoStoreRequest extends FormRequest
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
        $id = UserPersonalInfo::where('user_id', auth()->user()->id)->first()->id;
        return [
            'first_name' => 'required|max:255',
            'last_name' => 'required|max:255',
            'first_name_bn' => 'nullable|max:500',
            'last_name_bn' => 'nullable|max:500',
            'designation' => 'required|max:100',
            'about' => 'max:1000',
            'mobile_no' => 'required|numeric|digits:11',
            'phone_no' => 'nullable|numeric',
            'fax_no' => 'nullable',
            'personal_email' => 'required|email|max:100|unique:user_personal_infos,personal_email,' . $id,
            'professional_email' => 'nullable|email|max:100|unique:user_personal_infos,professional_email,' . $id,
            'dob' => 'required|date|before:today',
            'blood_group' => 'required',
            'gender' => 'required',
        ];
    }
}
