<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            List of Students
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-none sm:rounded-lg">
                <div style="padding: 20px">
                    <a href="{{ route('students.create') }}" class="text-white p-2 rounded-lg border"
                        style="background-color: rgb(17, 106, 136)">Create Student
                    </a>

                    <hr class="mt-6 mb-6">

                    <table class="table tablebordered p-2 w-full rounded-lg border">
                        <thead class="bg-gray-100 rounded-lg">
                            <tr>
                                <th class="bg-gray-200 p-2">#</th>
                                <th class="bg-gray-200 text-start p-2">Name</th>
                                <th class="bg-gray-200 text-start p-2">Last Name</th>
                                <th class="bg-gray-200 text-start p-2">Middle Name</th>
                                <th class="bg-gray-200 text-start p-2">Gender</th>
                                <th class="bg-gray-200 text-start p-2">Date of Birth</th>
                                <th class="bg-gray-200 text-start p-2">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($students as $index => $stud)
                            <tr class="border">
                                <td class="p-2 text-center border">{{$index + 1}}.</td>
                                <td class="p-2 border">{{$stud->first_name}}</td>
                                <td class="p-2 border">{{$stud->last_name}}</td>
                                <td class="p-2 border">{{$stud->middle_name}}</td>
                                <td class="p-2 border">{{$stud->gender}}</td>
                                <td class="p-2 border">{{$stud->dob}}</td>
                                <td class="p-2 border">
                                    <button class="p-2 px-2 border rounded-lg" style="background-color: orange; color: #fff">Edit</button>
                                    <button class="p-2 px-2 border rounded-lg" style="background-color: rgb(203, 74, 74); color: #fff">Delete</button>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="7" class="p-4 text-center text-gray-500">No students found</td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
