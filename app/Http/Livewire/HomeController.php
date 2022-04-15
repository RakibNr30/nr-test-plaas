<?php

namespace App\Http\Livewire;

use Livewire\Component;

class HomeController extends Component
{
    public function index()
    {
        return view('home');
    }
}
