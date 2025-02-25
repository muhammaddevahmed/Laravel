<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen flex items-center justify-center">

      

    <div class="bg-white shadow-lg rounded-lg p-8 max-w-lg w-full">
        <h1 class="text-3xl font-bold text-blue-600 text-center">Contact Us</h1>
        <p class="text-gray-600 text-center mt-2">We'd love to hear from you! Fill out the form below.</p>

        <form action="#" method="POST" class="mt-6">
            <div class="mb-4">
                <label class="block text-gray-700 font-semibold">Name</label>
                <input type="text" name="name" class="w-full p-3 border rounded-lg focus:ring focus:ring-blue-300" placeholder="Your Name" required>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 font-semibold">Email</label>
                <input type="email" name="email" class="w-full p-3 border rounded-lg focus:ring focus:ring-blue-300" placeholder="Your Email" required>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 font-semibold">Message</label>
                <textarea name="message" rows="4" class="w-full p-3 border rounded-lg focus:ring focus:ring-blue-300" placeholder="Your Message" required></textarea>
            </div>
            <button type="submit" class="w-full bg-blue-600 text-white py-3 rounded-lg font-semibold hover:bg-blue-500 transition">
                Send Message
            </button>
        </form>

        <div class="mt-6 text-center">
            <a href="{{ url('/testonomial') }}" class="text-blue-600 hover:underline">Testonomials</a>
        </div>
    </div>
</body>
</html>
