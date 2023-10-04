<?php

namespace Modules\Ums\Entities;

use App\BaseModel;
use Spatie\MediaLibrary\HasMedia\HasMedia;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;

class UserPersonalInfo extends BaseModel implements HasMedia
{
    use HasMediaTrait;

    protected $table = 'user_personal_infos';

    protected $fillable = [
        'first_name',
		'last_name',
		'first_name_bn',
		'last_name_bn',
        'designation',
        'about',
		'phone_no',
		'mobile_no',
		'fax_no',
		'personal_email',
		'professional_email',
		'dob',
		'blood_group',
		'gender',
		'user_id',
        'website_url',
        'linkedin_link',
        'github_link',
        'twitter_link',
        'facebook_link',
        'youtube_link',
    ];

    protected $hidden = [

    ];

    protected $appends = ['image'];

    protected $casts = [
        'first_name' => 'string',
		'last_name' => 'string',
		'designation' => 'string',
		'about' => 'string',
		'phone_no' => 'string',
		'mobile_no' => 'string',
		'fax_no' => 'string',
		'personal_email' => 'string',
		'professional_email' => 'string',
		'dob' => 'timestamp',
		'blood_group' => 'string',
		'gender' => 'string',
		'user_id' => 'integer',
    ];

    public function getImageAttribute()
    {
        $media = $this->getMedia(config('core.media_collection.user_personal_info.image'));
        if (isset($media[0])) {
            return json_decode(json_encode([
                'file_name' => $media[0]->file_name,
                'file_url' => $media[0]->getUrl()
            ]));
        }
        return null;
    }

    public function uploadFiles()
    {
        // check for image
        if (request()->hasFile('image')) {
            // remove old file from collection
            if ($this->hasMedia(config('core.media_collection.user_personal_info.image'))) {
                $this->clearMediaCollection(config('core.media_collection.user_personal_info.image'));
            }
            // upload new file to collection
            $this->addMediaFromRequest('image')
                ->toMediaCollection(config('core.media_collection.user_personal_info.image'));
        }
    }
}
