@extends('Layouts/main')

@section('title', 'Data Mobil')

@section('container')
<div class="content">
<div class="card-tools">
<a href="{{ route('create-pelanggan') }}" class="btn btn-success">Tambah Data <i class="fas fa-plus-square"></i></a>
</div>
</div>

<div class="card-body">
	<table class="table table-bordered">
	<tr>
    <td>No ktp</td>
    <td>alamat</td>
    <td>Tanggal lahir</td>
    <td>No telepon</td>
    <td>nama pelanggan</td>
    <td>id pinjam</td>
    <td>jumlah pinjam</td>
    <td>action</td>
	</tr>
   
 @foreach ($dtdatapelanggan as $item)
    <tr>
        <td>{{ $item->no_ktp}}</td>
        <td>{{ $item->alamat}}</td>
        <td>{{date('d-m-Y', strtotime ($item->tanggal_lahir)) }}</td>
        <td>{{ $item->no_telp}}</td>
        <td>{{ $item->nama_pelanggan}}</td>
        <td>{{ $item->id_pinjam}}</td>
        <td>{{ $item->jml_pinjam}}</td>
        <td><a href="{{ url('edit-pelanggan', $item->no_ktp) }}">Edit</a> | <a href="{{ url('delete-pelanggan', $item->no_ktp) }}">Delete</a></td>
    </tr>
    @endforeach
    </table>
    </div>
    @include('sweetalert::alert')
	
@endsection