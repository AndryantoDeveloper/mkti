<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Input;
use App\Keluarga;
use App\Pegawai;


class KeluargaController extends Controller{


	public function index(){

		$q = \Input::get('search');
		$result = Keluarga::where('hubungan_keluarga.nama', 'LIKE', '%' . $q . '%')
			->orWhere('hubungan_keluarga.hubungan', 'LIKE', '%' . $q . '%')
			->orWhere('p.nama', 'LIKE', '%' . $q . '%')
			->join('pegawai as p', function($join) {
            	$join->on('hubungan_keluarga.pegawai_id', '=', 'p.id');
         	})
			->orderBy('hubungan_keluarga.id', 'desc')
			->paginate(10);

		$result->appends(['search' => $q]);

    	return view('keluarga.index', compact('result'));
	}

	public function create(){
		return view('keluarga.create',["pegawai"=>Pegawai::All()]);
	}

	public function store(Request $request){
		Keluarga::create([
			"pegawai_id"=>$request->get('pegawai_id'),
			"nama"=>$request->get('nama'),
			"hubungan"=>$request->get('hubungan')
		]);
		\Session::flash('message', 'Your item has been saved.');
		return redirect()->route('keluarga.index');
	}

	public function show($id){
		$keluarga = Keluarga::findOrFail($id);
		return view('keluarga.show', compact('keluarga'));
	}

	public function edit($id){
		$keluarga = Keluarga::findOrFail($id);
		return view('keluarga.edit', ["keluarga"=>$keluarga,"pegawai"=>Pegawai::All()]);
	}

	public function update(Request $request, $id){
		$keluarga = Keluarga::findOrFail($id);
		$keluarga->pegawai_id = $request->get('pegawai_id');
		$keluarga->nama = $request->get('nama');
		$keluarga->hubungan = $request->get('hubungan');
		$keluarga->save();
		\Session::flash('message', 'Your item has been updated.');
		return redirect()->route('keluarga.index');
	}

	public function destroy($id){
		Keluarga::findOrFail($id)->delete();
		\Session::flash('message', 'Your item has been deleted.');
		return redirect()->route('keluarga.index');
	}

}