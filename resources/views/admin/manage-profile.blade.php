@extends('layout.admin-master')
@section('title', 'Yuki')

@section('content')
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Manage Profile Company</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item">Admin</li>
                            <li class="breadcrumb-item active">Profile Company</li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-body">
                                
                                <h4 class="card-title">Yuki Travel</h4>
                                <p class="card-text">{{$descProfile->description_company}}</p>
                                <a href="{{url('/admin/company-profile')}}" class="btn btn-success">Update</a>
                        </div>
                    </div>
                </main>
                @endsection