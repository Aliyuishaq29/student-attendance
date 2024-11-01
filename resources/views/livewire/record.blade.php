@extends('layouts.app')
@section('content')
<div class="container">
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        <div class="row space-evenly py-2">
        </div>
        </div>
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400 py-5">
            <thead class="text-lg text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-2">
                        #
                    </th>
                    <th scope="col" class="px-6 py-2">
                        student name
                    </th>
                    <th scope="col" class="px-6 py-3">
                        department
                    </th>
                    <th scope="col" class="px-6 py-2">
                        admission no.
                    </th>
                    <th scope="col" class="px-6 py-2">
                        student id
                    </th>
                    <th scope="col" class="px-6 py-2">
                        Status
                    </th>
                    <th scope="col" class="px-6 py-2">
                        Time
                    </th>
                </tr>
            </thead>
            <tbody class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                @foreach ($users as $user)


                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">

                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        {{$user->id}}
                    </th>
                    <td class="px-6 py-4">
                        {{$user->name}}
                    </td>
                    <td class="px-6 py-4">
                        {{$user->department}}
                    </td>
                    <td class="px-6 py-4">
                        {{$user->admission_no}}
                    </td>
                    <td class="px-6 py-4">
                        {{$user->batch_no}}
                    </td>
                    <td class="px-6 py-4">
                        @if ($user->status == 0)
                        <span class="badge bg-danger">Absent</span>
                        @else
                        <span class="badge bg-success">Present</span>

                        @endif
                    </td>
                    <td class="px-6 py-4">
                        {{$user->created_at}}
                    </td>
                </tr>

                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection






