<div class="p-2 shadow-lg flex justify-between">
    <div class="flex gap-3">
        {{-- <img src="#" alt="Logo"> --}}
        <div class="font-bold text-lg">
            CMC - HOSPITAL
        </div>
    </div>
    {{-- drop down --}}
    <div class="cursor-pointer relative user-select-none" onclick="trigger()">
        <div class="flex gap-4 items-center">
            <div class="font-bold text-lg user-select-none">
                {{ Auth::user()->name }}
            </div>
            <div>
                <svg id="arrowDown" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                    stroke-width="1.5" stroke="currentColor" class="size-4">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5" />
                </svg>
                <svg id="arrowUp" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                    stroke-width="1.5" stroke="currentColor" class="size-4 hidden">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 15.75 7.5-7.5 7.5 7.5" />
                </svg>
            </div>
        </div>
        <div class="absolute  z-50 hidden rounded shadow-md bg-white w-[200px] right-1 top-10 h-[14vh] p-2"
            id="target">
            <div
                class="border-b hover:bg-gray-100 transition duration-150 ease-linear hover:rounded-t-md p-2 border-gray-300">
                <a href="/profile" class="flex items-center gap-2">
                    {{-- if image existed --}}
                    @if (!empty(Auth::user()->image))
                        <img src="{{ asset('images/' . Auth::user()->image) }}" alt="Profile Image"
                            class="w-8 h-8 rounded-full">
                    @else
                        {{-- default icon --}}
                        <svg id="defaultIcon" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M17.982 18.725A7.488 7.488 0 0 0 12 15.75a7.488 7.488 0 0 0-5.982 2.975m11.963 0a9 9 0 1 0-11.963 0m11.963 0A8.966 8.966 0 0 1 12 21a8.966 8.966 0 0 1-5.982-2.275M15 9.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                        </svg>
                    @endif
                    <div class="text-lg user-select-none">
                        {{-- auth name --}}
                        {{ Auth::user()->name }}
                    </div>
                </a>
            </div>
            <form method="POST" action="{{ route('auth.logout') }}">
                @csrf
                <button class="w-full" type="submit">
                    <div
                        class="flex p-2 w-full hover:bg-gray-100 transition duration-150 ease-linear hover:rounded-b-md items-center gap-3">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M8.25 9V5.25A2.25 2.25 0 0 1 10.5 3h6a2.25 2.25 0 0 1 2.25 2.25v13.5A2.25 2.25 0 0 1 16.5 21h-6a2.25 2.25 0 0 1-2.25-2.25V15m-3 0-3-3m0 0 3-3m-3 3H15" />
                        </svg>

                        {{-- logout  --}}

                        Logout

                    </div>
                </button>
            </form>

        </div>
    </div>
</div>

<script>
    //toggle button for profile and logout
    function trigger() {
        document.getElementById('target').classList.toggle('hidden')
        document.getElementById('arrowDown').classList.toggle('hidden')
        document.getElementById('arrowUp').classList.toggle('hidden')
    }
</script>
