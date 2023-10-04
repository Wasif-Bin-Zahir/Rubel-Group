<?php

namespace Modules\Ums\Entities;

use Illuminate\Database\Eloquent\Model;

class Batch extends Model
{
    protected $table = 'batches';

    protected $fillable = [
        'name',
		'code',
		'type',
    ];

    protected $hidden = [

    ];

    protected $casts = [
        'name' => 'string',
		'code' => 'string',
		'type' => 'integer',
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
