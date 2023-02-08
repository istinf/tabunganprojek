@extends('pemakaians.layout')
@section('content')
<div class="row">
<div class="col-lg-12 margin-tb">
<div class="pull-left">
<h2> Show pemakaian</h2>
</div>
<div class="pull-right">
<a class="btn btn-primary" href="{{ route('pemakaians.index') }}"> Back</a>
</div>
</div>
</div>
<div class="row">
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>Id Pemakaian:</strong>
{{ $pemakaian->id_pemakaian }}
</div>
</div>
<div class="row">
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>Nis:</strong>
{{ $pemakaian->nis }}
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>Name:</strong>
{{ $pemakaian->name }}
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>Rombel:</strong>
{{ $pemakaian->rombel }}
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>Rayon:</strong>
{{ $pemakaian->rayon }}
</div>
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>Tahun Ajaran:</strong>
{{ $pemakaian->tahun_ajaran }}
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>Jumlah Pemakaian:</strong>
{{ $pemakaian->jumlah_pemakaian }}
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>Keterangan:</strong>
{{ $pemakaian->keterangan }}
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>Tanggal:</strong>
{{ $pemakaian->tanggal }}
</div>
</div>
@endsection