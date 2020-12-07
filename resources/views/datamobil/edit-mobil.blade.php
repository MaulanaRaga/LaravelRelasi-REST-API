@extends('Layouts/main')

@section('title', 'Edit Mobil')

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
	<form action="{{ url('update-mobil', $mob->id_pinjam) }}" method="post">
		{{ csrf_field() }}
        <div class="form-group">
			<input type="text" value="{{ $mob->merek }}" id="merek" name="merek" class="form-control" placeholder="merek mobil">
		</div>
        <div class="form-group">
			<input type="text" value="{{ $mob->model }}"id="model" name="model" class="form-control" placeholder="model">
		</div>
        <div class="form-group">
			<input type="date" value="{{ $mob->tahun_buat }}" id="tahun_buat" name="tahun_buat" class="form-control" placeholder="tahun buat" >
		</div>
        <div class="form-group">
			<input type="text" value="{{ $mob->stock }}" id="stock" name="stock" class="form-control" placeholder="stock">
		</div>
        <div class="form-group">
			<button type="submit" class="btn btn-primary">Edit data</button> 
		</div>
	</form>
</div>
</div>
</div>




	
@endsection