<?php

namespace Modules\Ums\Entities;

use Illuminate\Database\Eloquent\Model;

class UserSkill extends Model
{
    protected $table = 'user_skills';

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
