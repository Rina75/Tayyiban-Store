<!-- resources/views/product/payment.blade.php -->
@extends('layouts.main')

@section('container')

<div class="container mt-5 mb-2 pt-5">
    <h2>Form Transaksi</h2>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('payment.process') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="amount">Jumlah</label>
            <input type="number" name="amount" id="amount" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="card_number">Nomor Kartu</label>
            <input type="text" name="card_number" id="card_number" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="card_expiry">Card Expiry (MM/YY)</label>
            <input type="text" name="card_expiry" id="card_expiry" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="card_cvc">CVC</label>
            <input type="text" name="card_cvc" id="card_cvc" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary mt-3" >Pay</button>
    </form>
</div>

@endsection
