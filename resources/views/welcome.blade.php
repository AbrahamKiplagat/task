<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/dark-mode-toggle@2.0.0/dist/dark-mode-toggle.min.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Open Sans', sans-serif;
            background-color: #f3f4f6; /* Light grey background */
        }

        /* Styling for navigation links */
        .nav-link {
            color: #2c3e50;
            background-color: #ecf0f1;
        }

        .nav-link:hover {
            color: #3498db;
            background-color: #bdc3c7;
        }

        .nav-link-dark {
            color: #ecf0f1;
            background-color: #2c3e50;
        }

        .nav-link-dark:hover {
            color: #3498db;
            background-color: #34495e;
        }

        /* Styling for header */
        .page-specific {
            color: #3498db; /* Blue color for h1 */
            font-size: 5rem; /* Increase font size */
            text-align: center; /* Center align the text */
            margin-bottom: 1rem;
            margin-left: 10rem;
            margin-right: 10rem;
            padding: 1rem; /* Add padding for better spacing */
            background-color: #ffffff; /* White background */
            border-radius: 8px; /* Rounded corners */
        }

        .page-specific-1 {
            color: #e74c3c; /* Red color for h2 */
            font-size: 3rem; /* Adjust font size for the secondary heading */
            text-align: center; /* Center align the text */
            margin-bottom: 1rem;
            margin-left: 10rem;
            margin-right: 10rem;
        }

        /* Styling for text */
        .page-specific-2 {
            color: #7f8c8d;
            font-size: 1.5rem; /* Increase font size */
            text-align: center; /* Center align the text */
            margin-left: 10rem;
            margin-right: 10rem;
        }

        /* Styling for buttons */
        .page-specific-3 {
            display: inline-block;
            padding: 0.75rem 1.5rem;
            margin-top: 1rem;
            font-size: 1.2rem;
            color: #fff;
            background-color: #3498db;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            margin-left: 10rem;
            margin-right: 10rem;
        }

        .page-specific-4 {
            display: inline-block;
            padding: 0.75rem 1.5rem;
            margin-top: 1rem;
            font-size: 1.2rem;
            color: #fff;
            background-color: #e74c3c;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            margin-left: 1rem;
        }
    </style>
    <title>Laravel</title>
</head>

<body class="bg-white dark:bg-gray-800">

    <div style="text-align: center" class="relative pt-6 px-4 sm:px-6 lg:px-8">
        <nav class="relative flex items-center justify-between sm:h-10 lg:justify-end" aria-label="Global">

            <div class="hidden md:block md:pr-4 md:space-x-8">
                <!-- Other parts of your HTML document remain unchanged -->
                <a href="{{ route('destination') }}" class="nav-link py-2 px-4 rounded">Destination</a>
                <a href="{{ route('blog') }}" class="nav-link py-2 px-4 rounded">Blog</a>
                <a href="{{ route('about-us') }}" class="nav-link py-2 px-4 rounded">About Us</a>
                <a href="{{ route('login') }}" class="nav-link py-2 px-4 rounded">Login</a>
                <!-- Add more navigation links or other content here -->
            </div>
        </nav>
        <h2 class="page-specific">What is </h2>
        <h1 class="page-specific-1">your destination?</h1>
        <p class="page-specific-2">Curate your bucket list and keep track of your next trips. Search for the most popular destinations on our planet</p>

        <!-- Buttons -->
        <button class="page-specific-3" style="margin-right: 0">Explore Destinations</button>
        <button class="page-specific-4" style="margin-left: 0">Learn More</button>

        <!-- Add more content or elements here -->

    </div>

</body>

</html>
