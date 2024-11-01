
<div class="row g-3">

    <div class="col-md-4">
        <a class="block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">

            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Total register student : {{$student}}</h5>

            </a>
    </div>
    <div class="col-md-4">
        <a class="block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">

            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Total department : {{$department}}</h5>
        </a>
    </div>
        <div class="col-md-4">
            <a  class="block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">

                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Total users : {{$users}}</h5>

                </a>
        </div>


</div>
<div class="col-md-4 py-3">
    <a class="block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">

        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Total attendance for today: {{$count}}</h5>

        </a>
</div>

<div class="py-4">
    <div class="grid mb-8 border border-gray-200 rounded-lg shadow-sm dark:border-gray-700 md:mb-12 md:grid-cols-2 bg-white dark:bg-gray-800">
        <figure class="flex flex-col items-center justify-center p-8 text-center bg-white border-b border-gray-200 rounded-t-lg md:rounded-t-none md:rounded-ss-lg md:border-e dark:bg-gray-800 dark:border-gray-700">
            <blockquote class="max-w-2xl mx-auto mb-4 text-gray-500 lg:mb-8 dark:text-gray-400">
                <h3 class="text-lg font-semibold text-gray-900 dark:text-white">STUDENT TABLE</h3>
            </blockquote>
            <figcaption class="flex items-center justify-center ">


                <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th scope="col" class="px-6 py-3">
                                    Name
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Department
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Admission no.
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Id
                                </th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($record as $students)


                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    {{$students->name}}
                                </th>
                                <td class="px-6 py-4">
                                    {{$students->department}}
                                </td>
                                <td class="px-6 py-4">
                                    {{$students->admission_no}}
                                </td>
                                <td class="px-6 py-4">
                                    {{$students->batch_no}}
                                </td>
                            </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>

            </figcaption>
        </figure>
        <figure class="flex flex-col items-center justify-center p-8 text-center bg-white border-b border-gray-200 md:rounded-se-lg dark:bg-gray-800 dark:border-gray-700">

            <blockquote class="max-w-2xl mx-auto mb-4 text-gray-500 lg:mb-8 dark:text-gray-400">
                <h3 class="text-lg font-semibold text-gray-900 dark:text-white">ADMIN TABLE</h3>
            </blockquote>

            <figcaption class="flex items-center justify-center ">
                <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th scope="col" class="px-6 py-3">
                                   #
                                 </th>
                                <th scope="col" class="px-6 py-3">
                                   Admin Name
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Admin Email
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($user as $users)


                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    {{$loop->iteration}}
                                </th>
                                <td class="px-6 py-4">
                                    {{$users->name}}
                                </th>
                                <td class="px-6 py-4">
                                    {{$users->email}}
                                </td>

                            </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>

            </figcaption>
        </figure>

    </div>
</div>
