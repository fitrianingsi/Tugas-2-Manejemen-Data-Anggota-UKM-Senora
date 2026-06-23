@extends('layouts.app')

@section('title','Data Bidang')

@section('content')

<div class="card shadow-sm">
    <div class="card-header">
        <h5 class="mb-0">Data Bidang</h5>
    </div>

    <div class="card-body">

        <table class="table table-bordered">

            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Bidang</th>
                </tr>
            </thead>

            <tbody>

                @foreach($bidangs as $bidang)

                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $bidang->nama_bidang }}</td>
                </tr>

                @endforeach

            </tbody>

        </table>

    </div>
</div>

@endsection