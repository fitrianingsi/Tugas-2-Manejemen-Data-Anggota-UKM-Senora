@extends('layouts.app')

@section('title', 'Data Anggota')

@section('content')

    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h4 class="fw-semibold mb-1">Data Anggota</h4>
            <small class="text-muted">Dashboard / Data Anggota</small>
        </div>

        <a href="{{ route('anggotas.create') }}" class="btn btn-primary">
            + Tambah Anggota
        </a>
    </div>

    <div class="card shadow-sm">
        <div class="card-body">

            <div class="table-responsive">
                <table class="table table-bordered align-middle">
                    <thead class="table-light">
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>NIM</th>
                            <th>Jabatan</th>
                            <th>Angkatan</th>
                            <th>Status Keanggotaan</th>
                            <th width="120">Aksi</th>
                        </tr>
                    </thead>

                    <tbody>

                        @forelse($anggotas as $anggota)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $anggota->nama }}</td>
                                <td>{{ $anggota->nim }}</td>
                                <td>{{ $anggota->jabatan }}</td>
                                <td>{{ $anggota->angkatan }}</td>

                                <td>
                                    @if ($anggota->status_keanggotaan == 'Aktif')
                                        <span class="badge bg-success">Aktif</span>
                                    @elseif($anggota->status_keanggotaan == 'Nonaktif')
                                        <span class="badge bg-warning text-dark">Nonaktif</span>
                                    @else
                                        <span class="badge bg-primary">Alumni</span>
                                    @endif
                                </td>

                                <td>
                                    <a href="{{ route('anggotas.edit', $anggota->id) }}" class="btn btn-warning btn-sm">
                                        Edit
                                    </a>

                                    <form action="{{ route('anggotas.destroy', $anggota->id) }}" method="POST"
                                        class="d-inline">

                                        @csrf
                                        @method('DELETE')

                                        <button type="submit" class="btn btn-danger btn-sm">
                                            Hapus
                                        </button>
                                    </form>
                                </td>
                            </tr>

                        @empty

                            <tr>
                                <td colspan="7" class="text-center">
                                    Belum ada data anggota
                                </td>
                            </tr>
                        @endforelse

                    </tbody>

                </table>

            </div>

        </div>
    </div>

@endsection
