@extends('layouts.admin')


@section('title')
    Dashboard
@endsection

@section('content')
<div
    class="section-content section-dashboard-home"
    data-aos="fade-up"
    >
    <div class="container-fluid">
        <div class="dashboard-heading">
        <h2 class="dashboard-title">Admin Dashboard</h2>
        <p class="dashboard-subtitle">
            Administrator panel
        </p>
        </div>
        <div class="dashboard-content">
        <div class="row">
            <div class="col-md-12">
            <div class="card mb-2">
                <div class="card-body">
                <div class="dashboard-card-title">
                    Jumlah User
                </div>
                <div class="dashboard-card-subtitle">
                    {{ $transaction }}
                </div>
                </div>
            </div>
            </div>

            <div class="dashboard-content">
                <div class="row">
                    <div class="col-md-4">
                    <div class="card mb-2">
                        <div class="card-body">
                        <div class="dashboard-card-title">
                            GU 602
                        </div>
                        <div class="dashboard-card-subtitle">
                            <div class="row">
                                <div class="col">
                                    <div class="dashboard-card-title">
                                        terjadwal
                                    </div>
                                    {{ $new }}
                                </div>
                                <div class="col">
                                    <div class="dashboard-card-title">
                                        check in
                                    </div>
                                    {{ $checkin }}
                                </div>
                              </div>
                        </div>
                        </div>
                    </div>
                    </div>
        
                    <div class="col-md-4">
                        <div class="card mb-2">
                            <div class="card-body">
                            <div class="dashboard-card-title">
                                GU 604
                            </div>
                            <div class="dashboard-card-subtitle">
                                <div class="row">
                                    <div class="col">
                                        <div class="dashboard-card-title">
                                            terjadwal
                                        </div>
                                        {{ $new2 }}
                                    </div>
                                    <div class="col">
                                        <div class="dashboard-card-title">
                                            check in
                                        </div>
                                        {{ $checkin2 }}
                                    </div>
                                  </div>
                            </div>
                            </div>
                        </div>
                        </div>
                
                    <div class="col-md-4">
                        <div class="card mb-2">
                            <div class="card-body">
                            <div class="dashboard-card-title">
                                GU 606
                            </div>
                            <div class="dashboard-card-subtitle">
                                <div class="row">
                                    <div class="col">
                                        <div class="dashboard-card-title">
                                            terjadwal
                                        </div>
                                        {{ $new3 }}
                                    </div>
                                    <div class="col">
                                        <div class="dashboard-card-title">
                                            check in
                                        </div>
                                        {{ $checkin3 }}
                                    </div>
                                  </div>
                            </div>
                            </div>
                        </div>
                        </div>
        
                        <div class="col-md-4">
                            <div class="card mb-2">
                                <div class="card-body">
                                <div class="dashboard-card-title">
                                    GU 607
                                </div>
                                <div class="dashboard-card-subtitle">
                                    <div class="row">
                                        <div class="col">
                                            <div class="dashboard-card-title">
                                                terjadwal
                                            </div>
                                            {{ $new4 }}
                                        </div>
                                        <div class="col">
                                            <div class="dashboard-card-title">
                                                check in
                                            </div>
                                            {{ $checkin4 }}
                                        </div>
                                      </div>
                                </div>
                                </div>
                            </div>
                            </div>
        
                            <div class="col-md-4">
                                <div class="card mb-2">
                                    <div class="card-body">
                                    <div class="dashboard-card-title">
                                        GU 608
                                    </div>
                                    <div class="dashboard-card-subtitle">
                                        <div class="row">
                                            <div class="col">
                                                <div class="dashboard-card-title">
                                                    terjadwal
                                                </div>
                                                {{ $new5 }}
                                            </div>
                                            <div class="col">
                                                <div class="dashboard-card-title">
                                                    check in
                                                </div>
                                                {{ $checkin5 }}
                                            </div>
                                          </div>
                                    </div>
                                    </div>
                                </div>
                                </div>
        
                                <div class="col-md-4">
                                    <div class="card mb-2">
                                        <div class="card-body">
                                        <div class="dashboard-card-title">
                                            RTF 3.1
                                        </div>
                                        <div class="dashboard-card-subtitle">
                                            <div class="row">
                                                <div class="col">
                                                    <div class="dashboard-card-title">
                                                        terjadwal
                                                    </div>
                                                    {{ $new6 }}
                                                </div>
                                                <div class="col">
                                                    <div class="dashboard-card-title">
                                                        check in
                                                    </div>
                                                    {{ $checkin6 }}
                                                </div>
                                              </div>
                                        </div>
                                        </div>
                                    </div>
                                    </div>
        
                                    <div class="col-md-4">
                                        <div class="card mb-2">
                                            <div class="card-body">
                                            <div class="dashboard-card-title">
                                                RTF 3.3
                                            </div>
                                            <div class="dashboard-card-subtitle">
                                                <div class="row">
                                                    <div class="col">
                                                        <div class="dashboard-card-title">
                                                            terjadwal
                                                        </div>
                                                        {{ $new7 }}
                                                    </div>
                                                    <div class="col">
                                                        <div class="dashboard-card-title">
                                                            check in
                                                        </div>
                                                        {{ $checkin7 }}
                                                    </div>
                                                  </div>
                                            </div>
                                            </div>
                                        </div>
                                        </div>
        
                                        <div class="col-md-4">
                                            <div class="card mb-2">
                                                <div class="card-body">
                                                <div class="dashboard-card-title">
                                                    RTF 4
                                                </div>
                                                <div class="dashboard-card-subtitle">
                                                    <div class="row">
                                                        <div class="col">
                                                            <div class="dashboard-card-title">
                                                                terjadwal
                                                            </div>
                                                            {{ $new8 }}
                                                        </div>
                                                        <div class="col">
                                                            <div class="dashboard-card-title">
                                                                check in
                                                            </div>
                                                            {{ $checkin8 }}
                                                        </div>
                                                      </div>
                                                </div>
                                                </div>
                                            </div>
                                            </div>
                                        
                                            <div class="col-md-4">
                                                <div class="card mb-2">
                                                    <div class="card-body">
                                                    <div class="dashboard-card-title">
                                                        RTF 4.1
                                                    </div>
                                                    <div class="dashboard-card-subtitle">
                                                        <div class="row">
                                                            <div class="col">
                                                                <div class="dashboard-card-title">
                                                                    terjadwal
                                                                </div>
                                                                {{ $new9 }}
                                                            </div>
                                                            <div class="col">
                                                                <div class="dashboard-card-title">
                                                                    check in
                                                                </div>
                                                                {{ $checkin9 }}
                                                            </div>
                                                          </div>
                                                    </div>
                                                    </div>
                                                </div>
                                                </div>
        
                                                <div class="col-md-4">
                                                    <div class="card mb-2">
                                                        <div class="card-body">
                                                        <div class="dashboard-card-title">
                                                            RTF 4.2
                                                        </div>
                                                        <div class="dashboard-card-subtitle">
                                                            <div class="row">
                                                                <div class="col">
                                                                    <div class="dashboard-card-title">
                                                                        terjadwal
                                                                    </div>
                                                                    {{ $new10 }}
                                                                </div>
                                                                <div class="col">
                                                                    <div class="dashboard-card-title">
                                                                        check in
                                                                    </div>
                                                                    {{ $checkin10 }}
                                                                </div>
                                                              </div>
                                                        </div>
                                                        </div>
                                                    </div>
                                                    </div>
        
                                                    
                                                        <div class="col-md-4">
                                                            <div class="card mb-2">
                                                                <div class="card-body">
                                                                <div class="dashboard-card-title">
                                                                    TA 10.1
                                                                </div>
                                                                <div class="dashboard-card-subtitle">
                                                                    <div class="row">
                                                                        <div class="col">
                                                                            <div class="dashboard-card-title">
                                                                                terjadwal
                                                                            </div>
                                                                            {{ $new12 }}
                                                                        </div>
                                                                        <div class="col">
                                                                            <div class="dashboard-card-title">
                                                                                check in
                                                                            </div>
                                                                            {{ $checkin12 }}
                                                                        </div>
                                                                      </div>
                                                                </div>
                                                                </div>
                                                            </div>
                                                            </div>
        
                                                            <div class="col-md-4">
                                                                <div class="card mb-2">
                                                                    <div class="card-body">
                                                                    <div class="dashboard-card-title">
                                                                        TA 10.2
                                                                    </div>
                                                                    <div class="dashboard-card-subtitle">
                                                                        <div class="row">
                                                                            <div class="col">
                                                                                <div class="dashboard-card-title">
                                                                                    terjadwal
                                                                                </div>
                                                                                {{ $new13 }}
                                                                            </div>
                                                                            <div class="col">
                                                                                <div class="dashboard-card-title">
                                                                                    check in
                                                                                </div>
                                                                                {{ $checkin13 }}
                                                                            </div>
                                                                          </div>
                                                                    </div>
                                                                    </div>
                                                                </div>
                                                                </div>
        
                                                                <div class="col-md-4">
                                                                    <div class="card mb-2">
                                                                        <div class="card-body">
                                                                        <div class="dashboard-card-title">
                                                                            TA 10.3
                                                                        </div>
                                                                        <div class="dashboard-card-subtitle">
                                                                            <div class="row">
                                                                                <div class="col">
                                                                                    <div class="dashboard-card-title">
                                                                                        terjadwal
                                                                                    </div>
                                                                                    {{ $new14 }}
                                                                                </div>
                                                                                <div class="col">
                                                                                    <div class="dashboard-card-title">
                                                                                        check in
                                                                                    </div>
                                                                                    {{ $checkin14 }}
                                                                                </div>
                                                                              </div>
                                                                        </div>
                                                                        </div>
                                                                    </div>
                                                                    </div>
        
                                                                    <div class="col-md-4">
                                                                        <div class="card mb-2">
                                                                            <div class="card-body">
                                                                            <div class="dashboard-card-title">
                                                                                TA 10.4
                                                                            </div>
                                                                            <div class="dashboard-card-subtitle">
                                                                                <div class="row">
                                                                                    <div class="col">
                                                                                        <div class="dashboard-card-title">
                                                                                            terjadwal
                                                                                        </div>
                                                                                        {{ $new15 }}
                                                                                    </div>
                                                                                    <div class="col">
                                                                                        <div class="dashboard-card-title">
                                                                                            check in
                                                                                        </div>
                                                                                        {{ $checkin15 }}
                                                                                    </div>
                                                                                  </div>
                                                                            </div>
                                                                            </div>
                                                                        </div>
                                                                        </div>
        
                                                                        <div class="col-md-4">
                                                                            <div class="card mb-2">
                                                                                <div class="card-body">
                                                                                <div class="dashboard-card-title">
                                                                                    TA 11.1
                                                                                </div>
                                                                                <div class="dashboard-card-subtitle">
                                                                                    <div class="row">
                                                                                        <div class="col">
                                                                                            <div class="dashboard-card-title">
                                                                                                terjadwal
                                                                                            </div>
                                                                                            {{ $new16 }}
                                                                                        </div>
                                                                                        <div class="col">
                                                                                            <div class="dashboard-card-title">
                                                                                                check in
                                                                                            </div>
                                                                                            {{ $checkin17 }}
                                                                                        </div>
                                                                                      </div>
                                                                                </div>
                                                                                </div>
                                                                            </div>
                                                                            </div>
        
                                                                            <div class="col-md-4">
                                                                                <div class="card mb-2">
                                                                                    <div class="card-body">
                                                                                    <div class="dashboard-card-title">
                                                                                        TA 11.3
                                                                                    </div>
                                                                                    <div class="dashboard-card-subtitle">
                                                                                        <div class="row">
                                                                                            <div class="col">
                                                                                                <div class="dashboard-card-title">
                                                                                                    terjadwal
                                                                                                </div>
                                                                                                {{ $new18 }}
                                                                                            </div>
                                                                                            <div class="col">
                                                                                                <div class="dashboard-card-title">
                                                                                                    check in
                                                                                                </div>
                                                                                                {{ $checkin18 }}
                                                                                            </div>
                                                                                          </div>
                                                                                    </div>
                                                                                    </div>
                                                                                </div>
                                                                                </div>
        
                                                                                <div class="col-md-4">
                                                                                    <div class="card mb-2">
                                                                                        <div class="card-body">
                                                                                        <div class="dashboard-card-title">
                                                                                            TA 11.4
                                                                                        </div>
                                                                                        <div class="dashboard-card-subtitle">
                                                                                            <div class="row">
                                                                                                <div class="col">
                                                                                                    <div class="dashboard-card-title">
                                                                                                        terjadwal
                                                                                                    </div>
                                                                                                    {{ $new19 }}
                                                                                                </div>
                                                                                                <div class="col">
                                                                                                    <div class="dashboard-card-title">
                                                                                                        check in
                                                                                                    </div>
                                                                                                    {{ $checkin19 }}
                                                                                                </div>
                                                                                              </div>
                                                                                        </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    </div>
        
                                                                                    <div class="col-md-4">
                                                                                        <div class="card mb-2">
                                                                                            <div class="card-body">
                                                                                            <div class="dashboard-card-title">
                                                                                                TA 11.5
                                                                                            </div>
                                                                                            <div class="dashboard-card-subtitle">
                                                                                                <div class="row">
                                                                                                    <div class="col">
                                                                                                        <div class="dashboard-card-title">
                                                                                                            terjadwal
                                                                                                        </div>
                                                                                                        {{ $new20 }}
                                                                                                    </div>
                                                                                                    <div class="col">
                                                                                                        <div class="dashboard-card-title">
                                                                                                            check in
                                                                                                        </div>
                                                                                                        {{ $checkin20 }}
                                                                                                    </div>
                                                                                                  </div>
                                                                                            </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        </div>
        
                                                                                        <div class="col-md-4">
                                                                                            <div class="card mb-2">
                                                                                                <div class="card-body">
                                                                                                <div class="dashboard-card-title">
                                                                                                    GU 701
                                                                                                </div>
                                                                                                <div class="dashboard-card-subtitle">
                                                                                                    <div class="row">
                                                                                                        <div class="col">
                                                                                                            <div class="dashboard-card-title">
                                                                                                                terjadwal
                                                                                                            </div>
                                                                                                            {{ $new21 }}
                                                                                                        </div>
                                                                                                        <div class="col">
                                                                                                            <div class="dashboard-card-title">
                                                                                                                check in
                                                                                                            </div>
                                                                                                            {{ $checkin21 }}
                                                                                                        </div>
                                                                                                      </div>
                                                                                                </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            </div>
                                                                                            <div class="col-md-4">
                                                                                                <div class="card mb-2">
                                                                                                    <div class="card-body">
                                                                                                    <div class="dashboard-card-title">
                                                                                                        GU 702
                                                                                                    </div>
                                                                                                    <div class="dashboard-card-subtitle">
                                                                                                        <div class="row">
                                                                                                            <div class="col">
                                                                                                                <div class="dashboard-card-title">
                                                                                                                    terjadwal
                                                                                                                </div>
                                                                                                                {{ $new22 }}
                                                                                                            </div>
                                                                                                            <div class="col">
                                                                                                                <div class="dashboard-card-title">
                                                                                                                    check in
                                                                                                                </div>
                                                                                                                {{ $checkin22 }}
                                                                                                            </div>
                                                                                                          </div>
                                                                                                    </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                                </div>
        
                                                                                                <div class="col-md-4">
                                                                                                    <div class="card mb-2">
                                                                                                        <div class="card-body">
                                                                                                        <div class="dashboard-card-title">
                                                                                                            GU 704
                                                                                                        </div>
                                                                                                        <div class="dashboard-card-subtitle">
                                                                                                            <div class="row">
                                                                                                                <div class="col">
                                                                                                                    <div class="dashboard-card-title">
                                                                                                                        terjadwal
                                                                                                                    </div>
                                                                                                                    {{ $new21 }}
                                                                                                                </div>
                                                                                                                <div class="col">
                                                                                                                    <div class="dashboard-card-title">
                                                                                                                        check in
                                                                                                                    </div>
                                                                                                                    {{ $checkin21 }}
                                                                                                                </div>
                                                                                                              </div>
                                                                                                        </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    </div>
        
                                                                                                    <div class="col-md-4">
                                                                                                        <div class="card mb-2">
                                                                                                            <div class="card-body">
                                                                                                            <div class="dashboard-card-title">
                                                                                                                GU 705
                                                                                                            </div>
                                                                                                            <div class="dashboard-card-subtitle">
                                                                                                                <div class="row">
                                                                                                                    <div class="col">
                                                                                                                        <div class="dashboard-card-title">
                                                                                                                            terjadwal
                                                                                                                        </div>
                                                                                                                        {{ $new22 }}
                                                                                                                    </div>
                                                                                                                    <div class="col">
                                                                                                                        <div class="dashboard-card-title">
                                                                                                                            check in
                                                                                                                        </div>
                                                                                                                        {{ $checkin22 }}
                                                                                                                    </div>
                                                                                                                  </div>
                                                                                                            </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        </div>
        
                                                                                                        <div class="col-md-4">
                                                                                                            <div class="card mb-2">
                                                                                                                <div class="card-body">
                                                                                                                <div class="dashboard-card-title">
                                                                                                                    GU 706
                                                                                                                </div>
                                                                                                                <div class="dashboard-card-subtitle">
                                                                                                                    <div class="row">
                                                                                                                        <div class="col">
                                                                                                                            <div class="dashboard-card-title">
                                                                                                                                terjadwal
                                                                                                                            </div>
                                                                                                                            {{ $new23 }}
                                                                                                                        </div>
                                                                                                                        <div class="col">
                                                                                                                            <div class="dashboard-card-title">
                                                                                                                                check in
                                                                                                                            </div>
                                                                                                                            {{ $checkin23 }}
                                                                                                                        </div>
                                                                                                                      </div>
                                                                                                                </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                            </div>
        
                                                                                                            <div class="col-md-4">
                                                                                                                <div class="card mb-2">
                                                                                                                    <div class="card-body">
                                                                                                                    <div class="dashboard-card-title">
                                                                                                                        GU 707
                                                                                                                    </div>
                                                                                                                    <div class="dashboard-card-subtitle">
                                                                                                                        <div class="row">
                                                                                                                            <div class="col">
                                                                                                                                <div class="dashboard-card-title">
                                                                                                                                    terjadwal
                                                                                                                                </div>
                                                                                                                                {{ $new24 }}
                                                                                                                            </div>
                                                                                                                            <div class="col">
                                                                                                                                <div class="dashboard-card-title">
                                                                                                                                    check in
                                                                                                                                </div>
                                                                                                                                {{ $checkin24 }}
                                                                                                                            </div>
                                                                                                                          </div>
                                                                                                                    </div>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                                </div>
                            
                        
                                                                             
        </div>
        </div>
    </div>
    </div>
@endsection