@extends('layouts.dashboard')


@section('title')
    Check in
@endsection

@section('content')
<div
    class="section-content section-dashboard-home"
    data-aos="fade-up"
    >
    <div class="container-fluid">
        <div class="dashboard-heading">
            <h2 class="dashboard-title">Check in</h2>
            <p class="dashboard-subtitle">
                New Check in
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
                            <form action="{{ route('dashboard-transactions.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-md-12">
                                    <div class="form-group">
                                        <label>NIK</label>
                                        <select name="NIK" class="form-control">
                                            @foreach ($user as $user)
                                            <option value="{{ $user->id }}">{{ $user->NIK }}</option>
                                        @endforeach
                                         </select>
                                    </div>
                                        <div class="form-group">
                                            <label>Room</label>
                                            <select name="room_name" class="form-control">
                                                @foreach ($room as $room)
                                                <option value="{{ $room->id }}">{{ $room->room_name }}</option>
                                            @endforeach
                                             </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col text-right">
                                        <button class="btn btn-success px-5">
                                            Check In Now
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
