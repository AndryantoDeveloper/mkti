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
		        {!! Form::select('pegawai_id', $pegawai->pluck('nama','id'), null, ['id'=>'pegawai_id','class'=>'form-control','required'=>'true']) !!}
		      </div>
		   </div>
		   <div class="form-group">
		      <label for="firstname" class="col-sm-2 control-label">Nama Keluarga</label>
		      <div class="col-sm-10">
		        <input type="text" class="form-control" id="nama" name="nama" value="{{ $keluarga->nama }}" />
		      </div>
		   </div>
		   <div class="form-group{{ $errors->has('hubungan') ? ' has-error' : '' }}">
			<label for="hubungan" class="col-sm-2 control-label">Hubungan</label>
			<div class="col-sm-10">
				<label class="radio-inline">
					<input type="radio" name="hubungan" value="ANAK" @php echo $keluarga->hubungan == "ANAK" ? "checked" : ""; @endphp> Anak
				</label>
				<label class="radio-inline">
					<input type="radio" name="hubungan" value="ISTRI" @php echo $keluarga->hubungan == "ISTRI" ? "checked" : ""; @endphp> Istri
				</label>
				<label class="radio-inline">
					<input type="radio" name="hubungan" value="SUAMI" @php echo $keluarga->hubungan == "SUAMI" ? "checked" : ""; @endphp> Suami
				</label>
				@if ($errors->has('hubungan'))
				<span class="help-block">
					<strong>{{ $errors->first('hubungan') }}</strong>
				</span>
				@endif
			</div>
		</div>
		   <div class="form-group">
		      <div class="col-sm-offset-2 col-sm-10">
		         <button type="submit" class="btn btn-default">Update</button>
		      </div>
		   </div>
		{!! Form::close() !!}
	</div>
</div>
@endsection