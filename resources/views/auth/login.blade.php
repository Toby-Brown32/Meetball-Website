<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Meetball Website</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="min-h-full bg-gray-800 text-white flex flex-col">
    <header class="border-b border-white/20 bg-[#EAD63D] text-[#50482D] py-4">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-center">
                <h1 class="text-xl font-bold">Meetball Admin Login</h1>
            </div>
        </div>
    </header>

    <main class="flex-1 flex items-center justify-center py-12 px-4 sm:px-6 lg:px-8">
        <div class="max-w-md w-full space-y-8">
            <div>
                <h2 class="mt-6 text-center text-3xl font-extrabold">Admin Sign In</h2>
            </div>
            <form class="mt-8 space-y-6" method="POST" action="{{ route('admin.login.store') }}">
                @csrf

                <!-- Session Status -->
                @if (session('status'))
                    <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
                        {{ session('status') }}
                    </div>
                @endif

                <!-- Email Address -->
                <div>
                    <label for="email" class="block text-sm font-medium">Email</label>
                    <input id="email" name="email" type="email" autocomplete="email" required
                           class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm bg-white text-gray-900"
                           value="{{ old('email') }}">
                    @error('email')
                        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Password -->
                <div>
                    <label for="password" class="block text-sm font-medium">Password</label>
                    <input id="password" name="password" type="password" autocomplete="current-password" required
                           class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm bg-white text-gray-900">
                    @error('password')
                        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Remember Me -->
                <div class="flex items-center">
                    <input id="remember_me" name="remember" type="checkbox"
                           class="h-4 w-4 text-yellow-600 focus:ring-yellow-500 border-gray-300 rounded">
                    <label for="remember_me" class="ml-2 block text-sm">Remember me</label>
                </div>

                <div>
                    <button type="submit"
                            class="group relative w-full flex justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md text-[#50482D] bg-[#EAD63D] hover:bg-yellow-400 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-yellow-500">
                        Sign in
                    </button>
                </div>
            </form>
        </div>
    </main>
</body>
</html>
