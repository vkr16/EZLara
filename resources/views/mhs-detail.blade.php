@extends('layout.base')
@section('title','Detail Mahasiswa')
@section('container')
<div class="container mt-4">
    <div class="col-md-6 offset-md-5">
		<div class="card">
		  <img src="<?= asset('storage/img/abstract3.jpg') ?>" class="card-img-top">
		  <div class="card-body">
		    <dl class="row">
			  <dt class="col-sm-4">Nama</dt>
			  <dd class="col-sm-8">Fikri Miftah Akmaludin</dd>

			  <dt class="col-sm-4">NIM</dt>
			  <dd class="col-sm-8">185150301111043</dd>
			  
			  <dt class="col-sm-4">Email</dt>
			  <dd class="col-sm-8">fikrimiftah@student.ub.ac.id</dd>

			  <dt class="col-sm-4">Program Studi</dt>
			  <dd class="col-sm-8">Teknik Komputer</dd>

			  <dt class="col-sm-4">Fakultas</dt>
			  <dd class="col-sm-8">Fakultas Ilmu Komputer</dd>
 			
 			  <dt class="col-sm-4">Universitas</dt>
			  <dd class="col-sm-8">Universitas Brawijaya</dd>
			</dl>
		  <a href="{{url('mahasiswa')}}" class="btn btn-sm btn-primary"><i class="fas fa-chevron-left fa-fw"></i>Kembali</a>
		  </div>
		</div>
	</div>
</div>
@endsection