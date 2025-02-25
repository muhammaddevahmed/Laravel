<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - Laravel</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 text-gray-900">

  <!-- Navbar -->
  <nav class="bg-white shadow-lg p-4">
        <div class="max-w-6xl mx-auto flex justify-between items-center">
            <h1 class="text-2xl font-bold text-blue-600">My Website</h1>
            <div class="space-x-6">
                <a href="{{ url('/') }}" class="text-gray-700 font-semibold hover:text-blue-600">Home</a>
                <a href="{{ url('/about') }}" class="text-gray-700 font-semibold hover:text-blue-600">About</a>
                <a href="{{ url('/testimonial') }}" class="text-gray-700 font-semibold hover:text-blue-600">Testimonials</a>
                <a href="{{ url('/contact') }}" class="text-gray-700 font-semibold hover:text-blue-600">Contact</a>
            </div>
        </div>
    </nav>
    
    <div class="container mx-auto px-6 py-12">
        <div class="text-center">
            <h1 class="text-4xl font-bold text-blue-600 mb-4">About Us</h1>
            <p class="text-lg text-gray-700 max-w-2xl mx-auto">
                We are a passionate team dedicated to crafting amazing web experiences using Laravel.
                Our mission is to build innovative and efficient solutions for businesses around the world.
            </p>
        </div>

        <div class="mt-10 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Team Member 1 -->
            <div class="bg-white shadow-lg rounded-lg p-6 text-center">
                <img src="https://media.istockphoto.com/id/1399565382/photo/young-happy-mixed-race-businessman-standing-with-his-arms-crossed-working-alone-in-an-office.jpg?s=612x612&w=0&k=20&c=buXwOYjA_tjt2O3-kcSKqkTp2lxKWJJ_Ttx2PhYe3VM=" class="mx-auto rounded-full mb-4">
                <h3 class="text-xl font-semibold">John Doe</h3>
                <p class="text-gray-500">Founder & CEO</p>
            </div>

            <!-- Team Member 2 -->
            <div class="bg-white shadow-lg rounded-lg p-6 text-center">
                <img src="https://media.istockphoto.com/id/1587604256/photo/portrait-lawyer-and-black-woman-with-tablet-smile-and-happy-in-office-workplace-african.jpg?s=612x612&w=0&k=20&c=n9yulMNKdIYIQC-Qns8agFj6GBDbiKyPRruaUTh4MKs=" class="mx-auto rounded-full mb-4">
                <h3 class="text-xl font-semibold">Jane Smith</h3>
                <p class="text-gray-500">Lead Developer</p>
            </div>

            <!-- Team Member 3 -->
            <div class="bg-white shadow-lg rounded-lg p-6 text-center">
                <img src="https://media.istockphoto.com/id/1310814041/photo/portrait-of-a-businesswoman-standing-in-a-a-modern-office.jpg?s=612x612&w=0&k=20&c=rLDYEGaGfbFq6mJPLc2FHjc6KBKyJETu38y4a3x11cM=" class="mx-auto rounded-full mb-4">
                <h3 class="text-xl font-semibold">Mike Johnson</h3>
                <p class="text-gray-500">UI/UX Designer</p>
            </div>
        </div>

        <div class="mt-12 text-center">
            <a href="{{ url('/contact') }}" class="px-6 py-3 bg-blue-600 text-white rounded-lg font-semibold shadow-lg hover:bg-blue-500 transition">
                Contact Us
            </a>
        </div>
    </div>
</body>
</html>
