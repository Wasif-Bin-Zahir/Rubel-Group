<?php

namespace Modules\Ums\Entities;

use Illuminate\Database\Eloquent\Model;

class SocialSite extends Model
{
    protected $table = 'social_sites';

    protected $fillable = [
        'title',
		'icon',
		'link',
    ];

    protected $hidden = [
        
    ];

    protected $casts = [
        'title' => 'string',
		'icon' => 'string',
		'link' => 'string',
    ];

    
}
