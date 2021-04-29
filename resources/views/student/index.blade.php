@extends('layout.base')
@section('title','Mahasiswa')
@section('container')
    <div class="container mt-4">
        <div class="col-md-6 offset-md-5">
            <h5 class="display-4 text-center">Daftar Mahasiswa <i class="fas fa-graduation-cap fa-fw"></i></h5>
            <ul class="list-group">
              @foreach( $students as $student)
              <li class="list-group-item d-flex justify-content-between align-items-center">
                <div>
                    {{$student->nama}}
                </div>
                <div class="d-flex justify-content-center align-items-center">
                    <a href="/student/{{$student->id}}" class="badge badge-info badge-pill"><i class="fas fa-info-circle fa-fw"></i>&nbsp;Detail</a>
                    <a href="/student/{{$student->id}}/edit" class="badge badge-warning badge-pill mx-1"><i class="fas fa-edit fa-fw"></i>&nbsp;Ubah</a>
                    <form action="/student/{{$student->id}}" class="m-0 p-0 d-flex align-items-center" method="post">
                        @method('delete')
                        @csrf
                        <button type="submit" href="#" class="badge badge-danger badge-pill btn"><i class="fas fa-trash-alt fa-fw"></i>&nbsp;Hapus</button>
                    </form>
                </div>
              </li>
              @endforeach
            </ul>
            <div class="d-flex justify-content-end my-2">
                <a href="/student/create" class="btn btn-sm btn-primary"><i class="fas fa-plus fa-fw"></i>&nbsp;Tambah Mahasiswa</a>
            </div>
        </div>
    </div>
@endsection