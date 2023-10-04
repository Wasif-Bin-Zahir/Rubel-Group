<?php

namespace Modules\Cms\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContentStoreRequest extends FormRequest
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
        $rules = [
            'title' => 'required',
			'description' => 'required',
			'content_category_id' => 'required',
			'image' => 'sometimes|image|max:1024',
            // 'display_date' => 'required',
			'attachment' => 'sometimes|max:2048|mimes:pdf,doc,docx,ppt,xls,xlsx'
        ];

        if (request()->get('content_category_id') == 1) {
            $rules = $rules + [
                'start_date' => 'required',
                'end_date' => 'required|after_or_equal:start_date',
            ];
        }

        return $rules;
    }
}
