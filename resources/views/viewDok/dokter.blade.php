@extends('viewDok.Main')
@section('container')
<div>          
            <div class="flex items-center justify-center content-center p-3">
                <div class="space-y-2 py-3">
                    <div class="flex gap-3 flex-row max-md:flex-col">
                       
                        <div class="max-w-sm rounded-md overflow-hidden shadow-slate-900 bg-blue-800  hover:scale-105 transition-transform ">
                            <img class="w-full " src="img/andi.jpg">
                            <div class="px-6 py-4">
                            <div class="font-bold text-xl mb-2 text-white text-center">Dr. Andi</div>
                            <p class="text-gray-100 text-base">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, nulla! Maiores et perferendis eaque, exercitationem praesentium nihil.
                            </p>
                            </div>
                            <div class="py-5 flex items-center justify-center">
                                <a href="#">
                                <button id="tiket" class=" bg-blue-600 w-52 text-white font-semibold py-2 rounded-full hover:bg-blue-400 hover:underline transition-colors">Chat Now</button>
                                </a>
                            </div> 
                        </div>
                        <div class="max-w-sm rounded-md overflow-hidden shadow-2xl bg-blue-800  hover:scale-105 transition-transform">
                            <img class="w-full" src="img/heriyana.jpg">
                            <div class="px-6 py-4">
                            <div class="font-bold text-xl mb-2 text-white text-center">Dr. Herdinaya</div>
                            <p class="text-gray-100 text-base">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, nulla! Maiores et perferendis eaque, exercitationem praesentium nihil.
                            </p>
                            </div>
                            <div class="py-5 flex items-center justify-center">
                                <a href="#">
                                <button id="tiket" class=" bg-blue-600 w-52 text-white font-semibold py-2 rounded-full hover:bg-blue-400 hover:underline transition-colors">Chat Now</button>
                                </a>
                            </div> 
                        </div>
                        <div class="max-w-sm rounded-md overflow-hidden shadow-2xl bg-blue-800  hover:scale-105 transition-transform">
                            <img class="w-full" src="img/rama.jpg">
                            <div class="px-6 py-4">
                            <div class="font-bold text-xl mb-2 text-white text-center">Dr. Rama</div>
                            <p class="text-gray-100 text-base">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, nulla! Maiores et perferendis eaque, exercitationem praesentium nihil.
                            </p>
                            </div>
                            <div class="py-5 flex items-center justify-center">
                                <a href="#">
                                <button id="tiket" class=" bg-blue-600 w-52 text-white font-semibold py-2 rounded-full hover:bg-blue-400 hover:underline transition-colors">Chat Now</button>
                                </a>
                            </div> 
                        </div>
                    </div> 
                </div>
            </div>
        </div>
@endsection