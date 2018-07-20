@extends('template.base')
@section('title') Create  @endsection
@section('content')
<div class="panel panel-default">
	<div class="panel-heading">
		<div class="col-md-6">
			<a href="{{ route('keluarga.index') }}" class="btn btn-default">
				Back to List
			</a>
		</div>
		<div class="col-md-6">
			
		</div>
		<div class="clearfix"></div>
	</div>
	<div class="panel-body">
		  {!! Form::model($keluarga, ['method' => 'PATCH','class'=>'form-horizontal','id'=>'FormSubmit','route' => ['keluarga.update', $keluarga->id]]) !!}
		   <div class="form-group">
		      <label for="pegawai_id" class="col-sm-2 control-label">Pegawai</label>
		      <div class="col-sm-10">
		       <label class="control-label">
		         	<strong>:&nbsp{{ $keluarga->pegawai->nama }}</strong>
		         </label>
		      </div>
		   </div>
		   <div class="form-group">
		      <label for="firstname" class="col-sm-2 control-label">Nama Keluarga</label>
		      <div class="col-sm-10">
		       <label class="control-label">
		         	<strong>:&nbsp{{ $keluarga->nama }}</strong>
		         </label>
		      </div>
		   </div>
		   <div class="form-group{{ $errors->has('hubungan') ? ' has-error' : '' }}">
			<label for="hubungan" class="col-sm-2 control-label">Hubungan</label>
			<div class="col-sm-10">
				<label class="control-label">
		         	<strong>:&nbsp{{ $keluarga->hubungan }}</strong>
		         </label>
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