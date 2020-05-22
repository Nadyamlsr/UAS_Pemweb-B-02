<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class MateriDetilModel extends Model
{
    protected $table = 'materidetail';
    protected $fillable = [

        'idMateri','pertanyaan1', 'nilai1', 'pertanyaan2', 'nilai2'

    ];
}
