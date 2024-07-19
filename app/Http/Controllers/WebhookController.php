<?php

namespace App\Http\Controllers;

use App\Mail\Donations;
use App\Models\Transaction;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Mail;

class WebhookController extends Controller
{
    public function handleWebhook(Request $request)
    {
        $data = $request->all();
        if ($data['status'] == 'successful') {
            $transaction = new Transaction();
            $transaction->tx_ref = $data['tx_ref'];
            $transaction->amount = $data['amount'];
            $transaction->currency = $data['currency'];
            $transaction->status = $data['status'];
            $transaction->customer_email = $data['customer']['email'];
            $transaction->customer_name = $data['customer']['name'];
            $transaction->customer_phone = $data['customer']['phonenumber'];
            $transaction->choice = $data['customer']['choice'] ?? 'Null';
            $transaction->frequency = $data['customer']['frequency'] ?? 'Null';
            $transaction->save();
        }

        return response()->json(['status' => 'success']);
    }

    public function handleRedirect(Request $request)
    {
        $status = $request->query('status');
        $tx_ref = $request->query('tx_ref');
        $transaction_id = $request->query('transaction_id');

        if ($status == 'successful') {
            // Verify the transaction with Flutterwave to ensure it's valid
            $response = Http::withToken(env('FLUTTERWAVE_SECRET_KEY'))
                ->get("https://api.flutterwave.com/v3/transactions/{$transaction_id}/verify");

            if ($response->successful() && $response->json()['status'] == 'success') {
                $data = $response->json()['data'];
                // dd($data);

                $transaction = Transaction::where('tx_ref', $tx_ref)->first();
                if (!$transaction) {
                    $transaction = new Transaction();
                    $transaction->tx_ref = $data['tx_ref'];
                    $transaction->amount = $data['amount'];
                    $transaction->currency = $data['currency'];
                    $transaction->status = $data['status'];
                    $transaction->customer_email = $data['customer']['email'];
                    $transaction->customer_name = $data['customer']['name'];
                    $transaction->customer_phone = $data['customer']['phone_number'];
                    $transaction->save();
                } 
                Mail::to('converts@cruzada.org')->send(new Donations($transaction));

                return redirect()->route('donation.success')->with('message', 'Thank you for your donation!');
            } else {
                return redirect()->route('donation.failure')->with('error', 'Payment verification failed. Please try again.');
            }
        }

        return redirect()->route('donation.failure')->with('error', 'Payment was not successful. Please try again.');
    }
}
