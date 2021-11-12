@extends('layouts.admin')


@section('title')
    Guest
@endsection

@section('content')
<div
    class="section-content section-dashboard-home"
    data-aos="fade-up"
    >
    <div class="container-fluid">
        <div class="dashboard-heading">
            <h2 class="dashboard-title">Guest</h2>
            <p class="dashboard-subtitle">
                New Guest
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
                            <form action="{{ route('guests.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-md-12">

                                        <div class="form-group">
                                            <label for="NIK">NIK</label>
                                            <textarea class="form-control" id="NIK" rows="1"></textarea>
                                        </div>

                                            <div class="form-group">
                                                <label for="name">Name</label>
                                                <textarea class="form-control" id="name" rows="1"></textarea>
                                            </div>

                                    

                                            <div class="form-group">
                                                <label>Position</label>
                                                <select name="position" class="form-control">
                                                    <option value="TA 10.3">Dosen</option>
                                                    <option value="TA 10.4">Mahasiswa</option>
                                                
                                            
                                                 </select>
                                                    </div>
                                              
                                              <div class="form-group">
                                                <label for="RFID">RFID</label>
                                                <textarea class="form-control" id="RFID" rows="1"></textarea>
                                              </div>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col text-right">
                                        <button class="btn btn-success px-5">
                                            Save
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
