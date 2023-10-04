<?php

namespace Modules\Ums\Entities;

use Illuminate\Database\Eloquent\Model;

class UserLanguage extends Model
{
    protected $table = 'user_languages';

    protected $fillable = [
        'name',
		'proficiency',
		'user_id',
    ];

    protected $hidden = [

    ];

    protected $casts = [
        'name' => 'string',
		'proficiency' => 'integer',
		'user_id' => 'integer',
    ];

}
