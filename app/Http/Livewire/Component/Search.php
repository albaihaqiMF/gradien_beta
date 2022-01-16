<?php

namespace App\Http\Livewire\Component;

use Livewire\Component;

class Search extends Component
{
    public $search;
    public function render()
    {
        return view('livewire.component.search');
    }
}
