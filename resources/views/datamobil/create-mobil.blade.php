@extends('Layouts/main')

@section('title', 'Data Mobil')

@section('container')
<div class="content">
<div class="card-header">
<div class="card-body">
	<form action="{{ route('simpan-mobil') }}" method="post">
		{{ csrf_field() }}
        <div class="form-group">
			<input type="text" id="id_pinjam" name="id_pinjam" class="form-control" placeholder="id pinjam">
		</div>
        <div class="form-group">
			<input type="text" id="merek" name="merek" class="form-control" placeholder="merek mobil">
		</div>
        <div class="form-group">
			<input type="text" id="model" name="model" class="form-control" placeholder="model">
		</div>
        <div class="form-group">
			<input type="date" id="tahun_buat" name="tahun_buat" class="form-control" placeholder="tahun buat" >
		</div>
        <div class="form-group">
			<input type="text" id="stock" name="stock" class="form-control" placeholder="stock">
		</div>
        <div class="form-group">
			<button type="submit" class="btn btn-success">simpan data</button> 
		</div>
	</form>
</div>
</div>
</div>




	
@endsection