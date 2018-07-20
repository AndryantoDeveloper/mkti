<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Input;
use App\Pegawai;

class PegawaiController extends Controller{

	public function index(){

		$q = \Input::get('search');
		$result = Pegawai::where('nama', 'LIKE', '%' . $q . '%')
			->orWhere('tanggal_lahir', 'LIKE', '%' . $q . '%')
			->orWhere('tempat_lahir', 'LIKE', '%' . $q . '%')
			->orWhere('no_telepon', 'LIKE', '%' . $q . '%')
			->orWhere('email', 'LIKE', '%' . $q . '%')
			->orWhere('alamat_lengkap', 'LIKE', '%' . $q . '%')
			->orWhere('pendidikan_teakhir', 'LIKE', '%' . $q . '%')
			->orWhere('jabatan', 'LIKE', '%' . $q . '%')
			->orWhere('bagian', 'LIKE', '%' . $q . '%')
			->orWhere('status', 'LIKE', '%' . $q . '%')
			->orderBy('id', 'desc')
			->paginate(10);

		$result->appends(['search' => $q]);

    	return view('pegawai.index', compact('result'));
	}

	public function create(){
		return view('pegawai.create');
	}

	public function store(Request $request){
		Pegawai::create([
			"nik"=>$request->get('nik'),
			"nama"=>$request->get('nama'),
			"tanggal_lahir"=>$request->get('tanggal_lahir'),
			"tempat_lahir"=>$request->get('tempat_lahir'),
			"no_telepon"=>$request->get('no_telepon'),
			"email"=>$request->get('email'),
			"alamat_lengkap"=>$request->get('alamat_lengkap'),
			"pendidikan_teakhir"=>$request->get('pendidikan_teakhir'),
			"jabatan"=>$request->get('jabatan'),
			"bagian"=>$request->get('bagian'),
			"status"=>$request->get('status'),
			"tanggal_gabung"=>$request->get('tanggal_gabung'),
		]);
		\Session::flash('message', 'Your item has been saved.');
		return redirect()->route('pegawai.index');
	}

	public function show($id){
		$pegawai = Pegawai::findOrFail($id);
		return view('pegawai.show', compact('pegawai'));
	}

	public function edit($id){
		$pegawai = Pegawai::findOrFail($id);
		return view('pegawai.edit', compact('pegawai'));
	}

	public function update(Request $request, $id){
		$pegawai = Pegawai::findOrFail($id);
		$pegawai->nik = $request->get('nik');
		$pegawai->nama = $request->get('nama');
		$pegawai->tanggal_lahir = $request->get('tanggal_lahir');
		$pegawai->tempat_lahir = $request->get('tempat_lahir');
		$pegawai->no_telepon = $request->get('no_telepon');
		$pegawai->email = $request->get('email');
		$pegawai->alamat_lengkap = $request->get('alamat_lengkap');
		$pegawai->pendidikan_teakhir = $request->get('pendidikan_teakhir');
		$pegawai->jabatan = $request->get('jabatan');
		$pegawai->bagian = $request->get('bagian');
		$pegawai->status = $request->get('status');
		$pegawai->tanggal_gabung = $request->get('tanggal_gabung');
		$pegawai->save();
		\Session::flash('message', 'Your item has been updated.');
		return redirect()->route('pegawai.index');
	}

	public function destroy($id){
		Pegawai::findOrFail($id)->delete();
		\Session::flash('message', 'Your item has been deleted.');
		return redirect()->route('pegawai.index');
	}

}