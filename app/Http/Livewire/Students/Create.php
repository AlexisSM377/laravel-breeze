<?php

namespace App\Http\Livewire\Students;

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
    public $calle;
    public $numero;
    public $cp;
    public $estado;
    public $ciudad;
    public $colonia;
    // Informacion de estados y ciudades.
    public $ciudades;
    public $estados;

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
        'calle' => 'required',
        'numero' => 'required',
        'cp' => 'required|size:5',
        'estado' => 'required',
        'ciudad' => 'required',
        'colonia' => 'required',
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

            $imageName = $this->img->store('studens');
            
            // Guardado de informacion personal.
            $studentId = $this->guardarInfoPersonal();
            // Guardado de informacion domicilio.
            // $this->guardarInfoDomicilio($studentId);

            $this->reset();
            $this->emit('saved');

        } catch (\Throwable $th) {
            $this->emit('error');
        }
    }

    public function guardarInfoPersonal(){
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

    public function guardarInfoDomicilio($studentId){
        // Aqui va el codigo para guardar la info del domicilio.
    }
}
