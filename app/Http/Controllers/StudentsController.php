<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\Home;
use App\Models\State;
use App\Models\Student;
use Illuminate\Http\Request;
use Livewire\WithFileUploads;

class StudentsController extends Controller
{
    use WithFileUploads;

    public function index()
    {
        $students = Student::all();
        return view('students.index', compact('students'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $states = State::all();
        $cities = City::all();
        return view('students.create', compact('states', 'cities'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'lasnamep' => 'required',
            'lasnamem' => 'required',
            'img' => 'image|required|max:2048',
            'email' => 'required|email|unique:students,email',
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
        ]);

        //Guardado de imagen
        $imageName = $request->img->store('students', 'public');

        // Guardado de informacion personal.
        $student = new Student();
        $student->name = $request->nombre;
        $student->lastname_p = $request->lasnamep;
        $student->lastname_m = $request->lasnamem;
        $student->img = $imageName;
        $student->email = $request->email;
        $student->phone = $request->phone;
        $student->birthdate = $request->birthdate;
        $student->gender = $request->gender;
        $student->curp = $request->curp;
        $student->save();

        // Guardado de informacion domicilio.
        $home = new Home();
        $home->cologne = $request->cologne;
        $home->no_ext = $request->no_ext;
        $home->cp = $request->cp;
        $home->street = $request->street;
        $home->state_id = $request->stateId;
        $home->city_id = $request->city_id;
        $home->student_id = $student->id;
        $home->save();

        return redirect()->to('/dashboard');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $student = Student::find($id);
        $states = State::all();
        $cities = City::where('state_id', $student->home->state_id)->get();
        // dd($cities);
        // $cities = City::all();

        return view('students.edit', compact('student', 'states', 'cities'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nombre' => 'required',
            'lasnamep' => 'required',
            'lasnamem' => 'required',
            'img' => 'image|max:2048',
            'email' => 'required|email|unique:students,email,' . $id,
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
        ]);

        $estudianteactual = Student::find($id);
        //Guardado de imagen
        if ($request->file('img') != null) {
            $imageName = $request->img->store('students', 'public');
            $estudianteactual->img = $imageName;
        }
        
        

        $estudianteactual->name = $request->nombre;
        $estudianteactual->lastname_p = $request->lasnamep;
        $estudianteactual->lastname_m = $request->lasnamem;
        $estudianteactual->email = $request->email;
        $estudianteactual->phone = $request->phone;
        $estudianteactual->birthdate = $request->birthdate;
        $estudianteactual->gender = $request->gender;
        $estudianteactual->curp = $request->curp;
        //domicilio
        $estudianteactual->home->street = $request->street;
        $estudianteactual->home->no_ext = $request->no_ext;
        $estudianteactual->home->cp = $request->cp;
        $estudianteactual->home->state_id = $request->stateId;
        $estudianteactual->home->city_id = $request->city_id;
        $estudianteactual->home->cologne = $request->cologne;
        $estudianteactual->update();
        $estudianteactual->home->update();
        return back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $students = Student::find($id);
        $students->delete();
        return back();
    }

    public function obtenerMunicipios($id)
    {
        $municipios = City::where('state_id', $id)->get();
        return response()->json($municipios);
    }
}
