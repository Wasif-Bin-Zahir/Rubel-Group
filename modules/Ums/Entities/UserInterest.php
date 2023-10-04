<?php

namespace Modules\Ums\Entities;

use Illuminate\Database\Eloquent\Model;

class UserInterest extends Model
{
    protected $table = 'user_interests';

    protected $fillable = [
        'name',
		'user_id',
    ];

    protected $hidden = [

    ];

    protected $casts = [
        'name' => 'string',
		'user_id' => 'integer',
    ];


}
