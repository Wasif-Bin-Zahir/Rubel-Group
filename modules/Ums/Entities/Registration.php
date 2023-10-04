<?php

namespace Modules\Ums\Entities;

use Illuminate\Database\Eloquent\Model;

class Registration extends Model
{
    protected $table = 'registrations';

    protected $fillable = [
        'first_name',
		'last_name',
		'email',
		'phone',
		'bsc_session_id',
		'bsc_batch_id',
		'bsc_reg_no',
		'bsc_student_id',
		'msc_session_id',
		'msc_batch_id',
		'msc_reg_no',
		'msc_student_id',
		'membership_type',
		'designation',
		'company',
		'country',
		'interest_on',
		'approved_at',
		'approved_by',
		'user_id',
    ];

    protected $hidden = [

    ];

    protected $casts = [
        'first_name' => 'string',
        'last_name' => 'string',
        'email' => 'string',
        'phone' => 'string',
        'bsc_session_id' => 'integer',
        'bsc_batch_id' => 'integer',
        'bsc_reg_no' => 'string',
        'bsc_student_id' => 'string',
        'msc_session_id' => 'integer',
        'msc_batch_id' => 'integer',
        'msc_reg_no' => 'string',
        'msc_student_id' => 'string',
        'membership_type' => 'integer',
        'user_id' => 'integer',
        'interest_on' => 'string',
        'company' => 'string',
        'country' => 'string',
        'designation' => 'string',
    ];

    protected $format = 'Y-m-d';

    public function getCreatedAtAttribute($value)
    {
        return \Carbon\Carbon::parse($value)->format($this->format);
    }

    public function getUpdatedAtAttribute($value)
    {
        return \Carbon\Carbon::parse($value)->format($this->format);
    }
}
