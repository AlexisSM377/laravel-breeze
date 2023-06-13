<?php

namespace App\Http\Livewire\Homes;

use App\Models\home;
use Livewire\Component;
use Livewire\WithFileUploads;

class Create extends Component
{
    use WithFileUploads;

    public $cologne;
    public $cp;
    public $street;
    public $no_ext;
    public $state_id;
    public $city_id;

    protected $rules = [
        'cologne' => 'required',
        'cp' => 'required',
        'street' => 'required',
        'no_ext' => 'required',
        'state_id' => 'required',
        'city_id' => 'required',
    ];

    public function render()
    {
        return view('livewire.homes.create');
    }

    public function store(){

        dd('hola');
        $this->validate();

        try {
            
            $home = new home();
            $home->cologne = $this->colinia;
            $home->cp = $this->cp;
            $home->street = $this->calle;
            $home->state_id = $this->state_id;
            $home->city_id = $this->city_id;

        } catch (\Throwable $th) {
            $this->emit('error');
        }
    }
}
