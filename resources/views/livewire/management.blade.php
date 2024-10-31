@extends('layouts.app')
@section('content')

    <div>
       <div class="container ">
        <div class="card" style="width: 550px">
            <div class="card-body">
            <form wire:submit='department' class="row g-3">
                @csrf

                <div class="col-md-5">
                    {{-- <label class="form-label">Enter new department</label> --}}
                    <input wire:model='department_name' type="text" class="form-control" placeholder="create new department">
                    @error ('department_name')<span class="text-danger"><i>{{$message}}</i></span> @enderror
                </div>
                <div class="col-md-5">
                    {{-- <label class="form-label">Enter department code</label> --}}
                    <input wire:model='department_code' type="text" class="form-control" placeholder="department code">
                    @error ('department_code')<span class="text-danger"><i>{{$message}}</i></span> @enderror
                </div>
                <div class="col-12">
                    <button type="submit" class="btn btn-outline-secondary" >Create</button>
                </div>
            </form>
       </div>
    </div>

@endsection
