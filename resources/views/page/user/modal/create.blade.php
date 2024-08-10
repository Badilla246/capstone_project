<div class="fixed inset-0 flex items-center -mt-10 justify-center bg-gray-800 bg-opacity-50  @if ($errors->any()) @else hidden @endif"
    id="trigger">
    <div class="bg-white rounded-lg overflow-hidden shadow-xl transform transition-all sm:max-w-lg sm:w-full">
        <div class="px-4 py-5 sm:p-6">
            <h3 class="text-xl font-bold text-gray-900">Create User</h3>
            <form action="{{ route('user.store') }}" method="POST">
                @csrf
                <div class="mt-2">
                    <p class="text-sm text-gray-500">
                    <div class="">
                        <div class="mb-2">
                            <label for="name">Name</label>
                            <input type="text" id="name" name="name"
                                class="w-full border border-black p-2 rounded" value="{{ old('name') }}">
                            @error('name')
                                <div class="text-red-600" id="nameError">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-2">
                            <label for="email">Email</label>
                            <input type="text" id="email" name="email"
                                class="w-full border border-black p-2 rounded" value="{{ old('email') }}">
                            @error('email')
                                <div class="text-red-600" id="emailError">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-2">
                            <label for="password">Password</label>
                            <input type="password" id="password" name="password"
                                class="w-full border border-black p-2 rounded" value="{{ old('password') }}">
                            @error('password')
                                <div class="text-red-600" id="passwordError">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-2">
                            <label for="role">Role</label>
                            <select class="w-full border border-black p-2 rounded" id="role" name="role"
                                required>
                                <option selected disabled>Select Role</option>
                                <option value="admin">Admin</option>
                                <option value="doctor">Doctor</option>
                                <option value="nurse">Nurse</option>
                            </select>
                            @error('role')
                                <div class="text-red-600" id="roleError">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        </p>
                    </div>
                    <div class="mt-5 sm:mt-6 flex gap-3">
                        <button type="submit"
                            class="inline-flex justify-center w-full rounded-md border border-transparent shadow-sm px-2 py-2 bg-indigo-600 text-base font-medium text-white hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:text-sm">Submit</button>
                        <button type="button"
                            class="inline-flex justify-center w-full rounded-md border border-transparent shadow-sm px-2 py-2 bg-gray-600 text-base font-medium text-white hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500 sm:text-sm"
                            onclick="closeModal()">
                            Close
                        </button>
                    </div>
            </form>
        </div>
    </div>
</div>

<script>
    function closeModal() {
        document.getElementById('trigger').classList.add('hidden')

        document.getElementById('nameError').innerHTML = ''
        document.getElementById('emailError').innerHTML = ''
        document.getElementById('passwordError').innerHTML = ''
        document.getElementById('roleError').innerHTML = ''
    }
</script>
