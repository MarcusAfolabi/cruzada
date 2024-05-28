<?php

namespace App\Livewire;

use App\Mail\ConvertSoul;
use App\Models\Country;
use Livewire\Component;
use Illuminate\Support\Facades\Mail;

class SoulForm extends Component
{
    public $name;
    public $phone;
    public $country;
    public $countries;
    public $address;
    public $prayer_request;

   
    public function mount()
    {
        $this->countries = Country::all();
        // dd($this->countries);
    }
    
    protected $rules = [
        "name" => "required|max:200|string",
        "phone" => "required|numeric",
        "country" => "required|string",
        "address" => "required|string",
        "prayer_request" => "sometimes|string|max:255",
    ];

    public function saveSoul()
    {
        $this->validate();
        // $soul = ConvertForm::create([
        $soul = ([
            "name"=> $this->name,
            "phone"=> $this->phone,
            "country"=> $this->country,
            "address"=> $this->address,
            "prayer_request"=> $this->prayer_request
        ]);
        Mail::to('converts@cruzada.org')->send(new ConvertSoul($soul));
        return redirect()->to('/thank-you');
    }
    public function render()
    {
        return view('livewire.convert-form');
    }
}
