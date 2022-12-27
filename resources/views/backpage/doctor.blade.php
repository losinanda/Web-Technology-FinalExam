<x-backpage>
    <div class="w-full mt-5">
        <p class="text-xl pb-4 flex items-center">
            Doctor List Menu
        </p>
        <div class="flex">
            <a href="{{ route('admin_adddoctor') }}"
                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Add
                data</a>
        </div>

        <div class="overflow-x-auto relative sm:rounded-lg mb-4">
            <form class="form" method="get" action="{{ route('admin_searchdoctor') }}">
                <div class="flex flex-col lg:flex-row mt-4 lg:mt-0 justify-end items-center">
                    <div class="relative">
                        <label for="search" class="sr-only">Search</label>
                        <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                            <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" aria-hidden="true" fill="currentColor"
                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </div>
                        <input type="text" id="search" name="search"
                            class="block p-2 pl-10 w-80 text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="Search name">
                    </div>
                    <div>
                        <label for="filter" class="sr-only">Filter</label>
                        <select name="filter" id="filter"
                            class="block py-2 pr-8 w-fit text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option value="">Filter</option>
                            @foreach ($s as $sp)
                                <option value="{{ $sp->id_specialization }}">{{ $sp->name_specialization }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="px-4 py-1 my-2 text-right sm:px-6">
                        <button type="submit"
                            class="inline-flex justify-end rounded-md border border-transparent bg-[#3d68ff] py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">Search</button>
                        <a class="inline-flex justify-end rounded-md border border-gray-500 bg-transparent py-2 px-4 text-sm font-medium text-gray-800 shadow-sm hover:bg-gray-800 hover:text-white focus:outline-none focus:ring-2 focus:ring-gray-500 focus:ring-offset-2"
                            href="{{ route('admin_listdoctor') }}">Reset</a>
                    </div>
                </div>
            </form>
        </div>
        <div class="w-full mt-5">
            <div class="bg-white overflow-auto mb-6">
                <table class="text-left w-full border-collapse">
                    <thead>
                        <tr>
                            <th
                                class="py-4 px-6 bg-grey-lightest font-bold uppercase text-md text-grey-dark border-b border-grey-light">
                                No.</th>
                            <th
                                class="py-4 px-6 bg-grey-lightest font-bold uppercase text-md text-grey-dark border-b border-grey-light">
                                Name</th>
                            <th
                                class="py-4 px-6 bg-grey-lightest font-bold uppercase text-md text-grey-dark border-b border-grey-light">
                                Specialization</th>
                            <th
                                class="py-4 px-6 bg-grey-lightest font-bold uppercase text-md text-grey-dark border-b border-grey-light">
                                Phone Number</th>
                            {{-- <th
                                class="py-4 px-6 bg-grey-lightest font-bold uppercase text-md text-grey-dark border-b border-grey-light">
                                Form</th> --}}
                            <th
                                class="py-4 px-6 bg-grey-lightest font-bold uppercase text-md text-grey-dark border-b border-grey-light">
                                Action</th>

                        </tr>
                    </thead>
                    {{-- @php
                        $no = 1;
                    @endphp --}}
                    <tbody>
                        @foreach ($doctor as $key => $d)
                            <tr class="hover:bg-grey-lighter">
                                <td class="py-4 px-6 border-b border-grey-light">
                                    {{ ($doctor->currentpage() - 1) * $doctor->perpage() + $key + 1 }}</td>
                                <td class="py-4 px-6 border-b border-grey-light">dr. {{ $d->doctor_name }}</td>
                                <td class="py-4 px-6 border-b border-grey-light">
                                    {{ $d->test1->name_specialization }}</td>
                                <td class="py-4 px-6 border-b border-grey-light">
                                    {{ $d->phone_num }}</td>
                                </td>
                                {{-- <td class="py-4 px-6 border-b border-grey-light">
                                    <div class="flex">
                                        <a href="/admin/form_user/{{ $d->id_doctor }}"
                                            class="text-white text-center bg-blue-500 hover:bg-blue-600 focus:ring-4 focus:ring-blue-600 font-medium rounded-lg text-sm px-4 py-2.5 mr-2 mb-4 dark:bg-blue-500 dark:hover:bg-blue-600 focus:outline-none dark:focus:ring-blue-600"><i
                                                class="fas fa-clipboard-list"></i></a>
                                    </div>
                                </td> --}}
                                <td class="py-4 px-6 border-b border-grey-light">
                                    <div class="flex">
                                        <a href="{{ route('admin_editdoctor', ['id' => $d->id_doctor]) }}"
                                            class="text-white text-center bg-yellow-500 hover:bg-yellow-600 focus:ring-4 focus:ring-yellow-600 font-medium rounded-lg text-sm px-4 py-2.5 mr-2 mb-4 dark:bg-yellow-500 dark:hover:bg-yellow-600 focus:outline-none dark:focus:ring-yellow-600"><i
                                                class="fas fa-edit"></i></a>
                                        <a href="{{ route('admin_deletedoctor', ['id' => $d->id_doctor]) }}"
                                            onclick="return confirm('Are you sure want to delete the data?');"
                                            class="text-white text-center bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-4 py-2.5 mr-2 mb-4 dark:bg-red-600 dark:hover:bg-red-700 focus:outline-none dark:focus:ring-red-800"><i
                                                class="fas fa-trash"></i></a>
                                    </div>
                                </td>
                                {{-- <td class="py-4 px-6 border-b border-grey-light"><a
                                        href="/admin/see_form_doctor/{{ $d->id_doctor }}"
                                        class="text-white text-center bg-blue-500 hover:bg-blue-600 focus:ring-4 focus:ring-blue-600 font-medium rounded-lg text-sm px-4 py-2.5 dark:bg-blue-500 dark:hover:bg-blue-600 focus:outline-none dark:focus:ring-blue-600"><i
                                            class="fas fa-eye"></i></a></td> --}}
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

        <div class="my-3">
            {{ $doctor->links() }}
            <?php if (Request::path()=='doctor') { ?>
            {{ $doctor->appends(request()->query())->links() }}
            <?php } ?>
        </div>
    </div>
    {{-- <script>
            $('#search').on('keyup', function() {
                search();
            });
            search();

            function search() {
                var keyword = $('#search').val();
                $.post('{{ route('admin_searchdoctor') }}', {
                        _token: $('meta[name="csrf-token"]').attr('content'),
                        keyword: keyword
                    },
                    function(data) {
                        table_post_row(data);
                        console.log(data);
                    });
            }
            // table row with ajax
            function table_post_row(res) {
                let htmlView = '';
                if (res.employees.length <= 0) {
                    htmlView += `
                   <tr>
                      <td colspan="4">No data.</td>
                  </tr>`;
                }
                for (let i = 0; i < res.employees.length; i++) {
                    htmlView += `
                    <tr>
                       <td>` + (i + 1) + `</td>
                          <td>` + res.employees[i].name + `</td>
                           <td>` + res.employees[i].phone + `</td>
                    </tr>`;
                }
                $('tbody').html(htmlView);
            }
        </script> --}}
    </div>

</x-backpage>
