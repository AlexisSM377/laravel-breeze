<?php

namespace App\Http\Livewire\Students;

use App\Models\City;
use App\Models\Home;
use App\Models\State;
use App\Models\Student;
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
    public $stateId;
    public $city_id;
    public $cologne;
    // Informacion de estados y ciudades.
    public $cities = [];
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
        'stateId' => 'required',
        'city_id' => 'required',
        'cologne' => 'required',
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function mount()
    {
        $this->states = State::all();
    }

    public function render()
    {
        return view('livewire.students.create');
    }

    public function updatedStateId()
    {
        $this->cities = City::where('state_id', $this->stateId)->get();
    }

    public function store()
    {
        $this->validate();

        try {
            //Guardado de imagen
            $imageName = $this->img->store('students', 'public');

            // Guardado de informacion personal.
            $studentId = $this->guardarInfoPersonal($imageName);
            // Guardado de informacion domicilio.
            $this->guardarInfoDomicilio($studentId);

            return redirect()->to('/dashboard');

            $this->emit('saved');
        } catch (\Throwable $th) {
            $this->emit('error');
        }
    }

    public function guardarInfoPersonal($imageName)
    {
        $student = new Student();
        $student->name = $this->name;
        $student->lastname_p = $this->lasnamep;
        $student->lastname_m = $this->lasnamem;
        $student->img = $imageName;
        $student->email = $this->email;
        $student->phone = $this->phone;
        $student->birthdate = $this->birthdate;
        $student->gender = $this->gender;
        $student->curp = $this->curp;
        $student->save();

        return $student->id;
    }

    public function guardarInfoDomicilio($studentId)
    {
        // Aqui va el codigo para guardar la info del domicilio

        $home = new Home();
        $home->cologne = $this->cologne;
        $home->no_ext = $this->no_ext;
        $home->cp = $this->cp;
        $home->street = $this->street;
        $home->state_id = $this->stateId;
        $home->city_id = $this->city_id;
        $home->student_id = $studentId;
        $home->save();
    }
}
