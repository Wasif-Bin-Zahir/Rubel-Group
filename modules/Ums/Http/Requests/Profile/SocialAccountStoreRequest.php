<?php

namespace Modules\Ums\Http\Requests\Profile;

use Illuminate\Foundation\Http\FormRequest;

class SocialAccountStoreRequest extends FormRequest
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
			'website_url' => 'nullable|url|max:255',
			'linkedin_link' => 'nullable|url|max:255',
			'github_link' => 'nullable|url|max:255',
			'twitter_link' => 'nullable|url|max:255',
			'facebook_link' => 'nullable|url|max:255',
			'youtube_link' => 'nullable|url|max:255',
        ];
    }
}
