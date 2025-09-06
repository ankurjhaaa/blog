<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Register</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    @include("includes.navbar")
    <div class="bg-gray-100 flex items-center justify-center min-h-screen">

        <div class="bg-white shadow-xl rounded-2xl overflow-hidden w-full max-w-5xl flex flex-col md:flex-row">

            <!-- Left Side -->
            <div class="md:w-1/2 bg-gradient-to-br from-red-600 to-white text-white p-10 flex flex-col justify-center">
                <h2 class="text-4xl font-bold mb-4">Welcome!</h2>
                <p class="text-lg">Join us and explore thousands of books and resources. Let's grow together!</p>
                <!-- <img src="https://source.unsplash.com/400x300/?books,library" alt="Books"
                    class="mt-6 rounded-lg shadow-lg hidden md:block"> -->
            </div>

            <!-- Right Side -->
            <div class="md:w-1/2 p-8">
                <h2 class="text-2xl font-semibold text-gray-800 mb-6">Create Your Account</h2>

                <form method="post" action="{{ route('creatregister.page') }}" class="space-y-4">
                    @csrf
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Full Name</label>
                        <input name="name" type="text" placeholder="John Doe" value="{{ old('name') }}"
                            class="w-full mt-1 p-3 border rounded-lg focus:ring-2 focus:ring-blue-400" />
                        @error('name')
                            <p>{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-gray-700">contact</label>
                        <input name="contact" type="number" placeholder="7763972896" value="{{ old('contact') }}"
                            class="w-full mt-1 p-3 border rounded-lg focus:ring-2 focus:ring-blue-400" />
                        @error('contact')
                            <p>{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-gray-700">Email</label>
                        <input name="email" type="email" placeholder="john@example.com" value="{{ old('email') }}"
                            class="w-full mt-1 p-3 border rounded-lg focus:ring-2 focus:ring-blue-400" />
                        @error('email')
                            <p>{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-gray-700">Password</label>
                        <input name="password" type="password" placeholder="••••••••" value="{{ old('password') }}"
                            class="w-full mt-1 p-3 border rounded-lg focus:ring-2 focus:ring-blue-400" />
                        @error('password')
                            <p>{{ $message }}</p>
                        @enderror
                    </div>

                    <button type="submit"
                        class="w-full bg-red-600 hover:bg-red-700 text-white font-bold py-3 rounded-lg transition duration-300">
                        Register
                    </button>
                </form>
                @session('msg')
                account created successfully
                @endsession

                <p class="text-sm text-gray-600 mt-4 text-center">
                    Already have an account?
                    <a href="{{ route('login') }}" class="text-blue-500 hover:underline">Login</a>
                </p>
            </div>
        </div>
    </div>


</body>

</html>