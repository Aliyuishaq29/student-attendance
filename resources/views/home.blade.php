@extends('layouts.app')

@section('content')
<div class="container">
    @include('layouts.include.sidebar')
    <div class="row justify-content-center">
        <div class="col-md-10">
            {{-- @include('layouts.include.card')
            <div class="py-2">
            <div class="card">
                {{-- <div class="card-header">{{ __('Dashboard') }}</div> --}}
                {{-- @include('livewire.student-show') --}}

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
