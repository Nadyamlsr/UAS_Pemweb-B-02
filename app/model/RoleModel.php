<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class RoleModel extends Model
{
	protected $table = 'role';
    protected $fillable = [

        'nama','keterangan'

    ];

    public function __construct()
    {
    	
    }
}
