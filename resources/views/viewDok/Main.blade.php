<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }}</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="font-sans  bg-gray-200 ">
    <header class=" text-white ">
        <nav class="bg-blue-800 p-2  sticky top-0 overflow-auto ">
            <div class=" ml-3 ">
                <img src="{{ asset('img/puskesmas.png') }}" alt="logo" class=" float-left h-28">
                <h1 class="float-left font-semibold text-xl block mt-5 ml-6">PUSKESMAS BANJAR 2 
                    <span class="block">Kabupaten Buleleng </span>
                    <span class="block"> Provinsi Bali</span>
                </h1>
            </div>
        
           <ul class=" p-4 overflow-hidden text-right ">
               <li class="inline list-none mr-5 w-3"><a href="/Home" class="text-base font-semibold  mt-7 uppercase transition-all hover:underline hover:bg-blue-600">Home</a></li>
               <li class="inline list-none mr-5 w-3"><a href="/CekDokter" class="text-base font-semibold  mt-7 uppercase transition-all hover:underline hover:bg-blue-600">Dokter</a></li>
               <li class="inline list-none mr-5 w-3"><a href="/Obat" class="text-base font-semibold  mt-7 uppercase transition-all hover:underline hover:bg-blue-600">Obat</a></li>
               <li class="inline list-none mr-5 w-3"><a href="/Category" class="text-base font-semibold  mt-7 uppercase transition-all hover:underline hover:bg-blue-600">Category</a></li>
               <li class="inline list-none mr-5 w-3"><a href="/" class="text-base font-semibold  mt-7 uppercase transition-all hover:underline hover:bg-blue-600">Daftar</a></li>
           </ul>
       </nav>
    </header>
    <div class="container">
        @yield('container')
    </div>

</body>
</html>