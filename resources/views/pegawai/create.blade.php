@extends('template.base')
@section('title') Create @endsection
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
		{!! Form::open(array('route' => 'pegawai.store','method'=>'POST','class'=>'form-horizontal','id'=>'FormSubmit')) !!}
		<div class="form-group{{ $errors->has('nama') ? ' has-error' : '' }}">
			<label for="nik" class="col-sm-2 control-label">NIP</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" id="nik" name="nik" required/>
				@if ($errors->has('nik'))
				<span class="help-block">
					<strong>{{ $errors->first('nik') }}</strong>
				</span>
				@endif
			</div>
		</div>
		<div class="form-group{{ $errors->has('nama') ? ' has-error' : '' }}">
			<label for="nama" class="col-sm-2 control-label">Nama</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" id="nama" name="nama" required/>
				@if ($errors->has('nama'))
				<span class="help-block">
					<strong>{{ $errors->first('nama') }}</strong>
				</span>
				@endif
			</div>
		</div>
		<div class="form-group{{ $errors->has('tempat_lahir') ? ' has-error' : '' }}">
			<label for="tempat_lahir" class="col-sm-2 control-label">Tempat Lahir</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" required/>
				@if ($errors->has('tempat_lahir'))
				<span class="help-block">
					<strong>{{ $errors->first('tempat_lahir') }}</strong>
				</span>
				@endif
			</div>
		</div>
		<div class="form-group{{ $errors->has('tanggal_Lahir') ? ' has-error' : '' }}">
			<label for="tanggal_Lahir" class="col-sm-2 control-label">Tanggal Lahir</label>
			<div class="col-sm-10">
				<input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" />
				@if ($errors->has('tanggal_Lahir'))
				<span class="help-block">
					<strong>{{ $errors->first('tanggal_Lahir') }}</strong>
				</span>
				@endif
			</div>
		</div>
		<div class="form-group{{ $errors->has('no_telepon') ? ' has-error' : '' }}">
			<label for="no_telepon" class="col-sm-2 control-label">Nomor Telepon</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" id="no_telepon" name="no_telepon" required/>
				@if ($errors->has('no_telepon'))
				<span class="help-block">
					<strong>{{ $errors->first('no_telepon') }}</strong>
				</span>
				@endif
			</div>
		</div>
		<div class="form-group{{ $errors->has('no_telepon') ? ' has-error' : '' }}">
			<label for="email" class="col-sm-2 control-label">Email</label>
			<div class="col-sm-10">
				<input type="email" class="form-control" id="email" name="email" required/>
				@if ($errors->has('email'))
				<span class="help-block">
					<strong>{{ $errors->first('email') }}</strong>
				</span>
				@endif
			</div>
		</div>
		<div class="form-group{{ $errors->has('alamat_lengkap') ? ' has-error' : '' }}">
			<label for="alamat_lengkap" class="col-sm-2 control-label">Alamat Lengkap</label>
			<div class="col-sm-10">
				<textarea name="alamat_lengkap" id="alamat_lengkap" class="form-control" rows="5"></textarea>
				@if ($errors->has('alamat_lengkap'))
				<span class="help-block">
					<strong>{{ $errors->first('alamat_lengkap') }}</strong>
				</span>
				@endif
			</div>
		</div>
		<div class="form-group{{ $errors->has('pendidikan_teakhir') ? ' has-error' : '' }}">
			<label for="alamat_lengkap" class="col-sm-2 control-label">Pendidikan Terakhir</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" id="pendidikan_teakhir" name="pendidikan_teakhir" required/>
				@if ($errors->has('pendidikan_teakhir'))
				<span class="help-block">
					<strong>{{ $errors->first('pendidikan_teakhir') }}</strong>
				</span>
				@endif
			</div>
		</div>
		<div class="form-group{{ $errors->has('jabatan') ? ' has-error' : '' }}">
			<label for="jabatan" class="col-sm-2 control-label">Jabatan</label>
			<div class="col-sm-10">
				<input type="jabatan" class="form-control" id="jabatan" name="jabatan" required/>
				@if ($errors->has('jabatan'))
				<span class="help-block">
					<strong>{{ $errors->first('jabatan') }}</strong>
				</span>
				@endif
			</div>
		</div>
		<div class="form-group{{ $errors->has('bagian') ? ' has-error' : '' }}">
			<label for="bagian" class="col-sm-2 control-label">Bagian</label>
			<div class="col-sm-10">
				<label class="radio-inline">
					<input type="radio" name="bagian" value="DEVELOPMENT"> Development
				</label>
				<label class="radio-inline">
					<input type="radio" name="bagian" value="OPERASIONAL"> Operational
				</label>
				<label class="radio-inline">
					<input type="radio" name="bagian" value="MARKETING_FINANCE"> Marketing / Finance
				</label>
				@if ($errors->has('bagian'))
				<span class="help-block">
					<strong>{{ $errors->first('bagian') }}</strong>
				</span>
				@endif
			</div>
		</div>
		<div class="form-group{{ $errors->has('status') ? ' has-error' : '' }}">
			<label for="status" class="col-sm-2 control-label">Status</label>
			<div class="col-sm-10">
				<label class="radio-inline">
					<input type="radio" name="status" value="TETAP"> Tetap
				</label>
				<label class="radio-inline">
					<input type="radio" name="status" value="KONTRAK"> Kontrak
				</label>
				@if ($errors->has('status'))
				<span class="help-block">
					<strong>{{ $errors->first('status') }}</strong>
				</span>
				@endif
			</div>
		</div>
		<div class="form-group{{ $errors->has('tanggal_gabung') ? ' has-error' : '' }}">
			<label for="tanggal_gabung" class="col-sm-2 control-label">Tanggal Gabung</label>
			<div class="col-sm-10">
				<input type="date" class="form-control" id="tanggal_gabung" name="tanggal_gabung" />
				@if ($errors->has('tanggal_gabung'))
				<span class="help-block">
					<strong>{{ $errors->first('tanggal_gabung') }}</strong>
				</span>
				@endif
			</div>
		</div>
		<div class="form-group">
			<div class="col-sm-offset-2 col-sm-10">
				<button type="submit" class="btn btn-default">Simpan</button>
			</div>
		</div>
		{!! Form::close() !!}
	</div>
</div>
@endsection