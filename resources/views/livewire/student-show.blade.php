@extends('layouts.app')
@section('content')
@include('livewire.modal')
<div>
    <div class="container">
        <h1 class="text-white">Create New Student</h1>
        <hr class="text-white">
        @if (session('status'))
        <div class="alert alert-success">{{session('status')}}</div>
        @endif
        @if (session('success'))
        <div class="alert alert-success">{{session('success')}}</div>
        @endif
        <form wire:submit.prevent='createstudent' class="row g-3 py-2">
            <div class="col-md-3">
              <label class="form-label text-white">Name</label>
              <input wire:model='name' type="text" class="form-control" placeholder="student name">
              @error ('name')<span class="text-danger"><i>{{$message}}</i></span> @enderror
            </div>
            <div class="col-md-2">
                <label class="form-label text-white">Department</label>
                <select wire:model='department' class="form-select">
                  <option value ="">select dept...</option>
                    @foreach ($dept as $data)
                        <option value="{{$data->department_name}}">
                            {{$data->department_name}}
                        </option>
                    @endforeach
                </select>
                @error ('department')<span class="text-danger"><i>{{$message}}</i></span> @enderror
              </div>
            <div class="col-md-3">
              <label class="form-label text-white">Admission no.</label>
              <input wire:model='admission_no' type="text" class="form-control" placeholder="admission number">
              @error ('admission_no')<span class="text-danger"><i>{{$message}}</i></span> @enderror
            </div>
            <div class="col-2">
              <label class="form-label text-white">Student id</label>
              <input wire:model='batch_no' type="integer" class="form-control" placeholder="student id">
              @error ('batch_no')<span class="text-danger"><i>{{$message}}</i></span> @enderror
            </div>

            <div class="col-md-2">
              <label class="form-label text-white">Biometric</label>
              <input wire:model='biometric' type="text" class="form-control" placeholder="Biometric optional">
              @error ('biometric')<span class="text-danger"><i>{{$message}}</i></span> @enderror
            </div>
            <div class="col-12">
              <button class="btn btn-outline-light">Create</button>
            </div>
          </form>

          <hr>
        <table class="table caption-top">
        <caption class="text-white">List of Student</caption>

            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Department</th>
            <th scope="col">Admission no.</th>
            <th scope="col">Batch no.</th>
            <th scope="col">Biometric</th>
            <th scope="col">Registerd Date</th>
            <th scope="col">Handle</th>
        </tr>
        </thead>
        <tbody>
            @foreach ($students as $user)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    {{-- <td>{{$user->id}}</td> --}}
                    <td>{{$user->name}}</td>
                    <td>{{$user->department}}</td>
                    <td>{{$user->admission_no}}</td>
                    <td>{{$user->batch_no}}</td>
                    <td>{{$user->biometric}}</td>
                    <td>{{$user->created_at}}</td>
                    <td>
                        <a href="{{url('student/'.$user->id.'/edit')}}" wire:click='editstudent({{$user->id}})'>
                            <button class="btn btn-outline-success">
                                <i class="bi bi-pencil-square"></i>
                            </button>

                        </a>
                        <a wire:click='deletestudent({{$user->id}})'>
                            <button class="btn btn-outline-danger">
                                <i class="bi bi-trash"></i>
                            </button>

                        </a>
                    </td>
                </tr>
            @endforeach

        </tbody>
    </table>
    </div>
    {{ $students->links('pagination::bootstrap-5') }}
</div>
@endsection
