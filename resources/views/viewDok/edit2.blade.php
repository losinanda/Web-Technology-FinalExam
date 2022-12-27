@extends('viewDok.Main')
@section('container')
<div class="w-full mt-5">
    <p class="text-xl pb-4 flex items-center">
        Edit Data
    </p>
    <div class="bg-white overflow-auto">
        <div>
            <form action="/admin/store_doctor" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="shadow sm:overflow-hidden sm:rounded-md">
                    <div class="space-y-6 bg-white px-4 py-5 sm:p-6">
                        <div class="col-span-6 sm:col-span-4">
                            <label for="doctor_name" class="block text-sm font-medium text-gray-700">Doctor
                                Name</label>
                            <input type="text" name="doctor_name" id="doctor_name"
                                class="mt-1 block w-50 rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                            @error('doctor_name')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="col-span-6 sm:col-span-4">
                            <label for="specialization"
                                class="block text-sm font-medium text-gray-700">Specialization</label>
                            <input type="text" name="specialization" id="specialization"
                                class="mt-1 block w-50 rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                            @error('specialization')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div>
                            <label for="doctor_desc"
                                class="block text-sm font-medium text-gray-700">Description</label>
                            <div class="mt-1">
                                <textarea id="doctor_desc" name="doctor_desc" rows="3"
                                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"></textarea>
                            </div>
                            @error('doctor_desc')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div> 

                        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                            for="image">Upload file</label>
                        <input
                            class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                            id="image" name="image" type="file">

                    </div>
                    <div class="px-4 py-3 text-right sm:px-6">
                        <button type="submit"
                            class="inline-flex justify-center rounded-md border border-transparent bg-[#3d68ff] py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">Save</button>
                    </div>
                </div>
            </form>
            <script src="https://cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script>
            <script>
                CKEDITOR.replace('doctor_desc');
            </script>
        </div>
    </div>
</div>
@endsection