<?php

namespace Modules\Ums\Entities;

use Illuminate\Database\Eloquent\Model;

class UserResidentialInfo extends Model
{
    protected $table = 'user_personal_infos';

    protected $fillable = [
        'present_country',
        'present_state',
        'present_city',
        'present_area',
        'present_road',
        'present_address',
        'permanent_country',
        'permanent_state',
        'permanent_city',
        'permanent_area',
        'permanent_road',
        'permanent_address',
		'user_id',
    ];

    protected $hidden = [

    ];

    protected $casts = [

    ];

}
