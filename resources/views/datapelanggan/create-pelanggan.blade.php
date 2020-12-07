@extends('Layouts/main')

@section('title', 'Data Mobil')

@section('container')
<div class="content">
<div class="card-header">
<div class="card-body">
	<form action="{{ route('simpan-pelanggan') }}" method="post">
		{{ csrf_field() }}
        <div class="form-group">
			<input type="text" id="no_ktp" name="no_ktp" class="form-control" placeholder="nomor ktp">
		</div>
        <div class="form-group">
			<input type="text" id="alamat" name="alamat" class="form-control" placeholder="alamat pelanggan">
		</div>
        <div class="form-group">
			<input type="date" id="tanggal_lahir" name="tanggal_lahir" class="form-control" placeholder="tanggal lahir">
		</div>
        <div class="form-group">
			<input type="text" id="no_telp" name="no_telp" class="form-control" placeholder="nomor telpon" >
		</div>
        <div class="form-group">
			<input type="text" id="nama_pelanggan" name="nama_pelanggan" class="form-control" placeholder="nama pelanggan">
		</div>
        <div class="form-group">
			<input type="text" id="id_pinjam" name="id_pinjam" class="form-control" placeholder="id pinjam" >
		</div>
        <div class="form-group">
			<input type="text" id="jml_pinjam" name="jml_pinjam" class="form-control" placeholder="jumlah pinjam">
		</div>
        <div class="form-group">
			<button type="submit" class="btn btn-success">simpan data</button> 
		</div>
	</form>
</div>
</div>
</div>




	
@endsection