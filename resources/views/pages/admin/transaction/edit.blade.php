@extends('layouts.admin')


@section('content')

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Edit Transaksi {{ $item->title }}</h1>
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
            <form action="{{ route('transaction.update', $item->id) }}" method="POST">
                @method('PUT')
                @csrf
                <div class="form-group">
                    <label for="transaction_status">Status</label>
                    <select name="transaction_status" id="transaction_status" class="form-control" required>
                        <option value=""> - Pilih Status - </option>
                        <option value="IN_CART" {{ ($item->transaction_status == 'IN_CART') ? 'selected' : '' }}>IN CART
                        </option>
                        <option value="PENDING" {{ ($item->transaction_status == 'PENDING') ? 'selected' : '' }}>PENDING
                        </option>
                        <option value="SUCCESS" {{ ($item->transaction_status == 'SUCCESS') ? 'selected' : '' }}>SUCCESS
                        </option>
                        <option value="CANCEL" {{ ($item->transaction_status == 'CANCEL') ? 'selected' : '' }}>CANCEL
                        </option>
                        <option value="FAILED" {{ ($item->transaction_status == 'FAILED') ? 'selected' : '' }}>FAILED
                        </option>
                    </select>
                </div>
                <button type="submit" class="btn btn-info btn-block">
                    Ubah
                </button>
            </form>
        </div>
    </div>


</div>
<!-- /.container-fluid -->

@endsection