@extends('Layouts/main')

@section('title', 'Data Pelanggan')

@section('container')
<div class="content">
<div class="card-header">
<div class="card-body">
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
	<form action="{{ url('update-pelanggan', $pel->no_ktp) }}" method="post">
		{{ csrf_field() }}
        <div class="form-group">
			<input type="text" value="{{ $pel->alamat }}" id="alamat" name="alamat" class="form-control" placeholder="alamat pelanggan">
		</div>
        <div class="form-group">
			<input type="date" value="{{ $pel->tanggal_lahir }}" id="tanggal_lahir" name="tanggal_lahir" class="form-control" placeholder="tanggal lahir">
		</div>
        <div class="form-group">
			<input type="text" value="{{ $pel->no_telp }}" id="no_telp" name="no_telp" class="form-control" placeholder="nomor telpon" >
		</div>
        <div class="form-group">
			<input type="text" value="{{ $pel->nama_pelanggan }}" id="nama_pelanggan" name="nama_pelanggan" class="form-control" placeholder="nama pelanggan">
		</div>
        <div class="form-group">
			<input type="text" value="{{ $pel->id_pinjam }}" id="id_pinjam" name="id_pinjam" class="form-control" placeholder="id pinjam" >
		</div>
        <div class="form-group">
			<input type="text" value="{{ $pel->jml_pinjam }}" id="jml_pinjam" name="jml_pinjam" class="form-control" placeholder="jumlah pinjam">
		</div>
        <div class="form-group">
			<button type="submit" class="btn btn-success">Edit data</button> 
		</div>
	</form>
</div>
</div>
</div>




	
@endsection