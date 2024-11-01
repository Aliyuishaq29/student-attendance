<div class="container py-5">

    <div class="offset-3 col-6 w-full max-w-sm p-4 bg-white border border-gray-200 rounded-lg shadow sm:p-6 md:p-8 dark:bg-gray-800 dark:border-gray-700">
        @if (session('success'))
        <div class="alert alert-success">{{session('success')}}</div>
         @endif
        <form role="search">
            <div class="offset-3 col-6 center">
                <input wire:model.live='student_code'  data-bs-toggle="modal" data-bs-target="#exampleModal" class="form-control data-bs-toggle=modal" data-bs-target="#exampleModal" placeholder="Type/Scan Student id" autofocus >
            </div>
        </form>
        <hr>

        @foreach ($users as $user)
            <div class="block mb-2 text-sm font-medium text-gray-900 dark:text-white py-5">
                <div>
                    <h5>Student Name :  {{$user->name}}</h5>
                </div>
                <div class="py-3">
                    <h5>Student Department : {{$user->department}}</h5>
                </div>
                <div class="py-3">
                    <h5>Student Admission no. : {{$user->admission_no}}</h5>
                </div>
                <div class="py-3">
                    <h5>Student Id : {{$user->batch_no}}</h5>
                </div>

            </div>

            <form wire:submit='record({{$user->id}})' >
                <input class="form-control" hidden value="{{$user->name}}" disabled>
                <input class="form-control" hidden value="{{$user->department}}" disabled>
                <input class="form-control" hidden value="{{$user->admission_no}}" disabled>
                <input class="form-control" hidden value="{{$user->batch_no}}" disabled>
                <input class="form-control" value="{{$present}}" hidden disabled>
                <div class="md-4 py-3">
                    <button class="btn btn-outline-dark" type="submit">check-in<i class="bi bi-box-arrow-in-right"></i></button>
                </div>
            </form>
        @endforeach

    </div>
</div>
