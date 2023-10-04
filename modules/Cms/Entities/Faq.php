<?php

namespace Modules\Cms\Entities;

use App\BaseModel;

class Faq extends BaseModel
{
    protected $table = 'faqs';

    protected $fillable = [
        'question',
        'question_bn',
		'answer',
		'answer_bn',
    ];

    protected $hidden = [

    ];

    protected $casts = [
        'question' => 'string',
        'question_bn' => 'string',
		'answer' => 'string',
		'answer_bn' => 'string',
    ];


}
