@extends('layouts.dashboard')


@section('title')
    Loans
@endsection

@push('addon-style')

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.7.14/css/bootstrap-datetimepicker.min.css">


@endpush

@section('content')
<div
    class="section-content section-dashboard-home"
    data-aos="fade-up"
    >
    <div class="container-fluid">
        <div class="dashboard-heading">
            <h2 class="dashboard-title">Loans</h2>
            <p class="dashboard-subtitle">
                New Loans
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
                            <form action="{{ route('dashboard-loans.store')}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-md-12">
                                        {{-- <div class="form-group">
                                            <label>NIK</label>
                                            <input type="text" name="NIK" class="form-control" required>
                                        </div> --}}
                                        <div class="form-group">
                                            <label>Room</label>
                                            <select name="room_name" class="form-control">
                                                @foreach ($room as $room)
                                                <option value="{{ $room->id }}">{{ $room->room_name }}</option>
                                            @endforeach
                                             </select>
                                        </div>

                                        <div class="form-group">
                                            <label>Start</label>
                                            <div  class='input-group date' id='datetimepicker1'>
                                                <input name="start" type='text' class="form-control" />
                                                <span class="input-group-addon">
                                                  <span class="glyphicon glyphicon-calendar"></span>
                                                </span>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label>Finish</label>
                                            <div class='input-group date' id='datetimepicker2'>
                                              <input name="finish" type='text' class="form-control" />
                                              <span class="input-group-addon">
                                                <span class="glyphicon glyphicon-calendar"></span>
                                              </span>
                                            </div>
                                          </div>

                                        {{-- <div class="form-group">
                                            <label>Status</label>
                                            <select name="status" class="form-control">
                                                <option>Mengajukan</option>
                                            </select>
                                        </div> --}}
                                </div>
                                <div class="row">
                                    <div class="col text-right">
                                        <button class="btn btn-success px-5">
                                            Submit Now
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

@push ('addon-scripts')

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.15.1/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.7.14/js/bootstrap-datetimepicker.min.js"></script>

    <script>

          $(function () {
            $('#datetimepicker1').datetimepicker({
                
            });
        

            $('#datetimepicker2').datetimepicker({
      
            });

        });
        
    
    </script>

@endpush
