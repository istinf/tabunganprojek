@extends('siswas.layout')
@section('content')
<div class="row">
<div class="col-lg-12 margin-tb">
<div class="pull-left">
<h2>Edit Siswa</h2>
</div>
<div class="pull-right">
<a class="btn btn-primary" href="{{ route('siswas.index') }}"> Back</a>
</div>
</div>
</div>
@if ($errors->any())
<div class="alert alert-danger">
<strong>Whoops!</strong> There were some problems with your input.<br><br>
<ul>
@foreach ($errors->all() as $error)
<li>{{ $error }}</li>
@endforeach
</ul>
</div>
@endif
<form action="{{ route('siswas.update',$siswa->id) }}" method="POST">
@csrf
@method('PUT')
<div class="row">
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>Nis:</strong>
<input type="text" name="nis" value="{{ $siswa->nis }}" class="form-control" placeholder="Nis">
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>Nama:</strong>
<input type="text" name="nama" value="{{ $siswa->nama }}" class="form-control" placeholder="Nama">
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>Rombel:</strong>
<input type="text" name="rombel" value="{{ $siswa->rombel }}" class="form-control" placeholder="Rombel">
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>Rayon:</strong>
<input type="text" name="rayon" value="{{ $siswa->rayon }}" class="form-control" placeholder="Rayon">
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>Jenis Kelamin:</strong>
<input type="text" name="jenis_kelamin" value="{{ $siswa->jenis_kelamin }}" class="form-control" placeholder="Jenis Kelamin">
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12 text-center">
<button type="submit" class="btn btn-primary">Submit</button>
</div>
</div>
</form>
@endsection