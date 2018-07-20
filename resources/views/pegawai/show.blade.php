@extends('template.base')
@section('title') Show @endsection
@section('content')
<div class="panel panel-default">
	<div class="panel-heading">
		<div class="col-md-6">
			<a href="{{ route('pegawai.index') }}" class="btn btn-default">
				Back to List
			</a>
		</div>
		<div class="col-md-6">
			
		</div>
		<div class="clearfix"></div>
	</div>
	<div class="panel-body">
		  {!! Form::model($pegawai, ['method' => 'PATCH','class'=>'form-horizontal','id'=>'FormSubmit','route' => ['pegawai.update', $pegawai->id]]) !!}
		<div class="form-group{{ $errors->has('nama') ? ' has-error' : '' }}">
			<label for="nik" class="col-sm-2 control-label">NIP</label>
			<div class="col-sm-10">
				 <label class="control-label">
		         	<strong>:&nbsp{{ $pegawai->nik }}</strong>
		         </label>
			</div>
		</div>
		<div class="form-group{{ $errors->has('nama') ? ' has-error' : '' }}">
			<label for="nama" class="col-sm-2 control-label">Nama</label>
			<div class="col-sm-10">
				<label class="control-label">
		         	<strong>:&nbsp{{ $pegawai->nama }}</strong>
		         </label>
			</div>
		</div>
		<div class="form-group{{ $errors->has('tempat_lahir') ? ' has-error' : '' }}">
			<label for="tempat_lahir" class="col-sm-2 control-label">Tempat Lahir</label>
			<div class="col-sm-10">
				<label class="control-label">
		         	<strong>:&nbsp{{ $pegawai->tempat_lahir }}</strong>
		         </label>
			</div>
		</div>
		<div class="form-group{{ $errors->has('tanggal_Lahir') ? ' has-error' : '' }}">
			<label for="tanggal_Lahir" class="col-sm-2 control-label">Tanggal Lahir</label>
			<div class="col-sm-10">
				<label class="control-label">
		         	<strong>:&nbsp{{ $pegawai->tanggal_lahir }}</strong>
		         </label>
			</div>
		</div>
		<div class="form-group{{ $errors->has('no_telepon') ? ' has-error' : '' }}">
			<label for="no_telepon" class="col-sm-2 control-label">Nomor Telepon</label>
			<div class="col-sm-10">
				<label class="control-label">
		         	<strong>:&nbsp{{ $pegawai->no_telepon }}</strong>
		         </label>
			</div>
		</div>
		<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
			<label for="email" class="col-sm-2 control-label">Email</label>
			<div class="col-sm-10">
				<label class="control-label">
		         	<strong>:&nbsp{{ $pegawai->email }}</strong>
		         </label>
			</div>
		</div>
		<div class="form-group{{ $errors->has('alamat_lengkap') ? ' has-error' : '' }}">
			<label for="alamat_lengkap" class="col-sm-2 control-label">Alamat Lengkap</label>
			<div class="col-sm-10">
				<label class="control-label">
		         	<strong>:&nbsp{{ $pegawai->alamat_lengkap }}</strong>
		         </label>
			</div>
		</div>
		<div class="form-group{{ $errors->has('pendidikan_teakhir') ? ' has-error' : '' }}">
			<label for="alamat_lengkap" class="col-sm-2 control-label">Pendidikan Terakhir</label>
			<div class="col-sm-10">
				<label class="control-label">
		         	<strong>:&nbsp{{ $pegawai->pendidikan_teakhir }}</strong>
		         </label>
			</div>
		</div>
		<div class="form-group{{ $errors->has('jabatan') ? ' has-error' : '' }}">
			<label for="jabatan" class="col-sm-2 control-label">Jabatan</label>
			<div class="col-sm-10">
				<label class="control-label">
		         	<strong>:&nbsp{{ $pegawai->jabatan }}</strong>
		         </label>
			</div>
		</div>
		<div class="form-group{{ $errors->has('bagian') ? ' has-error' : '' }}">
			<label for="bagian" class="col-sm-2 control-label">Bagian</label>
			<div class="col-sm-10">
				<label class="control-label">
		         	<strong>:&nbsp{{ $pegawai->bagian }}</strong>
		         </label>
			</div>
		</div>
		<div class="form-group{{ $errors->has('status') ? ' has-error' : '' }}">
			<label for="status" class="col-sm-2 control-label">Status</label>
			<div class="col-sm-10">
				<label class="control-label">
		         	<strong>:&nbsp{{ $pegawai->status }}</strong>
		         </label>
			</div>
		</div>
		<div class="form-group{{ $errors->has('tanggal_gabung') ? ' has-error' : '' }}">
			<label for="tanggal_gabung" class="col-sm-2 control-label">Tanggal Gabung</label>
			<div class="col-sm-10">
				<label class="control-label">
		         	<strong>:&nbsp{{ $pegawai->tanggal_gabung }}</strong>
		         </label>
			</div>
		</div>
		{!! Form::close() !!}
	</div>
</div>
@endsection