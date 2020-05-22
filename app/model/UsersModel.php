<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class UsersModel extends Model
{
    protected $table = 'users';

    protected $fillable = [

        'name','email', 'password', 'role'

    ];
}
