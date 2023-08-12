<x-main-layout>
    <div class="bg-white">
        <div class="bg-gray-100 my-24 rounded-md shadow-xl max-w-2xl p-6  md:mx-auto">
            <svg viewBox="0 0 24 24" class="text-purple-600 w-20 h-20 mx-auto my-8">
                <path fill="currentColor"
                      d="M12,0A12,12,0,1,0,24,12,12.014,12.014,0,0,0,12,0Zm6.927,8.2-6.845,9.289a1.011,1.011,0,0,1-1.43.188L5.764,13.769a1,1,0,1,1,1.25-1.562l4.076,3.261,6.227-8.451A1,1,0,1,1,18.927,8.2Z">
                </path>
            </svg>
            <div class="text-center">
                <h3 class="md:text-4xl text-base mb-6 text-gray-900 font-bold text-center">Thank you for your order.</h3>
                <p class="text-gray-800 text-xl my-2">Order number {{ $orderId }}, please wait in,</p>
                <p class="text-gray-600 text-xl">the manager will contact you within 24 hours.</p>
                <p class="text-purple-600 mt-10 mb-10 font-bold text-lg"> Have a great day!</p>
            </div>
        </div>
        <div class="pb-16 text-center">
            <a href="{{ route('home') }}" class="px-12 rounded-md bg-black bg-gray-700 hover:bg-gray-900 text-white font-semibold py-3">
                GO BACK
            </a>
        </div>
    </div>
</x-main-layout>
