<x-backpage>
    <div class="w-full">
        <p class="text-xl pb-4 flex items-center">
            Edit Doctor Data
        </p>
        <div class="overflow-auto">
            <form action="{{ route('admin_updatedoctor', ['id' => $d->id_doctor]) }}" method="POST"
                enctype="multipart/form-data">
                @csrf
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-4 lg:gap-4 grid-flow-row grid-">
                    <div class="sm:overflow-hidden sm:rounded-md">
                        <div class="space-y-6 bg-white px-4 py-5 sm:p-6">
                            <div class="text-xl flex items-center border-b-2">
                                Basic Information
                            </div>
                            <div class="col-span-6 sm:col-span-4">
                                <label for="doctor_name" class="block text-sm font-medium text-gray-700">Doctor
                                    Name</label>
                                <input type="text" name="doctor_name" id="doctor_name" value="{{ $d->doctor_name }}"
                                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                                {{-- @error('doctor_name')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror --}}
                            </div>
                            <div class="col-span-6 sm:col-span-4">
                                <label for="phone_num" class="block text-sm font-medium text-gray-700">Phone
                                    Number</label>
                                <input type="text" name="phone_num" id="phone_num" value="{{ $d->phone_num }}"
                                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                            </div>
                            <div class="col-span-6 sm:col-span-4">
                                <label for="address" class="block text-sm font-medium text-gray-700">Address</label>
                                <input type="text" name="address" id="address" value="{{ $d->address }}"
                                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                            </div>
                            {{-- <div class="col-span-6 sm:col-span-4">
                                <label for="address" class="block text-sm font-medium text-gray-700">Address</label>
                                <input type="text" name="address" id="address" value="{{ $d->address }}"
                                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                            </div> --}}
                            {{-- <div class="col-span-6 sm:col-span-4">
                                <label class="block text-sm font-medium text-gray-700">Description</label>
                                <div class="mt-1 block w-full rounded-md border-gray-600 shadow-sm sm:text-sm">
                                    {!! $d->doctor_desc !!}
                                </div>
                            </div> --}}
                            <div>
                                <label for="doctor_desc" class="block text-sm font-medium text-gray-700">Edit
                                    Description</label>
                                <div class="mt-1">
                                    <textarea id="doctor_desc" name="doctor_desc" rows="3"
                                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="sm:overflow-hidden sm:rounded-md">
                        <div class="space-y-6 bg-white px-4 py-5 sm:p-6">
                            <div class="text-xl flex items-center border-b-2">
                                Additional Information
                            </div>
                            <div class="col-span-6 sm:col-span-4">
                                <label for="education" class="block text-sm font-medium text-gray-700">Latest
                                    Education</label>
                                <input type="text" name="education" id="education" value="{{ $d->education }}"
                                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                            </div>
                            <div class="col-span-6 sm:col-span-4">
                                <label for="university"
                                    class="block text-sm font-medium text-gray-700">University</label>
                                <input type="text" name="university" id="university" value="{{ $d->university }}"
                                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                            </div>
                            {{-- <div class="col-span-6 sm:col-span-4">
                                <label for="specialization"
                                    class="block text-sm font-medium text-gray-700">Specialization</label>
                                <input type="text" name="specialization" id="specialization"
                                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                            </div> --}}
                            <div class="col-span-6 sm:col-span-4">
                                <label for="specialization"
                                    class="block text-sm font-medium text-gray-700">Specialization</label>
                                <select name="specialization" id="specialization"
                                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                                    @foreach ($s as $sp)
                                        @if ($sp->name_specialization == $d->test1->name_specialization)
                                            <option value="{{ $sp->id_specialization }}" selected>
                                                {{ $sp->name_specialization }}</option>
                                        @else
                                            <option value="{{ $sp->id_specialization }}">{{ $sp->name_specialization }}
                                            </option>
                                        @endif
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-span-6 sm:col-span-4">
                                <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                                <input type="email" name="email" id="email" value="{{ $d->email }}"
                                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                            </div>
                            <div class="col-span-6 sm:col-span-4">
                                <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                                <input type="password" name="password" id="password" value="{{ $d->password }}"
                                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                            </div>
                            <div class="col-span-6 sm:col-span-4">
                                <div class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Image</div>
                                <div>
                                    {{-- class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"> --}}
                                    <img class="w-40 h-fit" src="{{ url($d->doctor_img) }}"></img>
                                </div>
                            </div>
                            <div class="col-span-6 sm:col-span-4">
                                <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                                    for="image">Edit Image</label>
                                <input
                                    class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                                    id="image" name="image" type="file">
                            </div>
                        </div>
                        <div class="px-4 py-3 my-2 text-right sm:px-6">
                            <a href="{{ route('admin_listdoctor') }}"
                                class="inline-flex justify-end rounded-md border border-transparent bg-gray-500 py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-gray-500 focus:ring-offset-2">Cancel</a>
                            <button type="submit"
                                class="inline-flex justify-end rounded-md border border-transparent bg-[#3d68ff] py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">Save</button>

                        </div>
                    </div>
                </div>

            </form>
            <script src="https://cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script>
            <script>
                CKEDITOR.replace('doctor_desc');
            </script>

            {{-- Modal --}}
        </div>
    </div>
</x-backpage>
