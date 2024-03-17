@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-xl-2">
            <div class="card shadow-lg custom-card border-top-card border-top-primary rounded-0">
                <div class="card-body">
                    <div class="text-center"> <span class="avatar avatar-md bg-primary shadow-sm avatar-rounded mb-2"> <i
                                class="fas fa-users fs-16 text-white"></i> </span>
                        <p class="fs-14 fw-semibold mb-2">Total Users</p>
                        <div class="d-flex align-items-center justify-content-center flex-wrap">
                            <h5 class="mb-0 fw-semibold">15,800</h5> <span
                                class="badge bg-success-transparent rounded-pill ms-1">+25.8%</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
