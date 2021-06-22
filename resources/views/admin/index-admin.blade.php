@extends('layout.admin-master')
@section('title', 'Yuki')

@section('content')
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Travel Package</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item">Admin</li>
                            <li class="breadcrumb-item active">Travel package</li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-body">
                                <a href="/admin/add-package" class="btn btn-success">Tambahkan Data</a>
                            </div> 
                        </div>
                        <div class="card mb-4">
                            <div class="card-body">
                                
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Title</th>
                                                <th>Description</th>
                                                <th>Fasilitas</th>
                                                <th>Harga</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                         @foreach ($packages as $item) 
                                            <tbody>
                                                <tr>
                                                <td>{{ $loop->iteration }} </td>
                                                <td>{{$item->package_name}}</td>
                                                <td>{{$item->description}} </td>
                                                <td>{{$item->facilities}}</td>
                                                <td>{{$item->price}}</td>  
                                                <td>
                                                    <a class="btn btn-warning" href="/admin/{{$item->id}}/update-package">Update</a>
                                                    <a class="btn btn-danger my-3"  href="/admin/delete/{{$item->id}}">Delete</a>
                                                </td>
                                                </tr>
                                            
                                            </tbody>
                                        @endforeach
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
                @endsection