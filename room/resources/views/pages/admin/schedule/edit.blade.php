@extends('layouts.admin')


@section('title')
    Schedules
@endsection

@section('content')
<div
    class="section-content section-dashboard-home"
    data-aos="fade-up"
    >
    <div class="container-fluid">
        <div class="dashboard-heading">
            <h2 class="dashboard-title">Schedules</h2>
            <p class="dashboard-subtitle">
                New Schedules
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
                            <form action="{{ route('schedules.update', $items->id) }}" method="POST" enctype="multipart/form-data">
                             @method('PUT')
                                @csrf
                                <div class="row">
                                    <div class="col-md-12">

                                        <div class="form-group">
                                            <label>Class</label>
                                            <input type="text" name="class_name" value="{{ $items->class_name }}" class="form-control" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Room</label>
                                            <input type="text" name="room_name" value="{{ $items->room_name }}" class="form-control" required>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label>Start</label>
                                            <input type="text" name="start" value="{{ $items->start }}" class="form-control" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Finish</label>
                                            <input type="text" name="finish" value="{{ $items->finish }}" class="form-control" required>
                                        </div>
                                            </select>
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
