<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class MateriModel extends Model
{
    protected $table = 'materi';
    protected $fillable = [

        'nama','keterangan'

    ];
}
