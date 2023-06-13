<?php

namespace App\Http\Livewire\Students;

use App\Models\student;
use Livewire\Component;
use Livewire\WithFileUploads;

class Create extends Component
{
    use WithFileUploads;

    public $name;
    public $lasnamep;
    public $lasnamem;
    public $img;
    public $email;
    public $phone;
    public $birthdate;
    public $gender;
    public $curp;
    public $identificador;


    public function mount(){
        $this->identificador = rand();
    }

    protected $rules = [
        'name' => 'required',
        'lasnamep' => 'required',
        'lasnamem' => 'required',
        'img' => 'image|required|max:2048',
        'email' => 'required|email',
        'phone' => 'required|min:10',
        'birthdate' => 'required|date',
        'gender' => 'required',
        'curp' => 'required',
    ];
 
    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }
    

    public function render()
    {
        return view('livewire.students.create');
    }

    public function store()
    {
        dd('EHOLAAAAAAAAA');
        $this->validate();

        try {

            $imageName = $this->img->store('studens');
            $student = new student();
            $student->name = $this->nombre;
            $student->lasnamep = $this->apellidom;
            $student->lasnamem = $this->apellidop;
            $student->img = $imageName;
            $student->email = $this->correo;
            $student->phone = $this->telefono;
            $student->birthdate = $this->nacimiento;
            $student->gender = $this->genero;
            $student->curp = $this->curp;
            $student->save();

            $this->reset();
            $this->identificador = rand();
            $this->emit('saved');

        } catch (\Throwable $th) {
            $this->emit('error');
        }
    }
}
