@extends('pemasukans.layout')
@section('content')
<div class="row">
<div class="col-lg-12 margin-tb">
<div class="pull-left">
<h2> Show pemasukan</h2>
</div>
<div class="pull-right">
<a class="btn btn-primary" href="{{ route('pemasukans.index') }}"> Back</a>
</div>
</div>
</div>
<div class="row">
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>Nis:</strong>
{{ $pemasukan->nis }}
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>Nama:</strong>
{{ $pemasukan->nama }}
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>Rombel:</strong>
{{ $pemasukan->rombel }}
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>Rayon:</strong>
{{ $pemasukan->rayon }}
</div>
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>Uang Masuk:</strong>
{{ $pemasukan->uang_masuk }}
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>Total Uang:</strong>
{{ $pemasukan->total_uang }}
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>Tanggal:</strong>
{{ $pemasukan->tanggal }}
</div>
</div>
@endsection