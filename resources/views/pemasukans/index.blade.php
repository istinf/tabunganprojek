@extends('pemasukans.layout')
@section('content')
<div class="row">
<div class="col-lg-12 margin-tb">
<div class="pull-left">
<h2>Tabungan</h2>
</div>
<div class="pull-right">   
<a class="btn btn-success" href="{{ route('rayons.index') }}">Rayon</a>
<a class="btn btn-success" href="{{ route('rombels.index') }}">Rombel</a>
<a class="btn btn-success" href="{{ route('pemasukans.create') }}"> Create New Pemasukan</a>
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
<th>Id Tabungan</th>
<th>Nis</th>
<th>Name</th>
<th>Rombel</th>
<th>Rayon</th>
<th>Uang Masuk</th>
<th>Total Uang</th>
<th>Tanggal</th>
<th width="280px">Action</th>
</tr>
@foreach ($pemasukans as $pemasukan)
<tr>
<td>{{ ++$i }}</td>
<td>{{ $pemasukan->id_tabungan }}</td>
<td>{{ $pemasukan->nis }}</td>
<td>{{ $pemasukan->name }}</td>
<td>{{ $pemasukan->rombel }}</td>
<td>{{ $pemasukan->rayon }}</td>
<td>{{ $pemasukan->uang_masuk }}</td>
<td>{{ $pemasukan->total_uang }}</td>
<td>{{ $pemasukan->tanggal }}</td>

<td>
<form action="{{ route('pemasukans.destroy',$pemasukan->id) }}" method="POST">
<a class="btn btn-info" href="{{ route('pemasukans.show',$pemasukan->id) }}">Show</a>
<a class="btn btn-primary" href="{{ route('pemasukans.edit',$pemasukan->id) }}">Edit</a>
@csrf
@method('DELETE')
<button type="submit" class="btn btn-danger"
    onclick="return confirm('yakin mau di hapus {{ $pemasukan->nama }} ?')">Delete</button>
</form>
</td>
</tr>
@endforeach
</table>
{!! $pemasukans->links() !!}
@endsection