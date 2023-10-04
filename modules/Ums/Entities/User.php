<?php

namespace Modules\Ums\Entities;

use Spatie\MediaLibrary\HasMedia\HasMedia;
class User extends \App\User implements hasMedia
{
    protected $table = 'users';
    protected $guard_name = 'web';

    public function personalInfo()
    {
        return $this->hasOne(UserPersonalInfo::class, 'user_id', 'id');
    }

    public function residentialInfo()
    {
        return $this->hasOne(UserResidentialInfo::class, 'user_id', 'id');
    }

    public function workInfos()
    {
        return $this->hasMany(UserWorkInfo::class, 'user_id', 'id');
    }

    public function skillInfos()
    {
        return $this->hasMany(UserSkill::class, 'user_id', 'id');
    }

    public function educationalInfos()
    {
        return $this->hasMany(UserEducationalInfo::class, 'user_id', 'id');
    }

    public function batch()
    {
        return $this->hasOne(Batch::class, 'batch_id', 'id');
    }

    public function languages()
    {
        return $this->hasMany(UserLanguage::class, 'user_id', 'id');
    }

    public function interests()
    {
        return $this->hasMany(UserInterest::class, 'user_id', 'id');
    }

    // get avatar attribute
    public function getAvatarAttribute()
    {
        $media = $this->getMedia(config('core.media_collection.user.avatar'));
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
            if ($this->hasMedia(config('core.media_collection.user.avatar'))) {
                $this->clearMediaCollection(config('core.media_collection.user.avatar'));
            }
            // upload new file to collection
            $this->addMediaFromRequest('avatar')
                ->toMediaCollection(config('core.media_collection.user.avatar'));
        }
    }

    protected $format = 'Y-m-d';

    public function getCreatedAtAttribute($value)
    {
        return \Carbon\Carbon::parse($value)->format($this->format);
    }

    public function getUpdatedAtAttribute($value)
    {
        return \Carbon\Carbon::parse($value)->format($this->format);
    }
}
