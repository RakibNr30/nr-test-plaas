<?php

namespace App\Http\Livewire;

use Illuminate\Http\Request;
use Livewire\Component;

class UserController extends Component
{
    public function index()
    {
        return view('livewire.user.index');
    }

    public function store(Request $request, $id)
    {
        //
    }

    public function show($id)
    {
        return view('livewire.user.show');
    }

    public function edit($id)
    {
        return view('livewire.user.edit');
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
