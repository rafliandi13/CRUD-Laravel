@extends('layout/main')
@section('title','Students')

@section('navbar-link')
        <a class="nav-item nav-link" href="{{url('/')}}">Home</a>
        <a class="nav-item nav-link" href="{{url('/about')}}">About</a>
        <a class="nav-item nav-link" href="{{url('/mahasiswa')}}">Mahasiswa</a>
        <a class="nav-item nav-link active" href="{{url('/students')}}">Students</a>
@endsection

@section('container')
    <div class="container">
        <div class="row">
            <div class="col-10">
                <h1 class="mt-3">Daftar Mahasiswa</h1>

                <a href="/students/create" class="btn btn-primary my-3">Tambah Data</a>

                @if (session('status'))
                    <div class="alert alert-success">
                        {{session('status')}}
                    </div>
                @endif
                <?php $i = 1;?>
                <table class="table">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">No.</th>
                                <th scope="col">Nama</th>
                                <th scope="col">NIM</th>
                                <th scope="col">Email</th>
                                <th scope="col">Jurusan</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                    <tbody>
                        @foreach ($students as $std)
                        <tr>
                            <td scope="row"><?= $i++; ?></td>
                            <td>{{$std->nama}}</td>
                            <td>{{$std->nim}}</td>
                            <td>{{$std->email}}</td>
                            <td>{{$std->jurusan}}</td>
                            <td>
                                <a href="/students/{{$std->id}}" class="badge badge-primary">detail</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>
        </div>
    </div>
@endsection
