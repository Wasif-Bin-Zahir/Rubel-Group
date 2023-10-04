<?php

namespace Modules\Cms\Entities;

use App\BaseModel;
use Cviebrock\EloquentSluggable\Sluggable;

class PageCategory extends BaseModel
{
    use Sluggable;

    protected $table = 'page_categories';

    protected $fillable = [
        'title',
        'title_bn',
        'slug',
		'description',
		'description_bn',
    ];

    protected $hidden = [

    ];

    protected $casts = [
        'title' => 'string',
        'title_bn' => 'string',
        'slug' => 'string',
		'description' => 'string',
		'description_bn' => 'string',
    ];

    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }
}
