<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Support extends Model
{
    protected $fillable = [
        'support_name',
        'support_mail',
        'support_questions'
    ];
    public $timestamps = false ;
    protected $primaryKey = 'support_id';

}


