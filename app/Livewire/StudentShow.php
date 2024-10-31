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
//      #[Validate("required|string|min:3")]
    public $name;
    //   #[Validate("required")]
     public $department;
    //   #[Validate("required|unique:students,admission_no")]
     public $admission_no;
    //   #[Validate('required|unique:students,batch_no')]
     public $batch_no;
    //   #[Validate("nullable|unique:students,biometric")]
     public $biometric;
     public $data;

     public $dept;
     public $id;

    //  public function rules(){
    //     return [
    //         'name' => 'required',
    //         'department' => 'required',
    //         'admission_no' => 'required|unique:students,admission_no',
    //         'batch_no' => 'required|unique:students,batch_no',
    //         'biometric' => 'nullable|unique:students,biometric',
    //     ];
    //  }
    public function createstudent(){


        // $validated = $this->validate();
        // Student::create($validated);
        $this->validate([
            'name' => 'required',
            'department' => 'required',
            'admission_no' => 'required|unique:students,admission_no',
            'batch_no' => 'required|unique:students,batch_no',
            'biometric' => 'nullable|unique:students,biometric',
        ]);

        Student::create([
            //  $this->validate([
                'name' => $this->name,
                'department' => $this->department,
                'admission_no' => $this->admission_no,
                'batch_no' => $this->batch_no,
                'biometric' => $this->biometric
            //  ]),

        ]);

        return redirect('/student')->with( session()->flash("success","Registerd succssfully !!"));



        // $this->reset();
        // return redirect('/student')->with( session()->flash("success","Registerd succssfully !!"));
        // $this->reset('name', 'department', 'admission_no', 'batch_no', 'biometric');
        // session()->flash("success", "Registered successfully!!");

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
