<x-backpage>
    <div class="w-full">
        <p class="text-xl mt-6 mb-2 pb-3 flex items-center">
            Detailed Information of Form
        </p>
        <a href="{{ route('admin_formuser') }}"
            class="inline-flex justify-center rounded-md border border-transparent bg-gray-500 py-2 px-4 mb-6 text-sm font-medium text-white shadow-sm hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-gray-500 focus:ring-offset-2">Back
            to main menu</a>
        <div class="overflow-auto">
            {{-- <form action="/admin/store_doctor" method="POST" enctype="multipart/form-data">
                @csrf --}}
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-4 lg:gap-4 grid-flow-row bg-white mb-5">
                <div class="sm:overflow-hidden sm:rounded-md row-span-2 bg-white">
                    <div class="space-y-6 bg-white px-4 py-5 sm:pb-4">
                        <div class="text-xl flex items-center border-b-2">
                            Basic Information
                        </div>
                        <div class="col-span-6 sm:col-span-4">
                            <label class="block text-sm font-medium text-gray-700">
                                Name</label>
                            <input disabled type="text" value="{{ $d->form_name }}"
                                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                            {{-- @error('doctor_name')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror --}}
                        </div>
                        <div class="col-span-6 sm:col-span-4">
                            <label class="block text-sm font-medium text-gray-700">Phone
                                Number</label>
                            <input disabled type="text" value="{{ $d->form_phonenum }}"
                                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                        </div>
                        <div class="col-span-6 sm:col-span-4">
                            <label class="block text-sm font-medium text-gray-700">Address</label>
                            <input disabled type="text" value="{{ $d->address }}"
                                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                        </div>
                        <div class="col-span-6 sm:col-span-4">
                            <label class="block text-sm font-medium text-gray-700">Date</label>
                            <input disabled type="text" value="{{ $d->form_date }}"
                                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                        </div>
                        <div class="col-span-6 sm:col-span-4">
                            <label class="block text-sm font-medium text-gray-700">Time</label>
                            <input disabled type="text" value="{{ $d->form_time }}"
                                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                        </div>
                    </div>
                </div>
                <div class="sm:overflow-hidden sm:rounded-md">
                    <div class="space-y-6 bg-white px-4 py-5 sm:pb-4">
                        <div class="text-xl flex items-center border-b-2">
                            Additional Information
                        </div>

                        {{-- <div class="col-span-6 sm:col-span-4">
                                    <label for="specialization"
                                        class="block text-sm font-medium text-gray-700">Specialization</label>
                                    <select name="specialization" id="specialization"
                                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                                        <option value=""> -- Select One --</option>
                                        @foreach ($data as $d)
                                            <option value="{{ $d->id_specialization }}">{{ $d->name_specialization }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div> --}}
                        <div>
                            <label class="block text-sm font-medium text-gray-700">Description</label>
                            <div class="mt-1">
                                <textarea rows="18"
                                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                    disabled>{!! $d->form_desc !!}</textarea>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <form method="POST" action="{{ route('admin_editformuser_postnote', ['id' => $d->id_form]) }}">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-4 lg:gap-4 grid-flow-row">
                    @csrf
                    <div class="sm:overflow-hidden sm:rounded-md col-span-1">
                        <div class="space-y-6 bg-white px-4 py-5 sm:pb-3">
                            <div class="text-xl flex items-center border-b-2">
                                Notes
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700">Notes For Patient</label>
                                <div class="mt-1">
                                    <textarea rows="4" id="desc" name="desc" @if ($d->accept == 2) @disabled(true) @endif 
                                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"></textarea>
                                    </textarea>
                                </div>
                                @if ($d->accept != 2)
                                    <div class="px-4 py-3 mt-2 text-right sm:px-6">
                                        <button type="submit"
                                            class="inline-flex justify-end rounded-md border border-transparent bg-yellow-500 py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-yellow-600 focus:outline-none focus:ring-2 focus:ring-yellow-500 focus:ring-offset-2">Send
                                            Notes</button>
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
            </form>
            <form method="POST" action="{{ route('admin_editformuser_postapproval', ['id' => $d->id_form]) }}">
                @csrf
                <div class="space-y-6 bg-white px-4 py-5 sm:pb-10">
                    <div class="text-xl flex items-center border-b-2">
                        Approval
                    </div>
                    <div class="block text-sm font-medium text-gray-700 text-justify">
                        Please choose the following status whether you will accept the patient or not. If there are
                        things you would like to convey to the patient such as adding further information, changing the
                        schedule, or something else, please write a note in the column "NOTES" beside. Remember that the
                        form that has been approved or rejected cannot be changed anymore!.
                    </div>
                    <div>
                        <div class="px-4 mt-3 text-center sm:px-6">
                            @if ($d->accept != 2)
                                <button name="approve" id="approve" value="2"
                                    class="inline-flex justify-center align-center rounded-md border border-transparent bg-green-600 py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-green-500 focus:ring-offset-2">Approve</button>
                                <button name="reject" id="reject" value="1"
                                    class="inline-flex justify-center rounded-md border border-transparent bg-red-500 py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-red-600 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2">Reject</button>
                            @else 
                            <div
                            class="inline-flex justify-center align-center rounded-md border border-transparent bg-green-600 py-2 px-4 text-sm font-medium text-white shadow-sm ">Approved</div>
                            @endif
                        </div>
                    </div>
                </div>
            </form>
        </div>


    </div>
    </form>

    {{-- <script src="https://cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script>
            <script>
                CKEDITOR.replace('doctor_desc');
            </script> --}}

    {{--
                                    <form action="/admin/store_doctor" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <div class="shadow sm:overflow-hidden sm:rounded-md">
                                            <div class="space-y-6 bg-white px-4 py-5 sm:p-6">
                                                <div class="col-span-6 sm:col-span-4">
                                                    <label for="doctor_name" class="block text-sm font-medium text-gray-700">Doctor
                                                        Name</label>
                                                    <input type="text" name="doctor_name" id="doctor_name"
                                                        class="mt-1 block w-50 rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                                              9      @error('doctor_name')
                    <div class="alert alert-danger mt-2">
                                                            {{ $message }}
                                                        </div>
                    @enderror
                                                </div>
                                                <div class="col-span-6 sm:col-span-4">
                                                    <label for="specialization"
                                                        class="block text-sm font-medium text-gray-700">Specialization</label>
                                                    <select name="specialization" id="specialization"
                                                        class="mt-1 block w-50 rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                                                        <option value="">Select Doctor Specialization</option>
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
                    
                                                {{-- <div class="flex items-center justify-center w-full">
                <label for="doctor_img"
                    class="flex flex-col items-center justify-center w-full h-64 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 dark:hover:bg-bray-800 dark:bg-gray-700 hover:bg-gray-100 dark:border-gray-600 dark:hover:border-gray-500 dark:hover:bg-gray-600">
                    <div class="flex flex-col items-center justify-center pt-5 pb-6">
                        <svg aria-hidden="true" class="w-10 h-10 mb-3 text-gray-400" fill="none"
                            stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12">
                            </path>
                        </svg>
                        <p class="mb-2 text-sm text-gray-500 dark:text-gray-400"><span
                                class="font-semibold">Click to upload</span> or drag and drop</p>
                        <p class="text-xs text-gray-500 dark:text-gray-400">PNG, JPG or JPEG (MAX.
                            2 MB)</p>
                    </div>
                    <input id="doctor_img" type="file" class="hidden" />
                </label>
            </div> 
                    
                                                <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                                                    for="image">Upload file</label>
                                                <input
                                                    class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                                                    id="image" name="image" type="file">
                    
                                                {{-- @error('doctor_img')
                <div class="alert alert-danger mt-2">
                    {{ $message }}
                </div>
            @enderror 
                                            </div>
                                            <div class="px-4 py-3 text-right sm:px-6">
                                                <button type="submit"
                                                    class="inline-flex justify-center rounded-md border border-transparent bg-[#3d68ff] py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">Save</button>
                                            </div>
                                        </div>
                                    </form>
                                    */
                --}}
    </div>
    </div>
</x-backpage>
