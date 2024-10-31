<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Department;
use Livewire\Attributes\Rule;
class Management extends Component
{
    #[Rule('required|unique:departments')]
    public $department_name;
    #[Rule('required|unique:departments')]
    public $department_code;
    public function department(){

        $validated = $this->validate();
        // Department::create([
        //     'department_name' => $this->department_name,
        //     'department_code' => $this->department_code,
        // ]);
        Department::create($validated);

        return redirect('/management')->with( session()->flash("success","Added succssfully !!"));
    }

    public function render()
    {
        return view('livewire.management');
    }
}
