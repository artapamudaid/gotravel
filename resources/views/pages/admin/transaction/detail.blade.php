@extends('layouts.admin')


@section('content')

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Edit Transaksi {{ $item->user->name }}</h1>
    </div>

    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <div class="card shadow">
        <div class="card-body">
            <table class="table table-bordered">
                <tr>
                    <th>ID</th>
                    <th>:</th>
                    <td>{{ $item->id }}</td>
                </tr>
                <tr>
                    <th>Paket Travel</th>
                    <th>:</th>
                    <td>{{ $item->travel_package->title }}</td>
                </tr>
                <tr>
                    <th>Pemesan</th>
                    <th>:</th>
                    <td>{{ $item->user->name }}</td>
                </tr>
                <tr>
                    <th>Addition Visa</th>
                    <th>:</th>
                    <td>$ {{ $item->additional_visa }}</td>
                </tr>
                <tr>
                    <th>Total Transaksi</th>
                    <th>:</th>
                    <td>$ {{ $item->transaction_total }}</td>
                </tr>
                <tr>
                    <th>Status Transaksi</th>
                    <th>:</th>
                    <td>{{ $item->transaction_status }}</td>
                </tr>
                <tr>
                    <th>Pembelian</th>
                    <th>:</th>
                    <td>
                        <table class="table table-bordered">
                            <tr>
                                <th>ID</th>
                                <th>Nama</th>
                                <th>Nationality</th>
                                <th>Visa</th>
                                <th>DOE Passport</th>
                            </tr>
                            @foreach ($item->details as $detail)
                            <tr>
                                <td>{{ $detail->id }}</td>
                                <td>{{ $detail->username }}</td>
                                <td>{{ $detail->nationality }}</td>
                                <td>{{ $detail->is_visa ? '30 Days' : 'N/A' }}</td>
                                <td>{{ $detail->doe_passport }}</td>
                            </tr>
                            @endforeach
                        </table>
                    </td>
                </tr>
            </table>
            <div class="float-right">
                <a href="{{ route('transaction.edit', $item->id) }}" type="button" class="btn btn-info btn-sm">
                    Edit
                </a>
                <a href="{{ route('transaction.index') }}" type="button" class="btn btn-default btn-sm">
                    Kembali
                </a>
            </div>
        </div>
    </div>


</div>
<!-- /.container-fluid -->

@endsection