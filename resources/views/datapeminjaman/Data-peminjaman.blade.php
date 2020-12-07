@extends('Layouts/main')

@section('title', 'Data Peminjaman')

@section('container')
<div class="content">
<div class="card-tools">
</div>
</div>

<div class="card-body">
	<table class="table table-bordered">
	<tr>
    <td>Nama pelanggan</td>
    <td>No Telpon</td>
    <td>Merek</td>
    <td>Model</td>
	</tr>
   
 @foreach ($join as $item)
    <tr>
        <td>{{ $item->nama_pelanggan}}</td>
        <td>{{ $item->no_telp}}</td>
        <td>{{ $item->merek}}</td>
        <td>{{ $item->model}}</td>
        </tr>
    @endforeach
    </table>
    </div>
    @include('sweetalert::alert')
	
@endsection