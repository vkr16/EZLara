@extends('layout.base')
@section('title','Ubah Data Mahasiswa')
@section('container')
<div class="container mt-4">
    <div class="col-md-7 offset-md-5">
    	<h6 class="display-4">Ubah Data Mahasiswa <i class="far fa-edit fa-fw"></i></h6>
		<form method="post" action="/student/{{$student->id}}">
			@method('patch')
			@csrf
		  <div class="form-row">
		    <div class="form-group col-md-6">
		      <label for="InputNama">Nama Mahasiswa</label>
		      <input type="text" class="form-control" id="InputNama" value="{{$student->nama}}" name="nama">
		    </div>
		    <div class="form-group col-md-6">
		      <label for="InputNIM">No. Induk Mahasiswa	</label>
		      <input type="number" class="form-control" id="InputNIM" value="{{$student->nim}}" name="nim">
		    </div>
		  </div>
		  <div class="form-group">
		    <label for="InputEmail">Email</label>
		    <input type="email" class="form-control" id="InputEmail" value="{{$student->email}}" name="email">
		  </div>
		  <div class="form-group">
		    <label for="InputFakultas">Fakultas</label>
		    <input type="text" class="form-control" id="InputFakultas" value="{{$student->fakultas}}" name="fakultas">
		  </div>
		  <div class="form-row">
		    <div class="form-group col-md-6">
		      <label for="InputProdi">Program Studi</label>
		      <input type="text" class="form-control" id="InputProdi" value="{{$student->prodi}}" name="prodi">
		    </div>
		    <div class="form-group col-md-6">
		      <label for="InputUniversitas">Universitas</label>
		      <input type="text" class="form-control" id="InputUniversitas" value="{{$student->universitas}}" name="universitas">
		    </div>
		  </div>
		  <button type="submit" class="btn btn-success">Simpan Perubahan</button>
		</form>
	</div>
</div>
@endsection