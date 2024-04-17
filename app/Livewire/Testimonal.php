<?php

namespace App\Livewire;

use Livewire\Component;

class Testimonal extends Component
{
    public $testimony = [];
    public function mount()
    {
        $this->testimony = [
            ["name"=> "Elizabeth","content"=> "This is the begining", "role" => "Wife Engineer"],
            ["name"=> "Marcus","content"=> "This is the begining", "role" => "Husband Engineer"],
            ["name"=> "Precious","content"=> "This is the begining", "role" => "First Daughter Engineer"],
            ["name"=> "Treasure","content"=> "This is the begining", "role" => "Last Daughter Engineer"],
        ];
    }
    public function render()
    {
        return view('livewire.testimonal');
    }
}
