<?php

namespace App\Livewire;

use App\Models\Department;
use Livewire\Component;
use App\Models\Student;
// use Livewire\Attributes\Rule;
use Livewire\Attributes\Validate;
use Illuminate\Validation\Rule;
use Livewire\WithPagination;

class StudentShow extends Component
{
    use WithPagination;

    public $name;

     public $department;

     public $admission_no;

     public $batch_no;

     public $biometric;
     public $data;

     public $dept;
     public $id;


    public function createstudent(){

        $this->validate([
            'name' => 'required',
            'department' => 'required',
            'admission_no' => 'required|unique:students,admission_no',
            'batch_no' => 'required|unique:students,batch_no',
            'biometric' => 'nullable|unique:students,biometric',
        ]);

        Student::create([

                'name' => $this->name,
                'department' => $this->department,
                'admission_no' => $this->admission_no,
                'batch_no' => $this->batch_no,
                'biometric' => $this->biometric


        ]);

        return redirect('/student')->with( session()->flash("success","Registerd succssfully !!"));

    }

    public function editstudent(int $id){
        $data = Student::find($id);
        if($data){
            $this->id = $data->id;
            $this->name = $data->name;
            $this->department = $data->department;
            $this->admission_no = $data->admission_no;
            $this->batch_no = $data->batch_no;
            $this->biometric = $data->biometric;
        }else{
            return redirect()->to('/student');
        }
    }

    public function deletestudent(Student $data){
        $data->delete();
        return redirect('student')->with('status','Deleted successfully !!');
    }

    public function updatestudent(){
        $updated = Student::find($this->student->id);
        $updated -> update ([
            'name' => $this->name,
            'department' => $this->department,
            'admission_no' => $this->admission_no,
            'batch_no' => $this->batch_no,
            'biometric' => $this->biometric
        ]);
    }

    public function mount(){
        $this->dept = Department::all();
    }
    public function render()
    {

        $students = Student::paginate(10);
        $dept = Department::all();
        return view('livewire.student-show', compact('students','dept'));

    }
}
