<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TransactionController extends Controller
{
    public function showPaymentForm()
    {
        return view('product.payment');
    }

    public function processPayment(Request $request)
    {
        // Validasi input
        $request->validate([
            'amount' => 'required|numeric|min:1',
            'card_number' => 'required|digits:16',
            'card_expiry' => 'required|date_format:m/y',
            'card_cvc' => 'required|digits:3',
        ]);

        // Proses pembayaran (dummy)
        $paymentStatus = 'success'; // ini harusnya berasal dari gateway payment yang sesungguhnya

        if ($paymentStatus == 'success') {
            return redirect()->route('payment.success');
        } else {
            return redirect()->route('payment.failure');
        }
    }

    public function paymentSuccess()
    {
        return view('product.success');
    }

    public function paymentFailure()
    {
        return view('product.failure');
    }
}
