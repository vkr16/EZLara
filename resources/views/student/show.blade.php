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
			  <dd class="col-sm-8">{{ $student->nama }}</dd>

			  <dt class="col-sm-4">NIM</dt>
			  <dd class="col-sm-8">{{ $student->nim }}</dd>
			  
			  <dt class="col-sm-4">Email</dt>
			  <dd class="col-sm-8">{{ $student->email }}</dd>

			  <dt class="col-sm-4">Program Studi</dt>
			  <dd class="col-sm-8">{{ $student->prodi }}</dd>

			  <dt class="col-sm-4">Fakultas</dt>
			  <dd class="col-sm-8">{{ $student->fakultas }}</dd>
 			
 			  <dt class="col-sm-4">Universitas</dt>
			  <dd class="col-sm-8">{{ $student->universitas }}</dd>
			</dl>
		  <a href="{{url('student')}}" class="btn btn-sm btn-primary"><i class="fas fa-chevron-left fa-fw"></i>Kembali</a>
		  </div>
		</div>
	</div>
</div>
@endsection