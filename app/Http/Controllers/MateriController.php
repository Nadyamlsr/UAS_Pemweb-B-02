<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Auth\Access\Response;

use Yajra\Datatables\Datatables;
use App\model\MateriModel;
use App\model\MateriDetilModel;

class MateriController extends Controller
{
	
	public function index()
	{
		// Halaman Materi
		return view('pages.materi');
	}

	public function daftarMateri()
	{
		// datatables daftar materi
		$data = MateriModel::latest()->get();

        return Datatables::of($data)

                ->addIndexColumn()

                ->addColumn('action', function($row){

                       $btn = '<a href="javascript:void(0)" data-toggle="tooltip" onclick="editData('."'".$row->id."'".')" data-original-title="Edit" class="edit btn btn-primary btn-sm editItem">Edit</a>';



                       $btn = $btn.' <a href="javascript:void(0)" data-toggle="tooltip"  onclick="hapus('."'".$row->id."'".')" data-original-title="Delete" class="btn btn-danger btn-sm deleteItem">Delete</a>';

                       $btn = $btn.' <a href="'.url('/detailmateri/'.$row->id.'').'" data-toggle="tooltip" data-original-title="Detail" class="btn btn-light-primary btn-sm">Detail</a>';

                        return $btn;

                })

                ->rawColumns(['action'])

                ->make(true);
	}

	public function getMateri($id)
	{
		echo json_encode(MateriModel::find($id));
	}

	public function simpanMateri(request $request)
	{
		$id = ['id' => $request->id];
		$data = [
			'nama' => $request->nama,
			'keterangan' => $request->keterangan,
		];
		MateriModel::updateOrCreate($id, $data);
		echo json_encode(array("status" => TRUE));
	}

	public function deleteMateri($id)
	{
		MateriModel::destroy($id);
		echo json_encode(array("status" => TRUE));
	}

	public function detailMateri($id)
	{
		// halaman detailmateri
		return view('pages.materiDetail');
	}

	public function daftarDetailMateri($id)
	{
		$data = MateriDetilModel::latest()->where('idMateri', $id)->get();

        return Datatables::of($data)

                ->addIndexColumn()

                ->addColumn('action', function($row){

                       $btn = '<a href="javascript:void(0)" data-toggle="tooltip"  onclick="editData('."'".$row->id."'".')" data-original-title="Edit" class="edit btn btn-primary btn-sm editItem">Edit</a>';



                       $btn = $btn.' <a href="javascript:void(0)" data-toggle="tooltip"  onclick="hapus('."'".$row->id."'".')" data-original-title="Delete" class="btn btn-danger btn-sm deleteItem">Delete</a>';

                        return $btn;

                })

                ->rawColumns(['action'])

                ->make(true);
	}

	public function simpanDetailMateri(request $request)
	{
		$id = ['id' => $request->id];
		$data = [
			'idMateri' => $request->idmateri,
			'pertanyaan1' => $request->pertanyaan1,
			'nilai1' => $request->nilai1,
			'pertanyaan2' => $request->pertanyaan2,
			'nilai2' => $request->nilai2,
		];
		MateriDetilModel::updateOrCreate($id, $data);
		echo json_encode(array("status" => TRUE));
	}

	public function editDetailMateri($id)
	{
		echo json_encode(MateriDetilModel::find($id));
	}

	public function deleteDetailMateri($id)
	{
		MateriDetilModel::destroy($id);
		echo json_encode(array("status" => TRUE));
	}
}