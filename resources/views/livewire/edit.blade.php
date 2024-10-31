@extends('layouts.app')
@section('content')
    <div class="container py-5">
        <div class="offset-3 col-6 w-full max-w-sm p-4 bg-white border border-gray-200 rounded-lg shadow sm:p-6 md:p-8 dark:bg-gray-800 dark:border-gray-700">
            <a href="/student">
                <button class="btn btn-outline-danger float-end">
                    <i class="bi bi-x-square"></i>
                </button>
            </a>

            <form action="{{url('student/'.$user->id.'/edit')}}" method="POST" class="py-2">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label class="form-label" id="name">Student Name</label>
                    <input value="{{$user->name}}" name="name" class="form-control" type="text">
                    @error('name')
                        <span class="text-danger"><i>{{$message}}</i></span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label" id="admission_no">Student Admission no.</label>
                    <input value="{{$user->admission_no}}" name="admission_no" class="form-control" type="text">
                    @error('admission_no')
                        <span class="text-danger"><i>{{$message}}</i></span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label" id="department">Student Department</label>
                    <input value="{{$user->department}}" name="department" class="form-control" type="text">
                    @error('department')
                        <span class="text-danger"><i>{{$message}}</i></span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label" id="batch_no">Student Batch no.</label>
                    <input value="{{$user->batch_no}}" name="batch_no" class="form-control" type="integer">
                    @error('batch_no')
                        <span class="text-danger"><i>{{$message}}</i></span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label" id="biometric">Student Biometric</label>
                    <input value="{{$user->biometric}}" name="biometric" class="form-control" type="text">
                    @error('biometric')
                        <span class="text-danger"><i>{{$message}}</i></span>
                    @enderror
                </div>
                <div class="modal-footer">

                    <button type="submit" class="btn btn-outline-primary float-end">Update</button>
                </div>
            </form>

        </div>
    </div>
@endsection
