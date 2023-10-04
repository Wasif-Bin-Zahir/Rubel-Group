<?php

namespace Modules\Setting\Entities;

use App\BaseModel;
use Spatie\MediaLibrary\HasMedia\HasMedia;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;

class Site extends BaseModel implements HasMedia
{
    use HasMediaTrait;

    protected $table = 'sites';

    protected $fillable = [
        'title',
		'description',
    ];

    protected $hidden = [

    ];

    protected $appends = [
        'logo',
        'favicon',
        'testimonial_bg'
    ];

    protected $casts = [
        'title' => 'string',
		'description' => 'string',
    ];

    public function getLogoAttribute()
    {
        $media = $this->getMedia(config('core.media_collection.setting_site.logo'));
        if (isset($media[0])) {
            return json_decode(json_encode([
                'file_name' => $media[0]->file_name,
                'file_url' => $media[0]->getUrl()
            ]));
        }
        return null;
    }

    public function getFaviconAttribute()
    {
        $media = $this->getMedia(config('core.media_collection.setting_site.favicon'));
        if (isset($media[0])) {
            return json_decode(json_encode([
                'file_name' => $media[0]->file_name,
                'file_url' => $media[0]->getUrl()
            ]));
        }
        return null;
    }

    public function getTestimonialBgAttribute()
    {
        $media = $this->getMedia(config('core.media_collection.setting_site.testimonial_bg'));
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
        // check for logo
        if (request()->hasFile('logo')) {
            // remove old file from collection
            if ($this->hasMedia(config('core.media_collection.setting_site.logo'))) {
                $this->clearMediaCollection(config('core.media_collection.setting_site.logo'));
            }
            // upload new file to collection
            $this->addMediaFromRequest('logo')
                ->toMediaCollection(config('core.media_collection.setting_site.logo'));
        }

        // check for favicon
        if (request()->hasFile('favicon')) {
            // remove old file from collection
            if ($this->hasMedia(config('core.media_collection.setting_site.favicon'))) {
                $this->clearMediaCollection(config('core.media_collection.setting_site.favicon'));
            }
            // upload new file to collection
            $this->addMediaFromRequest('favicon')
                ->toMediaCollection(config('core.media_collection.setting_site.favicon'));
        }

        // check for testimonial bg
        if (request()->hasFile('testimonial_bg')) {
            // remove old file from collection
            if ($this->hasMedia(config('core.media_collection.setting_site.testimonial_bg'))) {
                $this->clearMediaCollection(config('core.media_collection.setting_site.testimonial_bg'));
            }
            // upload new file to collection
            $this->addMediaFromRequest('testimonial_bg')
                ->toMediaCollection(config('core.media_collection.setting_site.testimonial_bg'));
        }
    }
}
