<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\model\MateriModel;
use App\model\MateriDetilModel;
use App\model\AmbilTestModel;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

use Yajra\Datatables\Datatables;

class TestController extends Controller
{
    public function index()
    {
    	// index pengguna
        return view('pages.pengguna');
    }

    // Pengambilan Test
    public function tampilanAmbilTest()
    {
    	return view('pages.ambilTest');
    }

    public function daftarAmbilTest()
    {
    	$data = MateriModel::latest()->get();

        return Datatables::of($data)

                ->addIndexColumn()

                ->addColumn('action', function($row){

                       $btn = '<a href="/ambiltest/simpan/'.$row->id.'" data-original-title="Ambil" class="edit btn btn-primary btn-sm editItem">Ambil Test</a>';

                        return $btn;

                })

                ->rawColumns(['action'])

                ->make(true);
    }

    public function simpanAmbilTest(request $request, $yoman)
    {
    	$id = ['id' => $request->id];
		$data = [
			'idMateri' => $yoman,
			'idUser' => Auth::id(),
		];
		AmbilTestModel::updateOrCreate($id, $data);
		return redirect()->intended('mulaitest');
    }

    public function mulaiTest()
    {
        // daftat test yang dipilih
        return view('pages.mulaitest');
    }

    public function daftarMulaiTest()
    {
        // tabel pengguna
        $data = DB::table('test')->join('materi', 'test.idMateri', '=', 'materi.id')
            ->select('test.id as id', 'materi.nama')->where('test.idUser', Auth::id());
    //    $data = AmbilTestModel::latest()->where(['idUser'=>Auth::id()])->get();

        return Datatables::of($data)

                ->addIndexColumn()

                ->addColumn('action', function($row){

                    $btn = '<a href="/mulaitestdetail/'.$row->id.'" data-toggle="tooltip" class="edit btn btn-primary btn-sm editItem">Mulai Test</a>';

                    return $btn;

                })

                ->rawColumns(['action'])

                ->make(true);
    }

    public function mulaitestdetail($id)
    {
        return view('pages.mulaiTestDetail');
    }

    public function daftarTestDetail(Request $request, $id)
    {
        // daftar pengerjaan soal
        // where materidetail.idMateri = test.idMateri
        $data = MateriDetilModel::latest()->where('idMateri', $id)->get();

        return Datatables::of($data)

                ->addIndexColumn()

                ->addColumn('checkbox1', function($row){

                       $btn = '<input type="checkbox" name="checkbox'.$row->id.'" value="'.$row->nilai1.'">';

                        return $btn;

                })

                ->addColumn('checkbox2', function($row){

                       $btn = '<input type="checkbox" name="checkbox'.$row->id.'" value="'.$row->nilai2.'">';

                        return $btn;

                })

                ->rawColumns(['action'])

                ->make(true);
    }
}
