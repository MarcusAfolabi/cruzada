<?php

namespace App\Livewire;

use App\Mail\Donations;
use App\Models\Country;
use Livewire\Component; 
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Mail;

class DonateForm extends Component
{
    public $name;
    public $email;
    public $phone;
    public $amount;
    public $country;

 
    protected $rules = [
        "name" => "required|max:200|string",
        "email" => "required|email",
        "phone" => "required|numeric",
        "amount" => "required|numeric",
        "country" => "required|string",
    ];

    public function donateNow()
    {
        $this->validate();
        $country_currency = explode(' / ', $this->country);
        $currency = end($country_currency);

        $donate = ([
            "name" => $this->name,
            "email" => $this->email,
            "phone" => $this->phone,
            "amount" => $this->amount,
            'country' => $country_currency[0],
            'currency' => $currency,
        ]);
        // dd($donate);
        $response = Http::withToken(env('FLUTTERWAVE_SECRET_KEY'))
        ->post('https://api.flutterwave.com/v3/payments', [
            'tx_ref' => 'cruzaa-tx-' . time(),
            'amount' => $donate['amount'],
            'currency' => $donate['currency'],
            'redirect_url' => route('webhook.flutterwave'),
            'payment_options' => 'card, mobilemoneyghana, ussd',
            'customer' => [
                'email' => $donate['email'],
                'phone_number' => $donate['phone'],
                'name' => $donate['name'],
            ],
            'customizations' => [
                'title' => 'Donate to Cruzada International Network',
                'description' => 'Donation to support our cause',
                'logo' => 'https://cruzadanetwork.org/assets/img/favicon.png',
            ],
        ]);

        if ($response->successful()) {
            $dd = $response->json()['data']['link'];
            return redirect($response->json()['data']['link']);
        }

        return back()->withErrors('Unable to initiate payment. Please try again.');
        Mail::to('converts@cruzada.org')->send(new Donations($donate));
        // return redirect()->to('/thank-you');
    }
    
    public function render()
    {
        return view('livewire.donate-form', [
            'countries' => Country::all(),
        ]);
    }
}
