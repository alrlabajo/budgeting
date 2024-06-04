<?php

namespace App\Livewire;

use Livewire\Component;

class BackButton extends Component
{
    public function render()
    {
        return view('components.back-button');
        // return view('livewire.capital-outlay-form');
    }

    public function goBack()
    {
        return redirect()->to('/home');
    }



}
