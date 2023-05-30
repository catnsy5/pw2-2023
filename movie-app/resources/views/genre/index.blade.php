@extends('layouts/main')

@section('content')
<h1 class="mt-4">Genres Data</h1>
                        <div class="d-flex justify-content-between mb-4">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
                                <li class="breadcrumb-item active">Genres</li>
                            </ol>
                            <a href="#">
                                <button class="btn btn-success" type="submit">Create Data</button>
                            </a>
                        </div>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Genres Data
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Genre</th>
                                            <th>Deskripsi</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Genre</th>
                                            <th>Deskripsi</th>
                                            <th>Action</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        @foreach ($genres as $genres)
                                        <tr>
<<<<<<< HEAD
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $genres->nama }}</td>
                                            <td>{{ $genres->deskripsi }}</td>
=======
                                            <td>{{ $genres['no'] }}</td>
                                            <td>{{ $genres['nama_genre'] }}</td>
                                            <td>{{ $genres['deskripsi'] }}</td>
>>>>>>> 067da160660c050a1aa792517b308d330699271e
                                            <td>
                                                <a href="" class="btn btn-sm btn-warning"> Edit</a>
                                                <a href="" class="btn btn-sm btn-danger" onclick="return confirm('Apakah anda yakin ingin menghapus?')"> Delete</a>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
<<<<<<< HEAD
@endsection
=======
@endsection
>>>>>>> 067da160660c050a1aa792517b308d330699271e
