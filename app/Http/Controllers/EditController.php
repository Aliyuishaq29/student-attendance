<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class EditController extends Controller
{
    public function edit(int $id){
        $user = Student::findOrFail($id);
        return view('livewire.edit', compact('user'));
    }

    public function update(Request $req,$id){
        $users = Student::findOrFail($id);
        $users->name = $req->name;
        $users->admission_no = $req->admission_no;
        $users->department = $req->department;
        $users->batch_no = $req->batch_no;
        $users->biometric = $req->biometric;

        $updated = $req->all();
        $users->update($updated);

        return redirect('student')->with('success','updated successfull');
    }
}
