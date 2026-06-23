@extends('layouts.app')

@section('title', 'Data Divisi')

@section('content')

    <div class="card shadow-sm">
        <div class="card-header">
            <h5 class="mb-0">Data Divisi</h5>
        </div>

        <div class="card-body">

            <table class="table table-bordered">

                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Divisi</th>
                    </tr>
                </thead>

                <tbody>

                    @foreach ($divisis as $divisi)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $divisi->nama_divisi }}</td>
                        </tr>
                    @endforeach

                </tbody>

            </table>

        </div>
    </div>

@endsection
