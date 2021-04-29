@extends('layout.base')
@section('title','Ubah Data Mahasiswa')
@section('container')
<div class="container mt-4">
    <div class="col-md-7 offset-md-5">
    	<h6 class="display-4">Ubah Data Mahasiswa <i class="far fa-edit fa-fw"></i></h6>
		<form>
		  <div class="form-row">
		    <div class="form-group col-md-6">
		      <label for="InputNama">Nama Mahasiswa</label>
		      <input type="text" class="form-control" id="InputNama" value="Fikri Miftah Akmaludin">
		    </div>
		    <div class="form-group col-md-6">
		      <label for="InputNIM">No. Induk Mahasiswa	</label>
		      <input type="number" class="form-control" id="InputNIM" value="185150301111043">
		    </div>
		  </div>
		  <div class="form-group">
		    <label for="InputEmail">Email</label>
		    <input type="email" class="form-control" id="InputEmail" value="fikrimiftah@student.ub.ac.id">
		  </div>
		  <div class="form-group">
		    <label for="InputFakultas">Fakultas</label>
		    <input type="text" class="form-control" id="InputFakultas" value="Fakultas Ilmu Komputer">
		  </div>
		  <div class="form-row">
		    <div class="form-group col-md-6">
		      <label for="Input Prodi">Program Studi</label>
		      <input type="text" class="form-control" id="Input Prodi" value="Teknik Komputer">
		    </div>
		    <div class="form-group col-md-6">
		      <label for="InputUniversitas">Universitas</label>
		      <select id="InputUniversitas" class="form-control">
		        <!-- <option selected>Choose...</option> -->
		        <option value="Universitas Brawijaya" selected>Universitas Brawijaya</option>
		        <option value="Universitas Pasundan">Universitas Pasundan</option>
		        <option value="Universitas Indonesia">Universitas Indonesia</option>
		        <option value="Universitas Negeri Jakarta">Universitas Negeri Jakarta</option>
		        <option value="Universitas Negeri Malang">Universitas Negeri Malang</option>
		      </select>
		    </div>
		  </div>
		  <button type="submit" class="btn btn-primary">Simpan</button>
		</form>
	</div>
</div>
@endsection