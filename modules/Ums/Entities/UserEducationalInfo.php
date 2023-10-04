<?php

namespace Modules\Ums\Entities;

use Illuminate\Database\Eloquent\Model;

class UserEducationalInfo extends Model
{
    protected $table = 'user_educational_infos';

    protected $fillable = [
        'institute_name',
		'course_name',
		'degree_name',
		'start_date',
		'end_date',
		'description',
        'institute_address',
		'institute_website',
		'institute_email',
		'institute_phone',
		'user_id',
    ];

    protected $hidden = [

    ];

    protected $casts = [
        'institute_name' => 'string',
		'course_name' => 'string',
		'degree_name' => 'string',
		'start_date' => 'date',
		'end_date' => 'date',
		'description' => 'string',
        'institute_address' => 'string',
		'institute_website' => 'string',
		'institute_email' => 'string',
		'institute_phone' => 'string',
		'user_id' => 'integer',
    ];
}
