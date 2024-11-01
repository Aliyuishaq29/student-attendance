<?php

namespace App\Livewire;

use App\Models\Department;
use App\Models\Record;
use App\Models\Student;
use App\Models\User;
use Livewire\Component;
use Carbon\Carbon;

class Dashboard extends Component
{
    public $student;
    public $users;
    public $department;
    public $count;
    public function mount(){
        $this->student = Student::count();
        $this->users = User::count();
        $this->department = Department::count();

        $this->count = Record::whereDate('created_at', Carbon::today())->count();
    }
    public function render()
    {
        return view('livewire.dashboard',[
            'user'=> User::latest()->get(),
            'student'=> Student::latest()->get(),
            'record'=> Record::latest()->get(),
            'department'=> Department::latest()->get()

        ]);

    }
}
