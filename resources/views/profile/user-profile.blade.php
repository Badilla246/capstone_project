@extends('layout.base')

@section('title')
    {{ 'Profile' }}
@endsection
@section('content')
    <div class="flex justify-end">
        {{-- hamburger menu --}}
        <div class="flex gap-2">
            <a href="/dashboard" class="text-blue-600">Dashboard</a>
            <div>></div>
            <div>Profile</div>
        </div>
    </div>

    {{-- flash message --}}
    @if (session('success'))
        <div class="bg-green-300 text-green-800  p-3 rounded mt-4">
            {{ session('success') }}
        </div>
    @endif

    <div class="mt-3 bg-white p-2 min-h-[60vh] rounded shadow-sm">
        <h1 class="text-3xl font-bold">Personal Information</h1>
        {{-- update profile --}}
        <form action="/profile" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="md:flex gap-24 p-2 min-h-[50vh] ml-10">
                <div class="flex flex-col">
                    <div class="flex-1 mt-10 text-center">
                        <input type="file" name="image" id="imageInput" class="hidden" accept="image/*">
                        <label for="imageInput" class="cursor-pointer">
                            <div
                                class="w-36 h-36 rounded-full border-2 border-gray-300 flex items-center justify-center overflow-hidden">

                                {{-- if the image existed --}}
                                @if (!empty($user->image))
                                    <img id="imagePreview" src="{{ asset('images/' . $user->image) }}" alt="Profile Image"
                                        class="w-full h-full object-cover">
                                @else
                                    <img id="imagePreview" src="#" alt="Profile Image"
                                        class="hidden w-full h-full object-cover">
                                @endif

                                {{-- defualt icon --}}
                                <svg id="defaultIcon" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor"
                                    class="{{ !empty($user->image) ? 'hidden' : 'w-36 h-36' }}">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M17.982 18.725A7.488 7.488 0 0 0 12 15.75a7.488 7.488 0 0 0-5.982 2.975m11.963 0a9 9 0 1 0-11.963 0m11.963 0A8.966 8.966 0 0 1 12 21a8.966 8.966 0 0 1-5.982-2.275M15 9.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                </svg>
                            </div>
                        </label>
                        @error('image')
                            <div class="text-red-600">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <textarea name="address" id="address" rows="2" class="border border-slate-200 p-2 mt-4 mb-4 md:mb-0">{{ $user->address }}</textarea>
                </div>

                <div class="min-w-[30%]">
                    <div class="mb-4 flex items-center">
                        <label for="role" class="font-bold w-[25%]">Role</label>
                        @foreach ($user->roles as $role)
                            <input type="text" name="role" class="border border-slate-200 p-2 rounded w-full"
                                value="{{ $role->name }}" disabled>
                        @endforeach
                    </div>
                    <div class="mb-4 flex items-center">
                        <label for="name" class="font-bold  w-[25%]">Name</label>
                        <input type="text" name="name" class="border border-slate-200 p-2 rounded w-full"
                            value="{{ $user->name }}">
                    </div>
                    <div class="mb-4 flex items-center">
                        <label for="email" class="font-bold  w-[25%]">Email</label>
                        <input type="text" name="email" class="border border-slate-200 p-2 rounded w-full"
                            value="{{ $user->email }}">
                    </div>
                    <div class="mb-4 flex items-center">
                        <label for="contact" class="font-bold  w-[25%]">Contact</label>
                        <input type="text" name="contact" class="border border-slate-200 p-2 rounded w-full"
                            value="{{ $user->contact }}">
                    </div>

                    <div class="mt-14 text-end">
                        <button type="submit" class="bg-green-500 text-white rounded px-4 py-2 font-semibold">Save
                            Changes</button>
                    </div>
                </div>
            </div>
        </form>
    </div>

    <script>
        //preview when choosing image
        document.getElementById('imageInput').addEventListener('change', function() {
            const file = this.files[0];
            const preview = document.getElementById('imagePreview');
            const defaultIcon = document.getElementById('defaultIcon');

            if (file) {
                const reader = new FileReader();

                reader.onload = function(e) {
                    preview.src = e.target.result;
                    preview.classList.remove('hidden');
                    defaultIcon.classList.add('hidden');
                }

                reader.readAsDataURL(file);
            }
        });
    </script>
@endsection
