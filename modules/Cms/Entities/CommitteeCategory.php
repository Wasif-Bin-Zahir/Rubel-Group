<?php

namespace Modules\Cms\Entities;

use Illuminate\Database\Eloquent\Model;

class CommitteeCategory extends Model
{
    protected $table = 'committee_categories';

    protected $fillable = [
        'title',
        'title_bn',
		'description',
		'description_bn',
    ];

    protected $hidden = [

    ];

    protected $casts = [
        'title' => 'string',
        'title_bn' => 'string',
		'description' => 'string',
		'description_bn' => 'string',
    ];


}
