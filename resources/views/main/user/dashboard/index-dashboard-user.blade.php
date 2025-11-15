@extends('layouts.app-user')

@section('content')

    <div class="container p-3">

        <div>
            <h5 class="fw-bold text-primary mb-0">
                <i class="bi bi-house-door me-1"></i>
                <span>DASHBOARD</span>
            </h5>
            <hr class="mt-1 mb-3">
        </div>
        <div class="row">

            {{-- CARD: Jumlah Kapal --}}
            <div class="col-md-3 col-6 mb-3">
                <div class="card shadow-sm border-0 rounded-3">
                    <div class="card-body text-center">
                        <div class="mb-2">
                            <i class="fa-solid fa-ship text-primary icon-dashboard"></i>
                        </div>
                        <h6 class="text-muted mb-1">Jumlah Kapal</h6>
                        <h3 class="fw-bold text-primary">{{ $jumlahKapal }}</h3>
                    </div>
                </div>
            </div>

            {{-- CARD: Total Pengajuan --}}
            <div class="col-md-3 col-6 mb-3">
                <div class="card shadow-sm border-0 rounded-3">
                    <div class="card-body text-center">
                        <div class="mb-2">
                            <i class="bi bi-file-earmark-text text-dark icon-dashboard"></i>
                        </div>
                        <h6 class="text-muted mb-1">Total Pengajuan</h6>
                        <h3 class="fw-bold text-dark">{{ $jumlahPengajuan }}</h3>
                    </div>
                </div>
            </div>

            {{-- CARD: Pengajuan Disetujui --}}
            <div class="col-md-3 col-6 mb-3">
                <div class="card shadow-sm border-0 rounded-3">
                    <div class="card-body text-center">
                        <div class="mb-2">
                            <i class="bi bi-check-circle text-success icon-dashboard"></i>
                        </div>
                        <h6 class="text-muted mb-1">Disetujui</h6>
                        <h3 class="fw-bold text-success">{{ $jumlahDisetujui }}</h3>
                    </div>
                </div>
            </div>

            {{-- CARD: Pengajuan Ditolak --}}
            <div class="col-md-3 col-6 mb-3">
                <div class="card shadow-sm border-0 rounded-3">
                    <div class="card-body text-center">
                        <div class="mb-2">
                            <i class="bi bi-x-circle icon-dashboard text-danger"></i>
                        </div>
                        <h6 class="text-muted mb-1">Ditolak</h6>
                        <h3 class="fw-bold text-danger">{{ $jumlahDitolak }}</h3>
                    </div>
                </div>
            </div>

        </div>

    </div>
@endsection