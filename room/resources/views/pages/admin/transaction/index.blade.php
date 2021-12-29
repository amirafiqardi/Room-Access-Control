@extends('layouts.admin')


@section('title')
    Check Room
@endsection

@section('content')
<div
    class="section-content section-dashboard-home"
    data-aos="fade-up"
    >
    <div class="container-fluid">
        <div class="dashboard-heading">
            <h2 class="dashboard-title">Check Room</h2>
            <p class="dashboard-subtitle">
                List of Check Room
            </p>
            {{-- <script type="text/javascript">
            $(document).ready(function(){
                setInterval(function(){
                    $("#ceksensor").load('ceksensor.php');
                }, 1000);
            });
            </script> --}}
        </div>
        <div class="dashboard-content">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <a href="{{ route('transactions.create') }}" class="btn btn-primary mb-3">
                            + Check In</a>
                            <div class="table-responsive">
                            <table class="table table-hover scroll-horizontal-vertical w-100" id="crudTable">
                                <thead>
                                    <tr>
                                        <th id="id">ID</th>
                                        <th id="schedule">Schedule</th>
                                        <th id="NIK">NIK</th>
                                        <th id="room_name">Room</th>
                                        <th id="check_in">Check In</th>
                                        <th id="check_out">Check Out</th>
                                        <th id="action">Action</th>
                                    </tr>
                                </thead>
                                <tbody></tbody>
                            </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection

@push('addon-scripts')
    <script>
        var datatable = $('#crudTable').DataTable({
            processing: true,
            serverSide: true,
            ordering: true,
            ajax: {
                url: '{!! url()->current() !!}'
            },
            columns: [
                {data: 'id', name:'id'},
                {data: 'schedule.classes.class_name', name:'schedule.classes.class_name'},
                {data: 'user.NIK', name:'user.NIK'},
                {data: 'room.room_name', name:'room.room_name'},
                {data: 'checkin', name:'checkin'},
                {data: 'checkout', name:'checkout'},
                {
                    data: 'action',
                    name: 'action',
                    orderable: false,
                    searcable: false,
                    width: '15%'
                },
            ]
        })
    </script>
@endpush