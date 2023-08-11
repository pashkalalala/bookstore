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

                {{--Form--}}
                <form action="{{ route('home') }}" method="post">
                    <label for="name" class="mt-4 mb-2 block text-sm font-medium">Name</label>
                    <div class="relative">
                        <input type="text" id="name" name="name"
                               class="w-full rounded-md border border-gray-200 px-4 py-3 pl-11 text-sm shadow-sm outline-none focus:z-10 focus:border-gray-500 focus:ring-blue-500"
                               placeholder="Your Name"/>
                        <div class="pointer-events-none absolute inset-y-0 left-0 inline-flex items-center px-3">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-400" fill="none"
                                 viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                      d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                        </div>
                    </div>

                    <label for="email" class="mt-4 mb-2 block text-sm font-medium">Email</label>
                    <div class="relative">
                        <input type="text" id="email" name="email"
                               class="w-full rounded-md border border-gray-200 px-4 py-3 pl-11 text-sm shadow-sm outline-none focus:z-10 focus:border-gary-500 focus:ring-blue-500"
                               placeholder="your.email@gmail.com"/>
                        <div class="pointer-events-none absolute inset-y-0 left-0 inline-flex items-center px-3">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-400" fill="none"
                                 viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                      d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207"/>
                            </svg>
                        </div>
                    </div>

                    <label for="phone" class="mt-4 mb-2 block text-sm font-medium">Phone</label>
                    <div class="relative">
                        <input type="text" id="phone" name="phone"
                               class="w-full rounded-md border border-gray-200 px-4 py-3 pl-11 text-sm shadow-sm outline-none focus:z-10 focus:border-gray-500 focus:ring-blue-500"
                               placeholder="Your Phone"/>
                        <div class="pointer-events-none absolute inset-y-0 left-0 inline-flex items-center px-3">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-400" fill="none"
                                 viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                      d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                            </svg>
                        </div>
                    </div>

                    <label for="message" class="mt-4 mb-2 block text-sm font-medium">Your message</label>
                    <textarea id="message" name="message" rows="4"
                              class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                              placeholder="Leave a comment..."></textarea>

                    <!-- Total -->
                    <div class="mt-6 py-2 border-t flex items-center justify-between">
                        <p class="text-sm font-medium text-gray-900">Total</p>
                        <p class="text-2xl font-semibold text-gray-900">$408.00</p>
                    </div>

                    {{--<input type="submit" name="submit" value="Submit">--}}
                    <button type="submit"
                            class="mt-4 mb-8 w-full rounded-md bg-gray-700 hover:bg-gray-900 px-6 py-3 font-medium text-white">
                        Place Order
                    </button>
                </form>
            </div>
        </div>
    </div>

</x-main-layout>
