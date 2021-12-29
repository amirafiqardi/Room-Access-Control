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
                List of Users
            </p>
        </div>
        <div class="dashboard-content">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <a href="{{ route('users.create') }}" class="btn btn-primary mb-3">
                                + Add</a>
                            <div class="table-responsive">
                            <table class="table table-hover scroll-horizontal-vertical w-100" id="crudTable">
                                <thead>
                                    <tr>
                                        <th id="id">ID</th>
                                        <th id="NIK">NIK</th>
                                        <th id="name">Name</th>
                                        <th id="class_name">Class</th>
                                        <th id="username">Username</th>
                                        <th id="email">Email</th>
                                        <th id="position">Position</th>
                                        <th id="position">Roles</th>
                                        <th id="RFID">RFID</th>
                                        <th>Action</th>
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
                {data: 'NIK', name:'NIK'},
                {data: 'name', name:'name'},
                {data: 'classes.class_name', name:'classes.class_name'},
                {data: 'username', name:'username'},
                {data: 'email', name:'email'},
                {data: 'position', name:'position'},
                {data: 'roles', name:'roles'},
                {data: 'RFID', name:'RFID'},
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