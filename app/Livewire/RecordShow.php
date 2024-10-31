<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Record;

class RecordShow extends Component
{
    public $filteruser;
    public $users;

    public function mount(){
        $this->users = Record::all();
    }


    public function render()
    {
        $results = [];

        if(strlen($this->filteruser)>=1){
            $results = Record::where('name','like','%'.$this->filteruser.'%')->get();
        }
        $users = Record::all();
        return view('livewire.record',[
            'users' =>Record::all(),
            'user' => $results
        ]);
    }
    // compact('users')
}
