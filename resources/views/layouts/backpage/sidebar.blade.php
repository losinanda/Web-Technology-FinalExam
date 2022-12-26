<aside class="relative bg-sidebar h-screen w-64 hidden sm:block shadow-xl">
    <div class="p-6">
        <a href="index.html" class="text-white text-2xl font-semibold uppercase hover:text-gray-300">SI Puskesmas</a>
            <button
                class="w-full bg-white cta-btn font-semibold py-2 mt-5 rounded-br-lg rounded-bl-lg rounded-tr-lg shadow-lg hover:shadow-xl hover:bg-gray-300 flex items-center justify-center">
                <i class="fas fa-plus mr-3"></i> New Menu
            </button>
            {{-- <div
                class="w-full bg-white font-semibold py-2 mt-5 rounded-br-lg rounded-bl-lg rounded-tr-lg shadow-lg flex items-center justify-center">
                <i class="fas fa-list mr-3"></i> Menu List
            </div> --}}
    </div>
    <nav class="text-white text-base font-semibold pt-3">
        <a href="{{ route('admin') }}" class="nav-link flex items-center text-white py-4 pl-6 nav-item">
            <i class="fas fa-tachometer-alt mr-3"></i>
            Dashboard
        </a>
            <a href="{{ route('admin_listdoctor') }}"
                class="nav-link flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6 nav-item">
                <i class="fas fa-user-md mr-3"></i>
                Doctor List
            </a>
            <a href="{{ route('admin_specializationdoctor') }}"
                class="nav-link flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6 nav-item">
                <i class="fas fa-stethoscope mr-3"></i>
                Specialization List
            </a>
            <a href="{{ route('admin_obat') }}"
                class="flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6 nav-item">
                <i class="fas fa-pills mr-3"></i>
                Medicine List
            </a>
            <a href="{{ route('admin_formuser') }}"
                class="flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6 nav-item">
                <i class="fas fa-clipboard-list mr-3"></i>
                Form List
            </a>
            <a href="#"
                class="flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6 nav-item">
                <i class="fas fa-users mr-3"></i>
                User List
            </a>
    </nav>
</aside>
