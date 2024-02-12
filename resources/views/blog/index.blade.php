<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blog</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-white dark:bg-gray-800">

    @include('welcome')

    <div class="container mx-auto mt-8">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Blog Post 1 -->
            <div class="bg-white dark:bg-gray-700 p-4 rounded shadow-lg">
                <h2 class="text-xl font-bold mb-2 text-gray-800 dark:text-white">Introduction to Tailwind CSS</h2>
                <p class="text-gray-600 dark:text-gray-400">Learn the basics of Tailwind CSS and how to use it to streamline your web development workflow.</p>
                <a href="#" class="text-blue-500 hover:underline dark:text-blue-300">Read more</a>
            </div>

            <!-- Blog Post 2 -->
            <div class="bg-white dark:bg-gray-700 p-4 rounded shadow-lg">
                <h2 class="text-xl font-bold mb-2 text-gray-800 dark:text-white">Building Responsive Websites with Flexbox</h2>
                <p class="text-gray-600 dark:text-gray-400">Explore the power of Flexbox in creating responsive and flexible layouts for modern web applications.</p>
                <a href="#" class="text-blue-500 hover:underline dark:text-blue-300">Read more</a>
            </div>

            <!-- Blog Post 3 -->
            <div class="bg-white dark:bg-gray-700 p-4 rounded shadow-lg">
                <h2 class="text-xl font-bold mb-2 text-gray-800 dark:text-white">JavaScript ES6 Features You Should Know</h2>
                <p class="text-gray-600 dark:text-gray-400">Discover the exciting features introduced in ECMAScript 2015 (ES6) that can enhance your JavaScript coding experience.</p>
                <a href="#" class="text-blue-500 hover:underline dark:text-blue-300">Read more</a>
            </div>

            <!-- Blog Post 4 -->
            <div class="bg-white dark:bg-gray-700 p-4 rounded shadow-lg">
                <h2 class="text-xl font-bold mb-2 text-gray-800 dark:text-white">Mastering Git: A Guide for Beginners</h2>
                <p class="text-gray-600 dark:text-gray-400">Navigate the world of version control with Git, from basic commands to collaborating on open-source projects.</p>
                <a href="#" class="text-blue-500 hover:underline dark:text-blue-300">Read more</a>
            </div>

            <!-- Add more blog posts as needed -->

        </div>
    </div>

</body>

</html>
