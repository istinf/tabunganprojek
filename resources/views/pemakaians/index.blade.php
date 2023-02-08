@extends('pemakaians.layout')
@section('content')
<div class="row">
<div class="col-lg-12 margin-tb">
<div class="pull-left">
<h2>Pemakaian</h2>
</div>
<div class="pull-right">   
<a class="btn btn-success" href="{{ route('rayons.index') }}">Rayon</a>
<a class="btn btn-success" href="{{ route('rombels.index') }}">Rombel</a>
<a class="btn btn-success" href="{{ route('pemakaians.create') }}"> Create New pemakaian</a>
</div>
</div>
</div>
@if ($message = Session::get('success'))
<div class="alert alert-success">
<p>{{ $message }}</p>
</div>
@endif
<table class="table table-bordered">
<tr>
<th>No</th>
<th>Id Pemakaian</th>
<th>Nis</th>
<th>Name</th>
<th>Rombel</th>
<th>Rayon</th>
<th>Tahun Ajaran</th>
<th>Jumlah Pemakaian</th>
<th>Keterangan</th>
<th>Tanggal</th>
<th width="280px">Action</th>
</tr>
@foreach ($pemakaians as $pemakaian)
<tr>
<td>{{ ++$i }}</td>
<td>{{ $pemakaian->id_pemakaian }}</td>
<td>{{ $pemakaian->nis }}</td>
<td>{{ $pemakaian->name }}</td>
<td>{{ $pemakaian->rombel }}</td>
<td>{{ $pemakaian->rayon }}</td>
<td>{{ $pemakaian->tahun_ajaran }}</td>
<td>{{ $pemakaian->jumlah_pemakaian}}</td>
<td>{{ $pemakaian->keterangan }}</td>
<td>{{ $pemakaian->tanggal }}</td>

<td>
<form action="{{ route('pemakaians.destroy',$pemakaian->id) }}" method="POST">
<a class="btn btn-info" href="{{ route('pemakaians.show',$pemakaian->id) }}">Show</a>
<a class="btn btn-primary" href="{{ route('pemakaians.edit',$pemakaian->id) }}">Edit</a>
@csrf
@method('DELETE')
<button type="submit" class="btn btn-danger"
    onclick="return confirm('yakin mau di hapus {{ $pemakaian->nama }} ?')">Delete</button>
</form>
</td>
</tr>
@endforeach
</table>
{!! $pemakaians->links() !!}
@endsection