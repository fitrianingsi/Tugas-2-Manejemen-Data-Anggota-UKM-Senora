@extends('layouts.app')

@section('title', 'Tambah Anggota')

@section('content')

    <div class="card shadow-sm">

        <div class="card-header">
            <h5 class="mb-0">Tambah Anggota</h5>
        </div>

        <div class="card-body">

            <form action="{{ route('anggotas.store') }}" method="POST">

                @csrf

                <div class="mb-3">
                    <label>Divisi</label>

                    <select name="divisi_id" class="form-control">

                        @foreach ($divisis as $divisi)
                            <option value="{{ $divisi->id }}">
                                {{ $divisi->nama_divisi }}
                            </option>
                        @endforeach

                    </select>
                </div>

                <div class="mb-3">
                    <label>Nama</label>
                    <input type="text" name="nama" class="form-control">
                </div>

                <div class="mb-3">
                    <label>NIM</label>
                    <input type="text" name="nim" class="form-control">
                </div>

                <div class="mb-3">
                    <label>Jabatan</label>
                    <input type="text" name="jabatan" class="form-control">
                </div>

                <div class="mb-3">
                    <label>Angkatan</label>
                    <input type="number" name="angkatan" class="form-control">
                </div>

                <div class="mb-3">
                    <label>Status Keanggotaan</label>

                    <select name="status_keanggotaan" class="form-control">

                        <option value="Aktif">Aktif</option>
                        <option value="Nonaktif">Nonaktif</option>
                        <option value="Alumni">Alumni</option>

                    </select>
                </div>

                <button type="submit" class="btn btn-primary">
                    Simpan
                </button>

                <a href="{{ route('anggotas.index') }}" class="btn btn-secondary">
                    Kembali
                </a>

            </form>

        </div>

    </div>

@endsection
