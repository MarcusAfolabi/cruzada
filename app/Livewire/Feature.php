<?php

namespace App\Livewire;

use Livewire\Component;

class Feature extends Component
{
    public $features = [];
    public function mount()
    {
        $this->features = [
            ["caption" => "Preach the Goodnews", "content" => "To Witness for Christ and Teach Christian Doctrine in all Nations", "icon" => "assets/img/icon/service-icon-1.svg", "Image" => "assets/img/images/th-2/11.png"],
            ["caption" => "Share the Bible", "content" => "To Distribute Scriptures to all Nations of the World", "icon" => "assets/img/icon/service-icon-1.svg", "Image" => "assets/img/images/th-2/17.jpg"],
            ["caption" => "The Church Planting", "content" => "To expand the kingdom of God through planting of new, reproducing and disciple making churches", "icon" => "assets/img/icon/service-icon-1.svg", "Image" => "assets/img/images/th-2/16.jpg"],
            ["caption" => "Less Privileged Provisions", "content" => "To render assistance to the less privileged by provision of aids and funds", "icon" => "assets/img/icon/service-icon-1.svg", "Image" => "assets/img/images/th-2/13.jpg"],
            ["caption" => "Finance Start-ups", "content" => "To assist small scale businesses start-ups by providing finance to realize their potentials", "icon" => "assets/img/icon/service-icon-1.svg", "Image" => "assets/img/images/th-2/9.png"],
            ["caption" => "Discovery Events", "content" => "To organize seminars, activities, forums and vocational training that will empower young people to fulfil their destinies", "icon" => "assets/img/icon/service-icon-1.svg", "Image" => "assets/img/images/th-2/12.jpg"],
            ["caption" => "Enrich the Poor", "content" => "To eradicate poverty", "icon" => "assets/img/icon/service-icon-1.svg", "Image" => "assets/img/images/th-2/10.png"],
        ];
    }
    public function render()
    {
        return view('livewire.feature');
    }
}
