<?php

namespace Modules\Ums\Entities;

use Illuminate\Database\Eloquent\Model;

class AcademicSession extends Model
{
    protected $table = 'academic_sessions';

    protected $fillable = [
        'name',
		'code',
    ];

    protected $hidden = [

    ];

    protected $casts = [
        'name' => 'string',
		'code' => 'string',
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
