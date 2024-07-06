<!-- resources/views/product/success.blade.php -->
@extends('layouts.main')

@section('container')

<div class="container mt-5">
    <h2>Payment Successful</h2>
    <p>Thank you for your payment.</p>
    <a href="{{ route('produk') }}" class="btn btn-primary">Back to Products</a>
</div>

@endsection
