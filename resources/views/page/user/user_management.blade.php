@extends('layout.base')

@section('title')
    {{ 'User' }}
@endsection
@section('content')
    <div class="mb-2">
        @if (Session::has('success'))
            <div class="bg-green-300 text-green-600 p-3 w-full rounded-md">
                {{ Session::get('success') }}
            </div>
        @endif
    </div>

    <div>hello</div>
    <h1>bsdf</h1>

    <div class="w-full p-3 bg-white h-[80vh] mt-2 rounded-lg shadow-md ">
        <div class="flex items-center justify-between">
            <div class="text-2xl font-bold">
                User Management
            </div>
            <div class="flex items-center gap-3 mr-10">
                <div class="relative">
                    <form action="{{ route('user.index') }}" method="GET">
                        <input type="text" name="filter" class="border border-slate-900 pl-8 py-2 rounded-md"
                            placeholder="Search">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="size-5 text-slate-400 absolute top-3 left-2">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
                        </svg>
                        {{-- <button type="submit">Search</button> --}}
                    </form>
                </div>
                <div>
                    {{-- onclick="modal()" --}}
                    <button class="bg-blue-600 text-white rounded-md py-2 px-2 flex items-center gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="size-5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                        </svg>

                        Add User
                    </button>
                </div>
            </div>
        </div>

        <div class="mt-4">
            <table class="w-full">
                <thead class="bg-gray-100">
                    <tr class="font-bold text-gray-500">
                        <td class="p-2">ID</td>
                        <td>Name</td>
                        <td>Email</td>
                        <td>Role</td>
                        <td>Action</td>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($users as $user)
                        <tr>
                            <td class="p-2">{{ $user->id }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>
                                @foreach ($user->roles as $role)
                                    {{ $role->name }}
                                @endforeach
                            </td>
                            <td>
                                <button onclick="openEdit()">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor"
                                        class="size-6 text-blue-700 hover:scale-125 transition ease-linear duration-150">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L6.832 19.82a4.5 4.5 0 0 1-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 0 1 1.13-1.897L16.863 4.487Zm0 0L19.5 7.125" />
                                    </svg>

                                </button>
                                <button>
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor"
                                        class="size-6 text-red-700 hover:scale-125 transition ease-linear duration-150">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
                                    </svg>
                                </button>
                            </td>
                        </tr>
                    @empty

                        <tr>
                            <td colspan="5" class="text-center py-4">No Record Available</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        <div class="mt-[1rem]">
            {{ $users->links() }}
        </div>
    </div>

    {{-- @include('page.user.modal.create')

    @include('page.user.modal.edit') --}}

    <script>
        function modal() {
            document.getElementById('trigger').classList.remove('hidden')
        }

        function openEdit() {
            document.getElementById(`editTrigger`).classList.remove('hidden');

        }
    </script>
@endsection
