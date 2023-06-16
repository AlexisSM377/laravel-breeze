<?php

namespace App\Http\Livewire\Students;

use App\Models\City;
use App\Models\State;
use App\Models\Student;
use Livewire\Component;
use Livewire\WithFileUploads;

class Edit extends Component
{
    use WithFileUploads;

    // public $slug;
    public $estudianteactual;

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

    public function mount($slug)
    {
        $this->states = State::all();
        $this->cities = City::all();
        $this->estudianteactual = Student::find($slug);
        $this->cargarInformacion();
    }

    public function render()
    {
        return view('livewire.students.edit');
    }

    public function updatedStateId()
    {
        $this->cities = City::where('state_id', $this->stateId)->get();
    }

    public function cargarInformacion(){

        $this->name=$this->estudianteactual->name;
        $this->lasnamep=$this->estudianteactual->lastname_p;
        $this->lasnamem=$this->estudianteactual->lastname_m;
        // $this->img=$this->estudianteactual->img;
        $this->email=$this->estudianteactual->email;
        $this->phone=$this->estudianteactual->phone;
        $this->birthdate=$this->estudianteactual->birthdate;
        $this->gender=$this->estudianteactual->gender;
        $this->curp=$this->estudianteactual->curp;
        //domicilio
        $this->street=$this->estudianteactual->home->street;
        $this->no_ext=$this->estudianteactual->home->no_ext;
        $this->cp=$this->estudianteactual->home->cp;
        $this->stateId=$this->estudianteactual->home->state_id;
        $this->city_id=$this->estudianteactual->home->city_id;
        $this->cologne=$this->estudianteactual->home->cologne;
       
    }

    public function update(){
        
        if ($this->img!=null) {
            $imageName = $this->img->store('students', 'public');
            $this->estudianteactual->img = $imageName;
        }
        
        $this->estudianteactual->name=$this->name;
        $this->estudianteactual->lastname_p= $this->lasnamep;
        $this->estudianteactual->lastname_m= $this->lasnamem;
        $this->estudianteactual->email=$this->email;
        $this->estudianteactual->phone =$this->phone;
        $this->estudianteactual->birthdate=$this->birthdate;
        $this->estudianteactual->gender=$this->gender;
        $this->estudianteactual->curp=$this->curp;
        //domicilio
        $this->estudianteactual->home->street=$this->street;
        $this->estudianteactual->home->no_ext=$this->no_ext;
        $this->estudianteactual->home->cp=$this->cp;
        $this->estudianteactual->home->state_id=$this->stateId;
        $this->estudianteactual->home->city_id =$this->city_id;
        $this->estudianteactual->home->cologne=$this->cologne;
        $this->estudianteactual->update();
        $this->estudianteactual->home->update();
        
        // return back()->with('status', 'estudiante-actualizado');
        $this->emit('actualizado');
        
    }
}
