<?php

namespace Modules\Cms\Entities;

use App\BaseModel;
use Cviebrock\EloquentSluggable\Sluggable;
use Spatie\MediaLibrary\HasMedia\HasMedia;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;

class Page extends BaseModel implements hasMedia
{
    use Sluggable, HasMediaTrait;

    protected $table = 'pages';

    protected $fillable = [
        'title',
        'title_bn',
		'slug',
		'description',
		'description_bn',
		'page_category_id',
    ];

    protected $hidden = [

    ];
    protected $appends = ['image', 'attachment'];

    protected $casts = [
        'title' => 'string',
        'title_bn' => 'string',
		'slug' => 'string',
		'description' => 'string',
		'description_bn' => 'string',
		'page_category_id' => 'integer',
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
        $media = $this->getMedia(config('core.media_collection.page.image'));
        if (isset($media[0])) {
            return json_decode(json_encode([
                'file_name' => $media[0]->file_name,
                'file_url' => $media[0]->getUrl()
            ]));
        }
        return null;
    }

    public function getAttachmentAttribute()
    {
        $media = $this->getMedia(config('core.media_collection.page.attachment'));
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
            if ($this->hasMedia(config('core.media_collection.page.image'))) {
                $this->clearMediaCollection(config('core.media_collection.page.image'));
            }
            // upload new file to collection
            $this->addMediaFromRequest('image')
                ->toMediaCollection(config('core.media_collection.page.image'));
        }

        // check for attachment
        if (request()->hasFile('attachment')) {
            // remove old file from collection
            if ($this->hasMedia(config('core.media_collection.page.attachment'))) {
                $this->clearMediaCollection(config('core.media_collection.page.attachment'));
            }
            // upload new file to collection
            $this->addMediaFromRequest('attachment')
                ->toMediaCollection(config('core.media_collection.page.attachment'));
        }
    }
}
