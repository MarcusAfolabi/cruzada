<?php

namespace App\Livewire;

use App\Models\Country;
use Livewire\Component;
use App\Mail\ContactForm;
use Illuminate\Support\Facades\Mail;

class Contact extends Component
{
    public $name;
    public $email;
    public $phone;
    public $country;
    public $countries;
    public $message;


    protected $rules = [
        "name" => "required|max:200|string",
        "email" => "required|email|string",
        "phone" => "required|numeric",
        "country" => "required|string",
        "message" => "sometimes|string|max:255",
    ];

    public function mount()
    {
        $this->countries = Country::all();
    }
    
    public function contactUs()
    {
        $this->validate();
        $contact = ([
            "name" => $this->name,
            "email" => $this->email,
            "phone" => $this->phone,
            "country" => $this->country,
            "message" => $this->message,
        ]);
        Mail::to('converts@cruzada.org')->send(new ContactForm($contact));
        return redirect()->to('/thank-you');
    }
    public function render()
    {
        return view('livewire.contact');
    }
}
