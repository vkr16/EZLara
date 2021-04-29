@extends('layout.base')
@section('title','Mahasiswa')
@section('container')
    <div class="container mt-4">
        <div class="col-md-6 offset-md-5">
            <h5 class="display-4 text-center">Daftar Mahasiswa <i class="fas fa-graduation-cap fa-fw"></i></h5>
            <ul class="list-group">
              <li class="list-group-item d-flex justify-content-between align-items-center">
                <div>
                    A list item
                </div>
                <div>
                    <a href="#" class="badge badge-info badge-pill"><i class="fas fa-info-circle fa-fw"></i>&nbsp;Detail</a>
                    <a href="#" class="badge badge-warning badge-pill"><i class="fas fa-edit fa-fw"></i>&nbsp;Ubah</a>
                    <a href="#" class="badge badge-danger badge-pill"><i class="fas fa-trash-alt fa-fw"></i>&nbsp;Hapus</a>
                </div>
              </li>
              <li class="list-group-item d-flex justify-content-between align-items-center">
                <div>
                    A list item
                </div>
                <div>
                    <a href="#" class="badge badge-info badge-pill"><i class="fas fa-info-circle fa-fw"></i>&nbsp;Detail</a>
                    <a href="#" class="badge badge-warning badge-pill"><i class="fas fa-edit fa-fw"></i>&nbsp;Ubah</a>
                    <a href="#" class="badge badge-danger badge-pill"><i class="fas fa-trash-alt fa-fw"></i>&nbsp;Hapus</a>
                </div>
              </li>
              <li class="list-group-item d-flex justify-content-between align-items-center">
                <div>
                    A list item
                </div>
                <div>
                    <a href="#" class="badge badge-info badge-pill"><i class="fas fa-info-circle fa-fw"></i>&nbsp;Detail</a>
                    <a href="#" class="badge badge-warning badge-pill"><i class="fas fa-edit fa-fw"></i>&nbsp;Ubah</a>
                    <a href="#" class="badge badge-danger badge-pill"><i class="fas fa-trash-alt fa-fw"></i>&nbsp;Hapus</a>
                </div>
              </li>
            </ul>
            <div class="d-flex justify-content-end my-2">
                <a href="{{url('tambah')}}" class="btn btn-sm btn-primary"><i class="fas fa-plus fa-fw"></i>&nbsp;Tambah Mahasiswa</a>
            </div>
        </div>
    </div>
@endsection