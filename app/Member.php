<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    protected $fillable = [
        'member_id',
        'email',
        'password',
        'name',
        'phone',
    ];
    public $timestamps = false ;
    protected $primaryKey = 'member_id';
}


