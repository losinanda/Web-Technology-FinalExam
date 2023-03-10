<x-backpage>
    <div class="w-full">
        <p class="text-xl pb-4 flex items-center">
            Add New Medicine Data
        </p>
        <div class="overflow-auto">
            <form action="/Adminobat" class="w-full " method="POST" enctype="multipart/form-data">
                @csrf
                <div class="shadow sm:overflow-hidden sm:rounded-md">
                    <div class="space-y-6 bg-white px-4 py-5 sm:p-6">
                        <div class="col-span-6 sm:col-span-4">
                            <label for="nama" class="block text-sm font-medium text-gray-700">Nama Produk</label>
                            <input type="text" id="nama" name="nama"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        </div>
                        <div class="col-span-6 sm:col-span-4">
                            <label for="harga" class="block text-sm font-medium text-gray-700">Harga</label>
                            <input type="text" name="harga" id="harga"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        </div>
                        <div class="col-span-6 sm:col-span-4">
                            <label for="toko" class="block text-sm font-medium text-gray-700">Toko</label>
                            <input type="text" id="toko" name="toko"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        </div>
                        <div class="col-span-6 sm:col-span-4">
                            <label for="category_id" class="block text-sm font-medium text-gray-700">Categori
                                Obat</label>
                            <select name="category_id" id="category_id"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                <option selected>Pilih Kategori</option>
                                <option value="1">Obat Bebas</option>
                                <option value="2">Obat Bebas Terbatas</option>
                                <option value="3">Obat Keras</option>
                                <option value="4">Obat Narkotika</option>
                            </select>
                        </div>
                        <div class="col-span-6 sm:col-span-4">
                            <label for="deskripsi" class="block text-sm font-medium text-gray-700">Deskripsi</label>
                            <textarea id="deskripsi" name="deskripsi" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"></textarea>
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
                CKEDITOR.replace('deskripsi');
            </script>

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
