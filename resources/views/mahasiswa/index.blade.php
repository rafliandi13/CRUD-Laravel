@extends('layout/main')
@section('title','Mahasiswa')

@section('navbar-link')
        <a class="nav-item nav-link" href="{{url('/')}}">Home</a>
        <a class="nav-item nav-link" href="{{url('/about')}}">About</a>
        <a class="nav-item nav-link active" href="{{url('/mahasiswa')}}">Mahasiswa</a>
        <a class="nav-item nav-link" href="{{url('/students')}}">Students</a>
@endsection

@section('container')
    <div class="container">
        <div class="row">
            <div class="col-10">
                <h1 class="mt-3">Daftar Mahasiswa</h1>

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
                        <?php $i = 1;?>
                        @foreach ($mahasiswa as $mhs)
                        <tr>
                            <td scope="row"><?= $i++;?></td>
                            <td>{{$mhs->nama}}</td>
                            <td>{{$mhs->nim}}</td>
                            <td>{{$mhs->email}}</td>
                            <td>{{$mhs->jurusan}}</td>
                            <td>
                                <a href="" class="badge badge-primary">detail</a>
                                <a href="" class="badge badge-success">edit</a>
                                <a href="" class="badge badge-danger">delete</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>
        </div>
    </div>
@endsection
