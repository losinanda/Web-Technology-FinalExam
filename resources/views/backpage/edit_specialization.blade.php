<x-backpage>
    <div class="w-full">
        <p class="text-xl pb-4 flex items-center">
            Edit Specialization Data
        </p>
        <div class="overflow-auto">
            <form action="{{ route('admin_editspecializationdoctor_post', ['id' => $sp->id_specialization]) }}"
                method="POST">
                @csrf
                <div class="grid grid-cols-1 gap-4 lg:gap-4 grid-flow-row grid-">
                    <div class="sm:overflow-hidden sm:rounded-md">
                        <div class="space-y-6 bg-white px-4 py-5 sm:p-6">
                            <div class="col-span-6 sm:col-span-4">
                                <label for="sp_name" class="block text-sm font-medium text-gray-700">Specialization
                                    Name</label>
                                <input type="text" name="sp_name" id="sp_name"
                                    value="{{ $sp->name_specialization }}"
                                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                            </div>
                            <div class="px-4 py-3 my-2 text-right sm:px-6">
                                <a href="{{ route('admin_specializationdoctor') }}"
                                    class="inline-flex justify-end rounded-md border border-transparent bg-gray-500 py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-gray-500 focus:ring-offset-2">Cancel</a>
                                <button type="submit"
                                    class="inline-flex justify-end rounded-md border border-transparent bg-[#3d68ff] py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">Save</button>
                            </div>
                        </div>
                    </div>

            </form>
        </div>
    </div>
</x-backpage>
