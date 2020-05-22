<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;
use Illuminate\Auth\Access\Response;

use App\model\UsersModel;
use App\model\RoleModel;
use Yajra\Datatables\Datatables;

use Illuminate\Support\Facades\Hash;

class PenggunaController extends Controller
{
    public function __construct(){
        
    }

    //
    public function index()
    {
    	// index pengguna
        return view('pages.pengguna');
    }

    public function test()
    {
        echo json_encode(Auth::user());
    }

    public function daftarPengguna()
    {
        // tabel pengguna
        $data = UsersModel::latest()->get();

        return Datatables::of($data)

                ->addIndexColumn()

                ->addColumn('action', function($row){

                    $btn = '<a href="javascript:void(0)" data-toggle="tooltip"  onclick="editData('."'".$row->id."'".')" data-original-title="Edit" class="edit btn btn-primary btn-sm editItem">Edit</a>';



                    $btn = $btn.' <a href="javascript:void(0)" data-toggle="tooltip"  onclick="delete('."'".$row->id."'".')" data-original-title="Delete" class="btn btn-danger btn-sm deleteItem">Delete</a>';

                    return $btn;

                })

                ->rawColumns(['action'])

                ->make(true);
    }

    public function simpanPengguna(request $request)
    {
        $id = ['id' => $request->id];
        if ($request->id == ''){
                $data = [
                'name' => $request->nama,
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'role' => $request->role,
            ];
        } else {
            $data = [
                'name' => $request->nama,
                'email' => $request->email,
                'role' => $request->role,
            ];
        }
        
        UsersModel::updateOrCreate($id, $data);
        echo json_encode(array("status" => TRUE));
    }

    public function getPengguna($id)
    {
        // ambil row data pengguna
        echo json_encode(UsersModel::find($id));
    }

    public function hapusPengguna($id)
    {
        // softDelete
        UsersModel::destroy($id);
        echo json_encode(array("status" => TRUE));
    }

    public function forceHapusPengguna($id)
    {
        // force delete
    }
}
