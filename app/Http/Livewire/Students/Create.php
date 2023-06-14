<?php

namespace App\Http\Livewire\Students;

use App\Models\home;
use App\Models\student;
use Livewire\Component;
use Livewire\WithFileUploads;

class Create extends Component
{
    use WithFileUploads;

    // Informacion personal
    public $name;
    public $lasnamep;
    public $lasnamem;
    public $img;
    public $email;
    public $phone;
    public $birthdate;
    public $gender;
    public $curp;
    // Informacion de domicilio
    public $street;
    public $no_ext;
    public $cp;
    public $state_id;
    public $city_id;
    public $cologne;
    // Informacion de estados y ciudades.
    public $citys;
    public $states;

    protected $rules = [
        'name' => 'required',
        'lasnamep' => 'required',
        'lasnamem' => 'required',
        'img' => 'image|required|max:2048',
        'email' => 'required|email',
        'phone' => 'required|size:10',
        'birthdate' => 'required|date',
        'gender' => 'required',
        'curp' => 'required',
        // Validacion de datos de domicilio
        'street' => 'required',
        'no_ext' => 'required',
        'cp' => 'required|size:5',
        'state_id' => 'required',
        'city_id' => 'required',
        'cologne' => 'required',
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    // public function mount(){
    //     // Consultar estados.
    // }

    public function render()
    {
        return view('livewire.students.create');
    }

    public function store()
    {
        $this->validate();

        try {
            //Guardado de imagen
            $imageName = $this->img->store('studens');

            // Guardado de informacion personal.
            $studentId = $this->guardarInfoPersonal();
            // Guardado de informacion domicilio.
            $this->guardarInfoDomicilio($studentId);

            $this->reset();
            $this->emit('saved');
        } catch (\Throwable $th) {
            $this->emit('error');
        }
    }

    public function guardarInfoPersonal()
    {
        $student = new student();
        $student->name = $this->nombre;
        $student->lasnamep = $this->apellidom;
        $student->lasnamem = $this->apellidop;
        // $student->img = $imageName;
        $student->email = $this->correo;
        $student->phone = $this->telefono;
        $student->birthdate = $this->nacimiento;
        $student->gender = $this->genero;
        $student->curp = $this->curp;
        $student->save();

        return $student->id;
    }

    public function guardarInfoDomicilio($studentId)
    {
        // Aqui va el codigo para guardar la info del domicilio.

        try {
            $home = new home();
            $home->cologne = $this->colinia;
            $home->no_ext = $this->numero;
            $home->cp = $this->cp;
            $home->street = $this->calle;
            $home->state_id = $this->state_id;
            $home->city_id = $this->city_id;
        } catch (\Throwable $th) {
            $this->emit('error');
        }
    }
}
