<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Add New Student
        </h2>
    </x-slot>

    <div></div>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-none sm:rounded-lg">
                <div style="padding: 20px">
                    <h1 class="text-2xl"><strong>Add New Student</strong></h1>
                    <p>You Can Create a New Student Here:</p>
                    <hr class="mt-6 mb-6">

                    @if(session('success'))
                    <div class="border-green-600 p-5" style="color: green">
                        <strong>Success:</strong> {{ session('success') }}
                    </div>
                    <br>
                    @endif

                    @if($errors->any())
                    <div class="border-red-600 p-5" style="color: red">
                        <strong>Errors:</strong>
                        <ul>
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    <br>
                    @endif


                    <form action="{{ route('students.store') }}" method="post">
                        @csrf
                        <div>
                            <label for="first_name">First Name :</label>
                            <input id="first_name" name="first_name" type="text" class="mt-3 border-gray-300 rounded-lg shadow-sm w-full"
                            placeholder="First Name Here">
                        </div>

                        <div class="mt-4">
                            <label for="last_name">Last Name :</label>
                            <input id="last_name" name="last_name" type="text" class="mt-3 border-gray-300 rounded-lg shadow-sm w-full"
                            placeholder="Last Name Here">
                        </div>

                        <div class="mt-4">
                            <label for="middle_name">Middle Name :</label>
                            <input id="middle_name" name="middle_name" type="text" class="mt-3 border-gray-300 rounded-lg shadow-sm w-full"
                            placeholder="Middle Name Here">
                        </div>

                         <div class="mt-4">
                            <label for="gender"> Gender :</label>
                            <select id="gender" name="gender" class="mt-3 border-gray-300 rounded-lg shadow-sm w-full">
                                <option value="">Select Gender</option>
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                                <option value="other">Other</option>
                            </select>
                        </div>

                         <div class="mt-4">
                            <label for="dob">DATE OF BIRTH :</label>
                            <input id="dob" type="date" name="dob" class="mt-3 border-gray-300 rounded-lg shadow-sm w-full"
                            placeholder="Date of Birth Here">
                        </div>

                        <div class="mt-4">
                            <label for="age">AGE :</label>
                            <input id="age" type="number" name="age" class="mt-3 border-gray-300 rounded-lg shadow-sm w-full"
                            placeholder="Age Here">
                        </div>
                        <hr class="mt-6 mb-6">
                        <button type="reset" class="border shadow-md rounded-lg  text-white "
                        style="background-color: #d4441d; padding: 8px; ">Reset</button>
                        <button type="submit" class="border shadow-md rounded-lg  text-white "
                        style="background-color: #387dd1; padding: 8px; ">Create</button>

                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
