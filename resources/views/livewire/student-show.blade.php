@extends('layouts.app')
@section('content')
@include('livewire.modal')
<div>
    <div class="container">
        @if (session('status'))
        <div class="alert alert-success">{{session('status')}}</div>
        @endif
        @if (session('success'))
        <div class="alert alert-success">{{session('success')}}</div>
        @endif
        <form wire:submit.prevent='createstudent' class="row g-3">
            <div class="col-md-3">
              <label class="form-label">Name</label>
              <input wire:model='name' type="text" class="form-control" placeholder="student name">
              @error ('name')<span class="text-danger"><i>{{$message}}</i></span> @enderror
            </div>
            <div class="col-md-2">
                <label class="form-label">Department</label>
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
              <label class="form-label">Admission no.</label>
              <input wire:model='admission_no' type="text" class="form-control" placeholder="admission number">
              @error ('admission_no')<span class="text-danger"><i>{{$message}}</i></span> @enderror
            </div>
            <div class="col-2">
              <label class="form-label">Student id</label>
              <input wire:model='batch_no' type="integer" class="form-control" placeholder="student id">
              @error ('batch_no')<span class="text-danger"><i>{{$message}}</i></span> @enderror
            </div>

            <div class="col-md-2">
              <label class="form-label">Biometric</label>
              <input wire:model='biometric' type="text" class="form-control" placeholder="Biometric optional">
              @error ('biometric')<span class="text-danger"><i>{{$message}}</i></span> @enderror
            </div>
            <div class="col-12">
              <button class="btn btn-outline-light">Create</button>
            </div>
          </form>

          <hr>
        <table class="table caption-top">
        <caption>List of users</caption>
        {{-- <button type="button" class="btn btn-outline-secondary float-end" data-bs-toggle="modal" data-bs-target="#studentModal">
            Add new Student
        </button> --}}
        {{-- <form class="d-flex" role="search">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
        </form> --}}
        <thead>
        <tr>
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
                            <i class="bi bi-pencil-square"></i>
                        </a>
                        <a wire:click='deletestudent({{$user->id}})'>
                            <i class="bi bi-trash"></i>
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
