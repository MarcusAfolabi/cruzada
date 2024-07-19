<?php

namespace App\Livewire;

use App\Mail\Partners;
use App\Models\Country;
use Livewire\Component;
use App\Models\ConvertForm;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Mail;

class PartnerForm extends Component
{
    public $name;
    public $phone;
    public $email;
    public $amount;
    public $choice;
    public $country;
    public $frequency;


   
    protected $rules = [
        "name" => "required|max:200|string|min:10",
        "phone" => "required|numeric",
        "email" => "required|email",
        "amount" => "required|numeric",
        "choice" => "sometimes|string|max:255",
        "country" => "sometimes|string|max:255",
        "frequency" => "sometimes|string|max:255",
    ];

    public function donateNow()
    {
        $this->validate();
        // $soul = ConvertForm::create([
        $country_currency = explode(' / ', $this->country);
        $currency = end($country_currency);

        $partner = ([
            "name" => $this->name,
            "phone" => $this->phone,
            "email" => $this->email,
            "amount" => $this->amount,
            "choice" => $this->choice,
            'country' => $country_currency[0],
            "currency" => $currency,
            "frequency" => $this->frequency
        ]);
        $response = Http::withToken(env('FLUTTERWAVE_SECRET_KEY'))
        ->post('https://api.flutterwave.com/v3/payments', [
            'tx_ref' => 'cruzaa-tx-' . time(),
            'amount' => $partner['amount'],
            'currency' => $partner['currency'],
            'redirect_url' => route('webhook.flutterwave'),
            'payment_options' => 'card, mobilemoneyghana, ussd',
            'customer' => [
                'email' => $partner['email'],
                'phone_number' => $partner['phone'],
                'name' => $partner['name'],
                'choice' => $partner['choice'],
                'frequency' => $partner['frequency'],
            ],
            'customizations' => [
                'title' => 'Partner with Cruzada International Network',
                'description' => 'Partner to support our cause',
                'logo' => 'https://cruzadanetwork.org/assets/img/favicon.png',
            ],
        ]);

        if ($response->successful()) {
            $dd = $response->json()['data']['link'];
            return redirect($response->json()['data']['link']);
        }

        return back()->withErrors('Unable to initiate payment. Please try again.');
        Mail::to('converts@cruzada.org')->send(new Partners($partner));
        // return redirect()->to('/thank-you');
    }
        public function render()
        {
            return view('livewire.partner-form', [
                'countries' => Country::all(),
            ]);
        }
}
