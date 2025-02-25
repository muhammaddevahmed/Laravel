
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Laravel</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-r from-purple-600 to-blue-500 min-h-screen flex items-center justify-center">
    <div class="text-center text-white">
        <h1 class="text-5xl font-bold mb-4 animate-bounce">🚀 Welcome to Laravel 🚀</h1>
        <p class="text-lg mb-6">A powerful PHP framework for web artisans.</p>
        
        <a href="{{ url('/home') }}" class="px-6 py-3 bg-white text-purple-600 rounded-lg font-semibold shadow-lg hover:bg-gray-200 transition">
            Get Started
        </a>
    </div>
</body>
</html>
