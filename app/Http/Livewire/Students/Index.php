<?php

namespace App\Http\Livewire\Students;

use App\Models\Student;
use Livewire\Component;



class Index extends Component
{
    public $students;

    public function render()
    {
        $this->students= student::all();
        return view('livewire.students.index');  
    }

    public function delete($id){
        $students = Student::find($id);
        $students->delete();
    }
}
