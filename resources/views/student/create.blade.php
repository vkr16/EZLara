@extends('layout.base')
@section('title','Tambah Mahasiswa')
@section('container')
<div class="container mt-4">
    <div class="col-md-7 offset-md-5">
    	<h6 class="display-4">Tambah Mahasiswa <i class="fas fa-plus fa-fw"></i></h6>
		<form method="POST" action="/student">
			@csrf
		  <div class="form-row">
		    <div class="form-group col-md-6">
		      <label for="InputNama">Nama Mahasiswa</label>
		      <input type="text" class="form-control" id="InputNama" name="nama">
		    </div>
		    <div class="form-group col-md-6">
		      <label for="InputNIM">No. Induk Mahasiswa	</label>
		      <input type="number" class="form-control" id="InputNIM" name="nim">
		    </div>
		  </div>
		  <div class="form-group">
		    <label for="InputEmail">Email</label>
		    <input type="email" class="form-control" id="InputEmail" name="email">
		  </div>
		  <div class="form-group">
		    <label for="InputFakultas">Fakultas</label>
		    <input type="text" class="form-control" id="InputFakultas" name="fakultas">
		  </div>
		  <div class="form-row">
		    <div class="form-group col-md-6">
		      <label for="Input Prodi">Program Studi</label>
		      <input type="text" class="form-control" id="Input Prodi" name="prodi">
		    </div>
		    <div class="form-group col-md-6">
		      <label for="InputUniversitas">Universitas</label>
		      <input type="text" class="form-control" id="InputUniversitas" name="universitas">
		    </div>
		    
		  </div>
		  <button type="submit" class="btn btn-primary">Simpan</button>
		</form>
	</div>
</div>
@endsection