<?php

namespace App\Livewire;

use App\Mail\Donations;
use App\Models\Country;
use Livewire\Component;
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
        // $soul = ConvertForm::create([
        $donate = ([
            "name" => $this->name,
            "email" => $this->email,
            "phone" => $this->phone,
            "amount" => $this->amount,
            "country" => $this->country,
        ]);
        Mail::to('converts@cruzada.org')->send(new Donations($donate));
        return redirect()->to('/thank-you');
    }
    public function render()
    {
        return view('livewire.donate-form', [
            'countries' => Country::all(),
        ]);
    }
}
