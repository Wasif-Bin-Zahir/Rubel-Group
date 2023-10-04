<?php

namespace Modules\Cms\Entities;

use App\BaseModel;
use Cviebrock\EloquentSluggable\Sluggable;
use Spatie\MediaLibrary\HasMedia\HasMedia;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;

class Slider extends BaseModel implements hasMedia
{
    use Sluggable, HasMediaTrait;

    protected $table = 'sliders';

    protected $fillable = [
        'title',
        'title_bn',
        'slug',
        'description',
        'description_bn',
        'link',
        'sort_order',
    ];

    protected $hidden = [

    ];

    protected $appends = ['image'];

    protected $casts = [
        'title' => 'string',
        'title_bn' => 'string',
        'slug' => 'string',
        'description' => 'string',
        'description_bn' => 'string',
        'link' => 'string',
        'sort_order' => 'integer',
    ];

    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }

    public function getImageAttribute()
    {
        $media = $this->getMedia(config('core.media_collection.slider.image'));
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
            if ($this->hasMedia(config('core.media_collection.slider.image'))) {
                $this->clearMediaCollection(config('core.media_collection.slider.image'));
            }
            // upload new file to collection
            $this->addMediaFromRequest('image')
                ->toMediaCollection(config('core.media_collection.slider.image'));
        }
    }
}
