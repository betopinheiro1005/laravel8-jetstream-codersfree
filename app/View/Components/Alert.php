<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Alert extends Component
{

    public $color;

    public function __construct($color="orange")
    {
        $this->color = $color;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.alert');
    }

    public function teste(){
        if($this->color == "red"){
            return "Este é um alerta de perigo!";
        }
    }
}
