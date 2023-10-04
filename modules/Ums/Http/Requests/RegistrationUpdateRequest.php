<?php

namespace Modules\Ums\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Modules\Ums\Entities\Registration;

class RegistrationUpdateRequest extends FormRequest
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
        $registration = Registration::find($this->registration);

        return [
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|unique:registrations,email,' . $this->registration . '|unique:users,email,' . $registration->user_id,
            'phone' => 'required|unique:registrations,phone,' . $this->registration . '|unique:users,phone,' . $registration->user_id,
            'bsc_session_id' => 'nullable|required_without:msc_session_id',
            'bsc_batch_id' => 'nullable|required_with:bsc_session_id',
            'bsc_reg_no' => 'nullable|required_with:bsc_batch_id|unique:registrations,email,' . $this->registration,
            'bsc_student_id' => 'nullable|required_with:bsc_reg_no|unique:registrations,email,' . $this->registration,
            'msc_session_id' => 'nullable|required_without:bsc_session_id',
            'msc_batch_id' => 'nullable|required_with:msc_session_id',
            'msc_reg_no' => 'nullable|required_with:msc_batch_id|unique:registrations,email,' . $this->registration,
            'msc_student_id' => 'nullable|required_with:msc_reg_no|unique:registrations,email,' . $this->registration
        ];
    }
}
