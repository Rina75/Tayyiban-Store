<!-- resources/views/product/failure.blade.php -->
@extends('layouts.main')

@section('container')

<div class="container mt-5">
    <h2>Payment Failed</h2>
    <p>There was an issue with your payment. Please try again.</p>
    <a href="{{ route('payment.form') }}" class="btn btn-primary">Try Again</a>
</div>

@endsection
