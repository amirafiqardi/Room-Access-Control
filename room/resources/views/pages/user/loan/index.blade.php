@extends('layouts.dashboard')


@section('title')
    Loans
@endsection

@section('content')
<div
    class="section-content section-dashboard-home"
    data-aos="fade-up"
    >
    <div class="container-fluid">
        <div class="dashboard-heading">
            <h2 class="dashboard-title">Loans</h2>
            <p class="dashboard-subtitle">
                List of Loans
            </p>
        </div>
        <div class="dashboard-content">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <a href="{{ route('dashboard-loans.create') }}" class="btn btn-primary mb-3">
                            + Add</a>
                            <div class="table-responsive">
                            <table class="table table-hover scroll-horizontal-vertical w-100" id="crudTable">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th id="NIK">NIK</th>
                                        <th id="room_name">Room</th>
                                        <th>Start</th>
                                        <th>Finish</th>
                                        <th>Status</th>
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
                {data: 'user.NIK', name:'user.NIK'},
                {data: 'room_name', name:'room_name'},
                {data: 'start', name:'start'},
                {data: 'finish', name:'finish'},
                {data: 'status', name:'status'},
            ]
        })
    </script>
@endpush