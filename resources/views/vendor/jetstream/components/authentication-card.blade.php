{{-- <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100">
    <div>
        {{ $logo }}
    </div>

    <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
        {{ $slot }}
    </div>
</div> --}}

<!--md:container md:mx-auto →
margin-left: auto;
margin-right: auto;-->

<div class="lg:w-1/2 sm:max-w-full justify-center items-center pt-6 sm:pt-0 md:container md:mx-auto">
    <div class="">
        <div>
            {{ $logo }}
        </div>

        <div class="px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
            {{ $slot }}
        </div>
    </div>
</div>