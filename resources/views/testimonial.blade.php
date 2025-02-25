<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Testimonials</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen flex flex-col items-center justify-center p-6">

 
    
    <h1 class="text-4xl font-bold text-blue-600 mb-6">What Our Clients Say</h1>
    
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 max-w-6xl w-full">
        <!-- Testimonial 1 -->
        <div class="bg-white shadow-lg rounded-lg p-6 text-center">
            <img src="https://media.istockphoto.com/id/1386217759/photo/portrait-of-a-confident-young-businesswoman-standing-against-an-urban-background.jpg?s=612x612&w=0&k=20&c=fAzBj4UAksz3wwAjXxKxByZMqDSuqQZSTij7jBiPtJc=" class="mx-auto rounded-full mb-4">
            <p class="text-gray-700 italic">"Amazing service! Highly recommend for quality and professionalism."</p>
            <h3 class="text-lg font-semibold mt-4">John Doe</h3>
            <p class="text-gray-500">CEO, Company XYZ</p>
        </div>

        <!-- Testimonial 2 -->
        <div class="bg-white shadow-lg rounded-lg p-6 text-center">
            <img src="https://sb.kaleidousercontent.com/67418/1672x1018/6463a5af0d/screenshot-2022-05-24-at-15-22-28.png" class="mx-auto rounded-full mb-4">
            <p class="text-gray-700 italic">"Their expertise helped our business grow exponentially!"</p>
            <h3 class="text-lg font-semibold mt-4">Jane Smith</h3>
            <p class="text-gray-500">Marketing Director</p>
        </div>

        <!-- Testimonial 3 -->
        <div class="bg-white shadow-lg rounded-lg p-6 text-center">
            <img src="https://plus.unsplash.com/premium_photo-1661767839904-bb3c4670750b?fm=jpg&q=60&w=3000&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MXx8cHJvZmVzc2lvbmFsJTIwcGVvcGxlfGVufDB8fDB8fHww" class="mx-auto rounded-full mb-4">
            <p class="text-gray-700 italic">"Best decision ever! Their work is top-notch and reliable."</p>
            <h3 class="text-lg font-semibold mt-4">Michael Lee</h3>
            <p class="text-gray-500">Freelancer</p>
        </div>
    </div>

    <div class="mt-8">
        <a href="{{ url('/') }}" class="px-6 py-3 bg-blue-600 text-white rounded-lg font-semibold shadow-lg hover:bg-blue-500 transition">
            Back to Home
        </a>
    </div>
</body>
</html>
