@extends('Layouts/main')

@section('title', 'Data Mobil')

@section('container')
<div class="content">
<div class="card-tools">
<a href="{{ route('create-mobil') }}" class="btn btn-success">Tambah Data <i class="fas fa-plus-square"></i></a>
</div>
</div>

<div class="card-body">
	<table class="table table-bordered">
	<tr>
    <td>id pinjam</td>
    <td>merek</td>
    <td>model</td>
    <td>tahun buat</td>
    <td>stock</td>
    <td>action</td>
	</tr>
    @foreach ($dtdatamobil as $item)
    <tr>
        <td>{{ $item->id_pinjam}}</td>
        <td>{{ $item->merek}}</td>
        <td>{{ $item->model}}</td>
        <td>{{date('d-m-Y', strtotime ($item->tahun_buat)) }}</td>
        <td>{{ $item->stock}}</td>
        <td><a href="{{ url('edit-mobil', $item->id_pinjam) }}">Edit</a> | <a href="{{ url('delete-mobil', $item->id_pinjam) }}">Delete</a></td>
    </tr>
    @endforeach
    </table>
    </div>
    @include('sweetalert::alert')
	
@endsection