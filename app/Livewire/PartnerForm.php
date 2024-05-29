<?php

namespace App\Livewire;

use App\Mail\Partners;
use App\Models\Country;
use Livewire\Component;
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
        $partner = ([
            "name" => $this->name,
            "phone" => $this->phone,
            "email" => $this->email,
            "amount" => $this->amount,
            "choice" => $this->choice,
            "country" => $this->country,
            "frequency" => $this->frequency
        ]);
        Mail::to('converts@cruzada.org')->send(new Partners($partner));
        return redirect()->to('/thank-you');
    }
        public function render()
        {
            return view('livewire.partner-form', [
                'countries' => Country::all(),
            ]);
        }
}
