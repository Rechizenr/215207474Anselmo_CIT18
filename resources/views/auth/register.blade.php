<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="flex items-center justify-center h-screen bg-gray-100">

    <div class="bg-white p-8 rounded-lg shadow-lg w-96">
        <h2 class="text-2xl font-bold text-gray-800 mb-6 text-center">Register</h2>

        @if ($errors->any())
            <ul class="text-red-500 text-sm text-center mb-4">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif

        <form method="POST" action="{{ route('register') }}" class="space-y-4">
            @csrf
            <input 
                type="text" 
                name="name" 
                placeholder="Name" 
                required
                class="w-full p-3 border rounded-lg focus:ring-2 focus:ring-blue-400 focus:outline-none"
            >
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
                Register
            </button>
        </form>

        <p class="mt-4 text-center text-gray-600">
            Already have an account? 
            <a href="{{ route('login.form') }}" class="text-blue-500 hover:underline">Login here</a>
        </p>
    </div>

</body>
</html>
