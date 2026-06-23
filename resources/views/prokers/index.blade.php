@extends('layouts.app')

@section('title','Program Kerja')

@section('content')
<div class="card shadow-sm">
    <div class="card-header">
        <h5 class="mb-0">Program Kerja UKM SENORA</h5>
    </div>
    <div class="card-body">
        <table class="table table-bordered table-hover align-middle">
            <thead class="table-light">
                <tr>
                    <th>No</th>
                    <th>Divisi</th>
                    <th>Nama Proker</th>
                    <th>Tujuan</th>
                    <th>Waktu</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                @forelse($prokers as $proker)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $proker->divisi->nama_divisi ?? '-' }}</td>
                    <td>{{ $proker->nama_proker }}</td>
                    <td>{{ $proker->tujuan }}</td>
                    <td>{{ $proker->waktu_pelaksanaan }}</td>
                    <td>
                        @if($proker->status == 'Selesai')
                            <span class="badge bg-success">Selesai</span>
                        @elseif($proker->status == 'Sedang Berjalan')
                            <span class="badge bg-warning text-dark">Sedang Berjalan</span>
                        @else
                            <span class="badge bg-secondary">Belum Dilaksanakan</span>
                        @endif
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="6" class="text-center">Belum ada data program kerja</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection