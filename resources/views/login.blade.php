<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    @include('includes.navbar')
    <div class="min-h-screen flex items-center justify-center bg-gradient-to-tr from-red-400 to-white">
        <div class="bg-white p-8 rounded-2xl shadow-lg w-full max-w-md">
            <h2 class="text-3xl font-bold text-center text-gray-800 mb-6">Login to Your Account</h2>

            <form method="post" action="{{ route('securelogin.page') }}" class="space-y-4">
                @csrf
                <div>
                    <label class="block text-sm font-medium text-gray-700">Email</label>
                    <input name="email" type="email" placeholder="you@example.com" value="{{ old('email') }}"
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

                <div class="flex items-center justify-between text-sm">
                    <label class="flex items-center">
                        <input type="checkbox" class="form-checkbox h-4 w-4 text-blue-500" />
                        <span class="ml-2 text-gray-700">Remember me</span>
                    </label>
                    <a href="#" class="text-blue-600 hover:underline">Forgot password?</a>
                </div>

                <button type="submit"
                    class="w-full bg-red-600 hover:bg-red-700 text-white font-bold py-3 rounded-lg transition duration-300">
                    Login
                </button>
            </form>

            <p class="text-sm text-gray-600 mt-6 text-center">
                Don’t have an account?
                <a href="{{ route('register.page') }}" class="text-blue-500 hover:underline">Register here</a>
            </p>
        </div>
    </div>


</body>

</html>