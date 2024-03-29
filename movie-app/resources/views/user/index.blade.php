@extends('layouts/main')

@section('content')
<h1 class="mt-4">Movies Data</h1>
                        <div class="d-flex justify-content-between mb-4">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
                                <li class="breadcrumb-item active">Movies</li>
                            </ol>
                            <a href="#">
                                <button class="btn btn-success" type="submit">Create Data</button>
                            </a>
                        </div>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Users Data
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama</th>
                                            <th>Username</th>
                                            <th>Password</th>
                                            <th>Email</th>
                                            <th>Role</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama</th>
                                            <th>Username</th>
                                            <th>Password</th>
                                            <th>Email</th>
                                            <th>Role</th>
                                            <th>Action</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Fakhirul</td>
                                            <td>fakhirula</td>
                                            <td>NICE2021#!</td>
                                            <td>fakhirul@gmail.com</td>
                                            <td>Administrator</td>
                                            <td>
                                                <a href="" class="btn btn-sm btn-warning"> Edit</a>
                                                <a href="" class="btn btn-sm btn-danger" onclick="return confirm('Apakah anda yakin ingin menghapus?')"> Delete</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Akmal</td>
                                            <td>akmalf</td>
                                            <td>12345abcde</td>
                                            <td>akmalf@gmail.com</td>
                                            <td>User</td>
                                            <td>
                                                <a href="" class="btn btn-sm btn-warning"> Edit</a>
                                                <a href="" class="btn btn-sm btn-danger" onclick="return confirm('Apakah anda yakin ingin menghapus?')"> Delete</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>Cintan</td>
                                            <td>cntntya</td>
                                            <td>cintaaaan</td>
                                            <td>cintntya@gmail.com</td>
                                            <td>User</td>
                                            <td>
                                                <a href="" class="btn btn-sm btn-warning"> Edit</a>
                                                <a href="" class="btn btn-sm btn-danger" onclick="return confirm('Apakah anda yakin ingin menghapus?')"> Delete</a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
@endsection