@extends('layouts.admin')


@section('title')
    Users
@endsection

@section('content')
<div
    class="section-content section-dashboard-home"
    data-aos="fade-up"
    >
    <div class="container-fluid">
        <div class="dashboard-heading">
            <h2 class="dashboard-title">Users</h2>
            <p class="dashboard-subtitle">
                New Users
            </p>
        </div>
        <div class="dashboard-content">
            <div class="row">
                <div class="col-md-12">
                    @if($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <div class="card">
                        <div class="card-body">
                            <form action="{{ route('users.update', $items->id) }}" method="POST" enctype="multipart/form-data">
                             @method('PUT')
                                @csrf
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>NIK</label>
                                            <input type="text" name="NIK" value="{{ $items->NIK }}" class="form-control" required>
                                        </div>
                                                <div class="form-group">
                                                    <label>Name</label>
                                                    <input type="text" name="name" value="{{ $items->name }}" class="form-control" required>
                                                </div>
                                                <div class="form-group">
                                                    <div class="form-group">
                                                        <label>Username</label>
                                                        <input type="text" name="username" value="{{ $items->username }}" class="form-control" required>
                                                    </div>
                                    <div class="form-group">
                                        <div class="form-group">
                                            <label>Email</label>
                                            <input type="text" name="email" value="{{ $items->email }}" class="form-control" required>
                                        </div>
                                        <div class="form-group">
                                            <div class="form-group">
                                                <label>Password</label>
                                                <input type="text" name="password" value="{{ $items->password }}" class="form-control" required>
                                            </div>
                                        <div class="form-group">
                                                <label>Position</label>
                                                <select name="position" value="{{ $items->position }}" class="form-control">
                                                    <option value="dosen">Dosen</option>
                                                    <option value="mahasiswa">Mahasiswa</option>
                                                </select>
                                        </div>
                                        <div class="form-group">
                                            <label>RFID</label>
                                            <input type="text" name="RFID" value="{{ $items->RFID }}" class="form-control" required>
                                        </div>
                                        </div>
                                        </div>
                                        </div>
                                        </div>
                                <div class="row">
                                    <div class="col text-right">
                                        <button class="btn btn-success px-5">
                                            Save Now
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
