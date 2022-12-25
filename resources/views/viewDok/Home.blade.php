@extends('viewDok/Main')
@section('container')
<aside class="mt-6 float-right w-80 clear-both ">
  <div class="p-6 mb-6 bg-gray-300 border-b-2 transition-all ">
      <h2 class=" mb-3 text-blue-600 text-lg font-semibold uppercase">Layanan Terkini</h2>
      <ul type="square" class="">
          <li class="border-b-2 border-gray-400 p-1 "><a href="#" class=" block hover:text-blue-500 ">Promo Dan Paket Layanan</a></li>
          <li class="border-b-2 border-gray-400 p-1 "><a href="#" class=" block hover:text-blue-500 ">Fasilitas Dan Layanan</a></li>
      </ul>
  </div>
  <div class="min-w-32 bg-gray-300 min-h-48 p-3 mb-4 font-medium">
      <div class="w-32 flex-none rounded-t lg:rounded-t-none lg:rounded-l text-center shadow-lg ">
        <div class="block rounded-t overflow-hidden  text-center ">
          <div class="bg-blue text-black py-1">
            October
          </div>
          <div class="pt-1 border-l border-r border-white bg-gray-300">
            <span class="text-5xl font-bold leading-tight">
              17
            </span>
          </div>
          <div class="border-l border-r border-b rounded-b-lg text-center border-white bg-gray-300 -pt-2 -mb-1">
            <span class="text-sm">
              Friday
            </span>
          </div>
          <div class="pb-2 border-l border-r border-b rounded-b-lg text-center border-white bg-gray-300">
            <span class="text-xs leading-normal">
              8:00 am to 5:00 pm
            </span>
          </div>
        </div>
      </div>
    </div>
</aside>
<div class="  ">
    <div class=" w-3/6 my-6 mx-auto pt-0 pr-6 pb-6 pl-6 bg-gray-300 border-b-2 transition-all ">
        <img src="{{ asset('img/pelayanan1.png') }}" class="w-full ">
        <h1 class="mb-3 text-base font-semibold">Pelayanan Kesehatan</h1>
        <hr>
        <p class="text-sm ">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Mollitia fuga natus nostrum placeat dolor error sapiente nihil totam. Aperiam enim est nisi officiis dolores provident, fugiat dicta quam alias sapiente. Accusamus quasi sunt ratione nemo, totam aspernatur architecto, omnis, reprehenderit soluta voluptates autem dignissimos expedita ullam? Id quidem facilis perferendis culpa non deserunt natus inventore qui necessitatibus sequi voluptatem voluptatibus corporis, reprehenderit fugiat sit minus nostrum doloremque recusandae eaque vitae quasi quibusdam incidunt ut? Modi iure illo voluptatum perspiciatis, placeat molestias minima quibusdam similique vitae illum cumque veritatis consequuntur, neque porro. Reiciendis laboriosam, repellat distinctio sunt optio dolor qui quisquam!</p>    
    </div>
    <div class=" w-3/6 my-6 mx-auto pt-0 pr-6 pb-6 pl-6 bg-gray-300 border-b-2 transition-all ">
        <img src="{{ asset('img/pelayanan2.jpg') }}" alt="" class="w-full  ">
        <h1 class="mb-3 text-base font-semibold">Pengecekan Secara Teratur</h1>
        <hr>
        <p class="text-sm  ">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum natus officiis consequuntur, reprehenderit error odio incidunt totam quas ut. Explicabo obcaecati sit consequuntur cum, temporibus facere accusantium eius quis sapiente hic ea numquam dolores nostrum cumque reiciendis, pariatur magnam asperiores nulla blanditiis laudantium ex in molestias. Architecto, obcaecati iure? Eveniet, minus. Labore nostrum vero facilis maiores rerum sit rem ullam, quibusdam ex. Quasi expedita tenetur accusantium, repellat error incidunt suscipit iure enim ullam saepe libero. Repellat totam consequatur unde praesentium itaque veniam ab obcaecati doloremque, consequuntur nihil animi autem alias quaerat consectetur sint, dolorem ut molestiae impedit. Est, incidunt expedita!</p>
    </div>
    <div class="pt-3 pb-3 w-full hover:underline">
        <a href="#" class=" ">Copyright AryaAKusuma 2022</a>
    </div>
</div>    
@endsection

      

