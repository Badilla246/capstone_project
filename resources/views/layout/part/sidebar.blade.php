<div class="font-bold bg-[#4D79F6] w-[20%] p-4 flex flex-col items-center user-select-none">
    <div class="flex flex-col text-md">
        <a href="dashboard" {{-- {{ request()->is('dashboard') ? 'bg-white w-full p-1 rounded text-[#4D79F6]' : 'p-1' }} --}}
            class="menu-link p-2 block md:flex items-center gap-4 hover:rounded hover:text-slate-200 transition duration-100 ease-linear {{ request()->is('dashboard') ? 'text-slate-200' : '' }}">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="size-5 ml-8 md:ml-0">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M3.75 12h16.5m-16.5 3.75h16.5M3.75 19.5h16.5M5.625 4.5h12.75a1.875 1.875 0 0 1 0 3.75H5.625a1.875 1.875 0 0 1 0-3.75Z" />
            </svg>
            <div>
                Dashboard
            </div>
        </a>
        @can('create_user')
            <a href="user_management" {{--  {{ request()->is('user_management') ? 'bg-white w-full p-1 rounded text-[#4D79F6]' : 'p-1' }}  --}}
                class="menu-link  p-2 block md:flex items-center gap-4  hover:rounded hover:text-slate-200 transition duration-100 ease-linear mt-2 {{ request()->is('user_management') ? 'text-slate-200' : '' }}">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="size-5  ml-8 md:ml-0">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" />
                </svg>
                <div class="text-center">
                    Users
                </div>
            </a>
        @endcan
    </div>
</div>

{{-- handling refresh --}}
{{-- <div class="font-bold bg-[#4D79F6] w-[23%] p-4 user-select-none">
    <div class="flex flex-col text-md">
        <a href="dashboard"
            class="menu-link {{ request()->routeIs('dashboard') ? 'bg-white w-full p-1 rounded text-[#4D79F6]' : 'p-1' }} flex items-center gap-4 hover:bg-white hover:p-1 hover:rounded hover:text-[#4D79F6] transition duration-100 ease-linear">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="size-5">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M3.75 12h16.5m-16.5 3.75h16.5M3.75 19.5h16.5M5.625 4.5h12.75a1.875 1.875 0 0 1 0 3.75H5.625a1.875 1.875 0 0 1 0-3.75Z" />
            </svg>
            <div>Dashboard</div>
        </a>
        @can('create_user')
            <a href="{{ route('user.index') }}"
                class="menu-link {{ request()->routeIs('user_management') ? 'bg-white w-full p-1 rounded text-[#4D79F6]' : 'p-1' }} flex items-center gap-4 hover:bg-white hover:p-1 hover:rounded hover:text-[#4D79F6] transition duration-100 ease-linear mt-2">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="size-5">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" />
                </svg>
                <div>Users</div>
            </a>
        @endcan
    </div>
</div> --}}
