<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class AmbilTestModel extends Model
{
    protected $table = 'test';
    protected $fillable = [

        'idMateri','idUser'

    ];
}
