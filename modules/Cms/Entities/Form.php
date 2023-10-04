<?php

namespace Modules\Cms\Entities;

use Illuminate\Database\Eloquent\Model;

class Form extends Model
{
    protected $table = 'forms';

    protected $fillable = [
        'title',
		'data',
		'agent_info',
		'type',
    ];

    protected $hidden = [
        
    ];

    protected $casts = [
        'title' => 'string',
		'data' => 'string',
		'agent_info' => 'string',
		'type' => 'string',
    ];

    
}
