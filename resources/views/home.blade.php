<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home | Laravel Website</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">

    <!-- Navbar -->
    <nav class="bg-white shadow-lg p-4">
        <div class="max-w-6xl mx-auto flex justify-between items-center">
            <h1 class="text-2xl font-bold text-blue-600">My Website</h1>
            <div class="space-x-6">
                <a href="{{ url('/') }}" class="text-gray-700 font-semibold hover:text-blue-600">Home</a>
                <a href="{{ url('/about') }}" class="text-gray-700 font-semibold hover:text-blue-600">About</a>
                <a href="{{ url('/testimonial') }}" class="text-gray-700 font-semibold hover:text-blue-600">Testimonials</a>
                <a href="{{ url('/contact') }}" class="text-gray-700 font-semibold hover:text-blue-600">Contact</a>
                <a href="{{ url('/index') }}" class="text-gray-700 font-semibold hover:text-blue-600">Students</a>
                <a href="{{ url('/users') }}" class="text-gray-700 font-semibold hover:text-blue-600">Users</a>
                <a href="{{ url('/selectUsers') }}" class="text-gray-700 font-semibold hover:text-blue-600">Login Users</a>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <header class="bg-blue-600 text-white text-center py-20">
        <h1 class="text-5xl font-bold">Welcome to Our Website</h1>
        <p class="mt-4 text-lg">We provide the best services to help you grow your business.</p>
        <a href="{{ url('/about') }}" class="mt-6 inline-block px-6 py-3 bg-white text-blue-600 rounded-lg font-semibold shadow-lg hover:bg-gray-200 transition">
            Get Started
        </a>
    </header>

    <!-- Features Section -->
    <section class="max-w-6xl mx-auto mt-16 px-4">
        <h2 class="text-3xl font-bold text-center text-gray-800">Our Features</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mt-8">
            <!-- Feature 1 -->
            <div class="bg-white p-6 rounded-lg shadow-lg text-center">
                <h3 class="text-xl font-semibold text-blue-600">High Quality</h3>
                <p class="mt-2 text-gray-600">We ensure top-notch services for all our clients.</p>
            </div>
            <!-- Feature 2 -->
            <div class="bg-white p-6 rounded-lg shadow-lg text-center">
                <h3 class="text-xl font-semibold text-blue-600">Expert Team</h3>
                <p class="mt-2 text-gray-600">Our professionals bring years of experience.</p>
            </div>
            <!-- Feature 3 -->
            <div class="bg-white p-6 rounded-lg shadow-lg text-center">
                <h3 class="text-xl font-semibold text-blue-600">Great Support</h3>
                <p class="mt-2 text-gray-600">We provide 24/7 customer support for all clients.</p>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="bg-gray-200 mt-16 py-16 text-center">
        <h2 class="text-3xl font-bold text-gray-800">What Our Clients Say</h2>
        <p class="text-gray-600 mt-2">See what our happy clients have to say about us.</p>
        <a href="{{ url('/testimonials') }}" class="mt-6 inline-block px-6 py-3 bg-blue-600 text-white rounded-lg font-semibold shadow-lg hover:bg-blue-500 transition">
            Read Testimonials
        </a>
    </section>

    <a href="table">Table</a>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white text-center py-6 mt-16">
        <p>&copy; 2025 My Website. All rights reserved.</p>
    </footer>

</body>
</html>