<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="flex items-center justify-center h-screen bg-gray-100">

    <div class="bg-white p-8 rounded-lg shadow-lg w-96">
        <h2 class="text-2xl font-bold text-gray-800 mb-6 text-center">Login</h2>

        @if(session('error'))
            <p class="text-red-500 text-sm text-center mb-4">{{ session('error') }}</p>
        @endif

        <form method="POST" action="{{ route('login') }}" class="space-y-4">
            @csrf
            <input 
                type="email" 
                name="email" 
                placeholder="Email" 
                required
                class="w-full p-3 border rounded-lg focus:ring-2 focus:ring-blue-400 focus:outline-none"
            >
            <input 
                type="password" 
                name="password" 
                placeholder="Password" 
                required
                class="w-full p-3 border rounded-lg focus:ring-2 focus:ring-blue-400 focus:outline-none"
            >
            <button 
                type="submit" 
                class="w-full bg-blue-500 text-white py-3 rounded-lg shadow-md hover:bg-blue-600 transition">
                Login
            </button>
        </form>

        <p class="mt-4 text-center text-gray-600">
            Don't have an account? 
            <a href="{{ route('register.form') }}" class="text-blue-500 hover:underline">Register here</a>
        </p>
    </div>

</body>
</html>
