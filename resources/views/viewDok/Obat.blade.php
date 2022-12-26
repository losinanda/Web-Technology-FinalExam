<x-frontpage>
    {{-- @section('container') --}}
    <div class="mx-auto">
        <div class=" bg-white grid py-10 grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 items-center justify-center gap-4 ">
            @foreach ($posts as $post)
                <div class=" mx-auto bg-white text-gray-700 w-72 min-h-[10rem]  shadow-lg overflow-hidden ">
                    <img src="{{ url($post->image) }}" alt="" class=" w-72 h-56 object-cover ">
                    <div class=" p-5 flex flex-col gap-1 ">
                        <!-- badge -->
                        <div class=" flex items-center gap-2 ">
                            <span class=" px-2 py-1 rounded-full text-xs bg-gray-100 ">Stock ready</span>
                            <span class=" px-2 py-1 rounded-full text-xs bg-gray-100 "> {{ $post->toko }} </span>
                        </div>
                        <!-- product title -->
                        <h2 class=" font-semibold text-2xl overflow-ellipsis overflow-hidden whitespace-nowrap ">
                            {{ $post->nama }}
                        </h2>
                        <!-- product price -->
                        <div>
                            <span class=" text-xl font-bold  ">
                                {{ $post->harga }}
                            </span>
                            <div class=" flex items-centerr gap-2 mt-1 ">
                                <span class=" text-sm  font-bold">
                                    Categories:
                                </span>
                                <span class=" bg-green-400 px-1.5 py-0.5 rounded-md text-xs text-white   ">
                                    {{ $post->category->name_cat }}
                                </span>
                            </div>
                        </div>
                        <!-- product rating -->
                        <span class=" flex items-center mt-1 ">
                            <img src="./img/star.svg" alt="">
                            <img src="./img/star.svg" alt="">
                            <img src="./img/star.svg" alt="">
                            <img src="./img/star-half-fill.svg" alt="">
                            <img src="./img/star-no-fill.svg" alt="">
                            <span class=" text-xs ml-2 text-gray-500">
                                20k riviews
                            </span>
                        </span>
                        <!-- product action button -->
                        <div class=" mt-5 flex gap-2 ">
                            <button
                                class=" bg-yellow-500/80 hover:bg-yellow-500/90 px-6 py-2 rounded-md text-white font-medium tracking-wider transition ">
                                Add to Cart
                            </button>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</x-frontpage>
