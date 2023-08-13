<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('My Orders') }}
        </h2>
    </x-slot>

    @foreach($orders as $order)
    <div class="max-w-7xl mx-auto mt-2 sm:px-7 bg-white rounded-lg border mb-4  lg:px-8">
        <div class="grid sm:px-5 lg:grid-cols-2 lg:px-5 xl:px-5">
            <div class="px-4 pt-8">
                <p class="text-2xl font-bold text-purple-600">Your product</p>
                <div class="mt-8 mb-6 space-y-3 rounded-lg border  bg-white px-2 py-4 sm:px-6">
                    <div class="flex flex-col rounded-lg bg-white sm:flex-row">
                        <img class="m-2 h-24 w-28 rounded-md border object-cover object-center"
                             src="{{ $order->product->getImage() }}" alt=""/>
                        <div class="flex w-full flex-col px-4 py-4">
                            <span class="font-semibold">{{ $order->product->name }}</span>
                            <span class="float-right text-gray-400">Article:  {{ $order->product->slug }}</span>
                            <p class="text-lg font-bold">${{ $order->product->price }}</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mt-10 bg-gray-50 px-4 pt-8 lg:mt-0">
                <p class="text-2xl font-bold text-purple-600 mb-6">Your order, number {{ $order->id }} </p>
                <p class="text-gray-500">Order status is - <span class="text-white font-semibold rounded-full p-1 bg-red-500">{{ $order->status->name }}</span></p>
                <div class="">
                    <div>
                        <h3 class="mt-4 mb-1 block text-sm font-medium">Email:</h3>
                        <p class="text-sm text-gray-400">{{ auth()->user()->email }}</p>
                    </div>
                    <div>
                        <h3 class="mt-4 mb-1 block text-sm font-medium">Phone:</h3>
                        <p class="text-sm text-gray-400">{{ auth()->user()->phone }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach

</x-app-layout>
