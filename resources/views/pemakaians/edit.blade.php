@extends('pemakaians.layout')
@section('content')
<div class="row">
<div class="col-lg-12 margin-tb">
<div class="pull-left">
<h2>Edit pemakaian</h2>
</div>
<div class="pull-right">
<a class="btn btn-primary" href="{{ route('pemakaians.index') }}"> Back</a>
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
<form action="{{ route('pemakaians.update',$pemakaian->id) }}" method="POST">
@csrf
@method('PUT')
<div class="row">
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>Id Pemakaian:</strong>
<input type="text" name="id_pemakain" value="{{ $pemakaian->id_pemakaian }}" class="form-control" placeholder="Id Pemakaian">
</div>
</div>
<div class="row">
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>Nis:</strong>
<input type="text" name="nis" value="{{ $pemakaian->nis }}" class="form-control" placeholder="Nis">
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>Name:</strong>
<input type="text" name="name" value="{{ $pemakaian->name }}" class="form-control" placeholder="Name">
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>Rombel:</strong>
<input type="text" name="rombel" value="{{ $pemakaian->rombel }}" class="form-control" placeholder="Rombel">
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>Rayon:</strong>
<input type="text" name="rayon" value="{{ $pemakaian->rayon }}" class="form-control" placeholder="Rayon">
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>Tahun Ajaran:</strong>
<input type="text" name="tahun_ajaran" value="{{ $pemakaian->tahun_ajaran }}" class="form-control" placeholder="Tahun Ajaran">
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>Jumlah Pemakaian:</strong>
<input type="text" name="jumlah_pemakaian" value="{{ $pemakaian->jumlah_pemakaian }}" class="form-control" placeholder="jumlah Pemakaian">
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>Keterangan:</strong>
<input type="text" name="keterangan" value="{{ $pemakaian->keterangan }}" class="form-control" placeholder="Keterangan">
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>Tanggal:</strong>
<input type="date" name="tanggal" value="{{ $pemakaian->tanggal }}" class="form-control" placeholder="Tanggal">
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12 text-center">
<button type="submit" class="btn btn-primary">Submit</button>
</div>
</div>
</form>
@endsection