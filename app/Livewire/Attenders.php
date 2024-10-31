<?php

namespace App\Livewire;

use App\Models\Record;
use App\Models\Student;
use Livewire\Component;

class Attenders extends Component
{
    public $student_id;

    public $student_code;
    public $name;
     public $department;
     public $admission_no;
     public $batch_no;
     public $data;
     public $id;
     public $present = 1;

     public function mount(){
        $this->data = Student::all();
     }
    public function record(int $id){
        $data = Student::find($id);
        Record::create([
            'name' => $data->name,
            'department' => $data->department,
            'admission_no' => $data->admission_no,
            'batch_no' => $data->batch_no,
            'status' => $this->present

        ]);
        return redirect('/')->with( session()->flash("success","Registerd succssfully !!"));
    }

    public function render()
    {
        $results = [];

        if(strlen($this->student_code) >= 1){
            $results = Student::where('batch_no','like', $this->student_code)->get();
        }
        return view('livewire.attenders',[
            'users' => $results
        ]);
    }
}
