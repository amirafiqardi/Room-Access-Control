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
                List of Schedules
            </p>
        </div>
        <div class="dashboard-content">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <a href="{{ route('schedules.create') }}" class="btn btn-primary mb-3">
                                + Add</a>
                            <div class="table-responsive">
                            <table class="table table-hover scroll-horizontal-vertical w-100" id="crudTable">
                                <thead>
                                    <tr>
                                        <th id="id">ID</th>
                                        <th id="class_name">Class</th>
                                        <th id="room_name">Room</th>
                                        <th id="start">Start</th>
                                        <th id="finish">Finish</th>
                                        <th id="aksi">Action</th>
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
                {data: 'classes.class_name', name:'classes.class_name'},
                {data: 'room.room_name', name:'room.room_name'},
                {data: 'start', name:'start'},
                {data: 'finish', name:'finish'},
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