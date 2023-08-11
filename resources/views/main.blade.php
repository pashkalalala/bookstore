<x-main-layout>

    <div class="mx-auto mt-10 max-w-2xl lg:text-center">
        <h2 class="text-lg font-semibold leading-7 text-indigo-600">Our books</h2>
        <p class="mt-2 text-2xl font-semibold tracking-tight text-gray-900 sm:text-2xl">A Better Way to Buy Books
            Online.</p>
        <p class="mt-6 text-lg leading-8 text-gray-600">We have a large selection of books, from the
            earliest board books to the all-time classics of literature.</p>
    </div>

    <div class="bg-white">
        <div class="mx-auto max-w-2xl px-4 py-16 sm:px-6 sm:py-24 lg:max-w-7xl lg:px-8">
            <h2 class="sr-only">Products</h2>

            <div class="grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2  xl:grid-cols-3 xl:gap-x-8">
                @foreach($products as $product)
                    <div class="group shadow hover:shadow-lg px-4 py-2 rounded-lg">
                        <a href="{{ route('product', ['id' => $product->id]) }}">
                            <div
                                class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-lg bg-gray-200 xl:aspect-h-8 xl:aspect-w-7">
                                <img src="{{ $product->getImage() }}"
                                     alt="Tall slender porcelain bottle with natural clay textured body and cork stopper."
                                     class="h-96 w-full object-cover object-center group-hover:opacity-75">
                            </div>
                        </a>
                        <h3 class="mt-4 text-base font-bold text-gray-700">{{ $product->name }}</h3>
                        <p class="mt-1 text-sm font-medium text-gray-400">{{ $product->short_description }}</p>
                        <p class="mt-1 text-lg font-medium text-gray-900">${{ $product->price }}</p>
                        <div class="pt-3">
                            <a href="{{ route('product', ['id' => $product->id]) }}">
                                <button
                                    class="text-purple-500 border px-4 py-2 rounded-lg hover:text-purple-600 hover:border-purple-600 font-bold uppercase text-xs px-4 py-2 rounded outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150"
                                    type="button">
                                    show details
                                </button>
                            </a>
                            <a href="{{ route('newOrder', ['id' => $product->id]) }}">
                                <button
                                    class="text-purple-500 border px-4 py-2 rounded-lg hover:text-purple-600 hover:border-purple-600 font-bold uppercase text-xs px-4 py-2 rounded outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150"
                                    type="button">
                                    make order
                                </button>
                            </a>
                        </div>
                    </div>

                @endforeach

            </div>
        </div>
    </div>

    {{ $products->links() }}

</x-main-layout>
