<x-main-layout>

    <div class="flex flex-col items-center border-b bg-white py-4 sm:flex-row sm:px-10 lg:px-20 xl:px-32">
        <a href="{{ route('product', ['id' => $product->id]) }}"
           class="text-gray-800 text-sm font-semibold border px-2 py-2 rounded-lg hover:text-purple-600 hover:border-purple-600">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                 stroke="currentColor"
                 class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5"/>
            </svg>
        </a>
        <div class="mt-4 py-2 text-xs sm:mt-0 sm:ml-auto sm:text-base">
            <div class="relative">
                <ul class="relative flex w-full items-center justify-between space-x-2 sm:space-x-4">
                    <li class="flex items-center  space-x-3 text-left sm:space-x-4">
                        <a class="flex  items-center justify-center hover:text-purple-600 rounded-full bg-emerald-200 text-sm font-semibold text-emerald-700"
                           href="{{ route('home') }}">
                            <span class="font-semibold hover:text-purple-600 text-gray-900">Home</span>
                        </a>
                    </li>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-400" fill="none"
                         viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"/>
                    </svg>
                    <li class="flex items-center space-x-3 text-left sm:space-x-4">
                        <a class="flex  items-center justify-center  rounded-full bg-emerald-200 text-sm font-semibold text-emerald-700"
                           href="{{ route('product', ['id' => $product->id]) }}">
                            <span class="font-semibold text-gray-900 hover:text-purple-600">{{ $product->name }}</span>
                        </a>
                    </li>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-400" fill="none"
                         viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"/>
                    </svg>
                    <li class="flex items-center space-x-3 text-left sm:space-x-4">
                        <a class="flex  items-center justify-center rounded-full bg-emerald-200 text-lg font-semibold text-emerald-700"
                           href="#">
                            <span class="font-semibold text-gray-900 text-purple-600">Order</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="grid sm:px-10 lg:grid-cols-2 lg:px-20 xl:px-32">
        <div class="px-4 pt-8">
            <p class="text-xl font-medium">Order Summary</p>
            <p class="text-gray-400">Check your items and suitable shipping method.</p>
            <div class="mt-8 space-y-3 rounded-lg border bg-white px-2 py-4 sm:px-6">
                <div class="flex flex-col rounded-lg bg-white sm:flex-row">
                    <img class="m-2 h-24 w-28 rounded-md border object-cover object-center"
                         src="{{ $product->getImage() }}" alt=""/>
                    <div class="flex w-full flex-col px-4 py-4">
                        <span class="font-semibold">{{ $product->name }}</span>
                        <span class="float-right text-gray-400">Article:  {{ $product->slug }}</span>
                        <p class="text-lg font-bold">${{ $product->price }}</p>
                    </div>
                </div>
            </div>

            <p class="mt-8 text-lg font-medium">Shipping Methods</p>

            <div class="relative mt-5 px-2 py-4 grid gap-6 rounded-lg border bg-white">
                <div class="ml-5">
                    <span class="mt-2 font-semibold">NovaPost</span>
                    <p class="text-slate-500 text-sm leading-6">Delivery: 2-4 Days</p>
                </div>
            </div>
        </div>

        <div class="mt-10 bg-gray-50 px-4 pt-8 lg:mt-0">
            <p class="text-xl font-medium">Payment Details</p>
            <p class="text-gray-400">Complete your order by providing your payment details.</p>
            <div class="">
                <div>
                    <h3 class="mt-4 mb-2 block text-sm font-medium">Name:</h3>
                    <p class="text-sm text-gray-400">{{ auth()->user()->name }}</p>
                </div>
                <div>
                    <h3 class="mt-4 mb-2 block text-sm font-medium">Email:</h3>
                    <p class="text-sm text-gray-400">{{ auth()->user()->email }}</p>
                </div>
                <div>
                    <h3 class="mt-4 mb-2 block text-sm font-medium">Phone:</h3>
                    <p class="text-sm text-gray-400">{{ auth()->user()->phone }}</p>
                </div>
                {{--Form--}}
                <form action="{{ route('storeOrder') }}" method="post">
                    @csrf
                    <input type="hidden" name="product_id" value="{{ $product->id }}">
                    <label for="comment" class="mt-4 mb-2 block text-sm font-medium">Your comment <span
                            class="text-red-600 font-bold">*</span></label>
                    <textarea id="comment" name="comment" rows="4"
                              class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                              placeholder="Leave a comment..."></textarea>
                    @if($errors->has('comment'))
                        <div class="bg-red-100 border border-red-400 text-red-700 mt-2 px-4 py-3 rounded relative"
                             role="alert">
                            {{ $errors->first('comment') }}
                        </div>
                    @endif
                <!-- Total -->
                    <div class="mt-6 py-2 border-t flex items-center justify-between">
                        <p class="text-sm font-medium text-gray-900">Total</p>
                        <p class="text-2xl font-semibold text-gray-900">${{ $product->price }}</p>
                    </div>

                    <button type="submit"
                            class="mt-4 mb-8 w-full rounded-md bg-gray-700 hover:bg-gray-900 px-6 py-3 font-medium text-white">
                        Make Order
                    </button>
                </form>
            </div>
        </div>
    </div>

</x-main-layout>
