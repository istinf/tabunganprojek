@extends('pemasukans.layout')
@section('content')
<div class="row">
<div class="col-lg-12 margin-tb">
<div class="pull-left">
<h2>Edit Pemasukan</h2>
</div>
<div class="pull-right">
<a class="btn btn-primary" href="{{ route('pemasukans.index') }}"> Back</a>
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
<form action="{{ route('pemasukans.update',$pemasukan->id) }}" method="POST">
@csrf
@method('PUT')
<div class="row">
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>Nis:</strong>
<input type="number" min = 0 name="nis" value="{{ $pemasukan->nis }}" class="form-control" placeholder="Nis">
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>Nama:</strong>
<input type="string" name="nama" value="{{ $pemasukan->nama }}" class="form-control" placeholder="Nama">
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>Rombel:</strong>
<input type="string" name="rombel" value="{{ $pemasukan->rombel }}" class="form-control" placeholder="Rombel">
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>Rayon:</strong>
<input type="string" name="rayon" value="{{ $pemasukan->rayon }}" class="form-control" placeholder="Rayon">
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>Uang Masuk:</strong>
<input type="number"  min = 0 name="uang_masuk" value="{{ $pemasukan->uang_masuk }}" class="form-control" placeholder="Uang Masuk">
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>Total Uang:</strong>
<input type="number" name="total_uang" value="{{ $pemasukan->total_uang }}" class="form-control" placeholder="Total Uang">
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>Tanggal:</strong>
<input type="date" name="tanggal" value="{{ $pemasukan->tanggal }}" class="form-control" placeholder="Tanggal">
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12 text-center">
<button type="submit" class="btn btn-primary">Submit</button>
</div>
</div>
</form>
@endsection