<?php

namespace Modules\Cms\Entities;

use App\BaseModel;
use Spatie\MediaLibrary\HasMedia\HasMedia;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;

class CommitteeMember extends BaseModel implements HasMedia
{
    use HasMediaTrait;

    protected $table = 'committee_members';

    protected $fillable = [
        'name',
        'name_bn',
		'designation',
		'designation_bn',
        'company',
        'company_bn',
		'bio',
		'bio_bn',
		'email',
		'phone',
		'mobile',
		'fax',
		'facebook',
		'twitter',
		'linkedin',
		'committee_category_id',
		'sort_order',
    ];

    protected $hidden = [

    ];

    protected $appends = ['avatar'];

    protected $casts = [
        'name' => 'string',
        'name_bn' => 'string',
		'designation' => 'string',
		'designation_bn' => 'string',
        'company' => 'string',
        'company_bn' => 'string',
		'bio' => 'string',
		'bio_bn' => 'string',
		'email' => 'string',
		'phone' => 'string',
		'mobile' => 'string',
		'fax' => 'string',
		'facebook' => 'string',
		'twitter' => 'string',
		'linkedin' => 'string',
		'committee_category_id' => 'integer',
		'sort_order' => 'integer',
    ];

    public function getAvatarAttribute()
    {
        $media = $this->getMedia(config('core.media_collection.committee_member.avatar'));
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
        // check for avatar
        if (request()->hasFile('avatar')) {
            // remove old file from collection
            if ($this->hasMedia(config('core.media_collection.committee_member.avatar'))) {
                $this->clearMediaCollection(config('core.media_collection.committee_member.avatar'));
            }
            // upload new file to collection
            $this->addMediaFromRequest('avatar')
                ->toMediaCollection(config('core.media_collection.committee_member.avatar'));
        }
    }
}
