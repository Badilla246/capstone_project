<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="{{ asset('tailwind/tailwind.min.js') }}"></script>
    <title>Login</title>
</head>

<body>
    <div class="w-full relative h-screen bg-gradient-to-t from-green-100 to-green-400">
        <div
            class="absolute lg:left-[18rem] xl:left-[19rem] sm:left-[7rem] left-[5rem] md:left-[10rem] rounded top-[5rem] h-[70vh] shadow-lg overflow-hidden lg:w-[60%] md:w-[70%] w-[70%]">

            <div class="md:flex h-full">

                <div class="md:w-1/2 w-full flex items-center justify-center bg-green-600">
                    {{-- refresh the page --}}
                    <a href="/">
                        <div class="text-white text-2xl">
                            <img src="#" alt="Nurse Icon">
                        </div>
                    </a>
                </div>

                <div class="md:w-1/2 w-full h-full p-10 bg-white flex items-center justify-center">

                    <div class="w-full max-w-md">

                        <div class="text-4xl font-bold mb-8">
                            Login
                        </div>

                        <div>
                            {{-- login form --}}
                            <form action="{{ route('auth.login') }}" method="POST">
                                @csrf
                                <div class="mb-4">

                                    <div class="flex flex-col">
                                        <label for="email" class="mb-2 text-lg">Email</label>
                                        <input
                                            class="border border-gray-300 rounded-lg p-2 focus:outline-none focus:ring-2 focus:ring-green-700 @error('email') border-red-500 border-2 @enderror"
                                            type="text" id="email" name="email" value="{{ old('email') }}">
                                        @error('email')
                                            <div class="text-red-600 font-bold">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="mb-6">
                                    <div class="flex flex-col">
                                        <label for="password" class="mb-2 text-lg">Password</label>
                                        <input
                                            class="border border-gray-300 rounded-lg p-2 focus:outline-none focus:ring-2 focus:ring-green-700  @error('password') border-red-500 border-2 @enderror"
                                            type="password" id="password" name="password">
                                        @error('password')
                                            <div class="text-red-600 font-bold">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="flex items-center mb-6">
                                    <input type="checkbox" id="remember" name="remember" class="mr-2">
                                    <label for="remember" class="text-sm">Remember me</label>
                                </div>

                                <div>
                                    <button type="submit"
                                        class="w-full bg-green-700 text-white py-2 rounded-lg hover:bg-green-800 transition duration-200">Login</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</body>

</html>
