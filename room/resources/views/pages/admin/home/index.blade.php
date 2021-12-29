@extends('layouts.admin')


@section('title')
    Home
@endsection

@section('content')
<div
    class="section-content section-dashboard-home"
    data-aos="fade-up"
    >
    {{-- <div class="container-fluid">
        <div class="dashboard-heading">
            <div class="container mt-4">
                <div class="row">
            <h2 class="dashboard-title">Home</h2>
            <p class="dashboard-subtitle">
                
            </p>
        </div> --}}

        <div class="dashboard-content">
        <div class="row">
        <div class="col-md-12">
                <div class="card pb-1 menu-1">
                    
                        <hr>
                        <h3 class="text-center text-primary"><b>W E L C O M E</b></h3>
                        <hr>
                    </div>
                    <div class="card-body">
        {{-- <div class="dashboard-content"> --}}
            {{-- <div class="row">
                <div class="col-md-12"> --}}
        {{-- <div class="container"> --}}
            {{-- <div class="row align-items-center row-login"> --}}
                <div class="col-lg-25 text-center">
                    <img src="/images/images.jpeg" class="img-fluid" alt="Responsive image">
                    {{-- <img
                    src="/images/images.png"
                    alt=""
                    class="w-75 rounded mb-4 mb-lg-none"
                    /> --}}
                </div>
        {{-- <div class="dashboard-content">
            <div class="row">
                <div class="col-md-12"> --}}
                    {{-- <div class="card">
                        <div class="card-body">
                            <button type="button" class="btn btn-light">How to use</button> --}}
                                
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
                {data: 'building', name:'building'},
                {data: 'capacity', name:'capacity'},
               
            ]
        })
    </script>
@endpush