<?php

namespace App\Livewire\Blog;

use Livewire\Component;

class Index extends Component
{
    public $blogs = [];
    public function mount()
    {
        $this->blogs = [
            ["id" => "1", "title" => "How can you choose an a that is a for better option", "date" => "23 Jan 2024",],
            ["id" => "2", "title" => "Find out your best policy for that your best reasons", "date" => "24 Jan 2024",],
            ["id" => "3", "title" => "Find out your best policy for that your best reasons", "date" => "25 Jan 2024",],
        ];
    }
    public function render()
    {
        return view('livewire.blog.index');
    }
}
