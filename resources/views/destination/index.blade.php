<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Destinations</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-white dark:bg-gray-800">
    <style>
        h1{
            margin-left: 0;
        }
    </style>

    @include('welcome')

    <div class="container mx-auto mt-8">
        <h1 class="text-3xl font-bold mb-4 text-gray-800 dark:text-white">Popular Destinations</h1>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Destination 1 -->
            <div class="bg-white dark:bg-gray-700 p-4 rounded shadow-lg">
                <img src="https://via.placeholder.com/300" alt="Destination 1" class="w-full h-48 object-cover mb-4 rounded">
                <h2 style="margin-left: 0" class="text-xl font-bold mb-2 text-gray-800 dark:text-white">City of Lights</h2>
                <p class="text-gray-600 dark:text-gray-400">Explore the vibrant streets and iconic landmarks of the City of Lights. From the Eiffel Tower to charming cafes, there's something for everyone.</p>
                <a href="#" class="text-blue-500 hover:underline dark:text-blue-300">Learn more</a>
            </div>

            <!-- Destination 2 -->
            <div class="bg-white dark:bg-gray-700 p-4 rounded shadow-lg">
                <img src="https://via.placeholder.com/300" alt="Destination 2" class="w-full h-48 object-cover mb-4 rounded">
                <h2 class="text-xl font-bold mb-2 text-gray-800 dark:text-white">Tropical Paradise</h2>
                <p class="text-gray-600 dark:text-gray-400">Escape to a tropical paradise with white sandy beaches, crystal-clear waters, and lush greenery. Perfect for relaxation and water activities.</p>
                <a href="#" class="text-blue-500 hover:underline dark:text-blue-300">Learn more</a>
            </div>

            <!-- Destination 3 -->
            <div class="bg-white dark:bg-gray-700 p-4 rounded shadow-lg">
                <img src="https://via.placeholder.com/300" alt="Destination 3" class="w-full h-48 object-cover mb-4 rounded">
                <h2 class="text-xl font-bold mb-2 text-gray-800 dark:text-white">Mountain Retreat</h2>
                <p class="text-gray-600 dark:text-gray-400">Experience the serenity of a mountain retreat. Hike through scenic trails, enjoy breathtaking views, and connect with nature.</p>
                <a href="#" class="text-blue-500 hover:underline dark:text-blue-300">Learn more</a>
            </div>

            <!-- Add more destinations as needed -->

        </div>
    </div>

</body>

</html>
