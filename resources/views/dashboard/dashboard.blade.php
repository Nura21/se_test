@extends('layouts.app')
@section('title',' Dashboard')
@section('content')

{{-- @if (auth()->user()->role == "WARGA" && auth()->user()->warga->status == "WAITING")
    @include('dashboard.partials.waiting')
@elseif (auth()->user()->role == "WARGA" && auth()->user()->warga->status == "REJECT")
    @include('dashboard.partials.reject')
@else --}}

    <!-- Content Row -->
    <div class="row">

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Student Acitve</div>
                            {{-- <div class="h5 mb-0 font-weight-bold text-gray-800">Rp{{ number_format($total_pemasukan) }}</div> --}}
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Student Non Active</div>
                            {{-- <div class="h5 mb-0 font-weight-bold text-gray-800">Rp{{ number_format($total_pengeluaran) }}</div> --}}
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Grade</div>
                            <div class="row no-gutters align-items-center">
                                <div class="col-auto">
                                    {{-- <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">{{ count($umkm) }}</div> --}}
                                </div>
                                <div class="col">
                                    <div class="progress progress-sm mr-2">
                                        <div class="progress-bar bg-info" role="progressbar"
                                            style="width: 50%" aria-valuenow="50" aria-valuemin="0"
                                            aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-shopping-basket fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Pending Requests Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Grade</div>
                            {{-- <div class="h5 mb-0 font-weight-bold text-gray-800">{{ count($block) }}</div> --}}
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-home fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    
{{-- @endif --}}
@endsection

@push('scripts')
<script>
    $(document).ready(function() {
        // $('#dataTableUmkm').DataTable();
        // $('#dataTableBlock').DataTable();
    });
</script>
@endpush
