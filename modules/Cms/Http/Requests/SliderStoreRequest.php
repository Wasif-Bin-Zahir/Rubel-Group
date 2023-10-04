<?php

namespace Modules\Cms\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SliderStoreRequest extends FormRequest
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
            'title' => 'required',
			'description' => 'max:255',
			'link' => 'max:255',
			'image' => 'required|image|max:2048',
			'sort_order' => 'required|integer'
        ];
    }
}
