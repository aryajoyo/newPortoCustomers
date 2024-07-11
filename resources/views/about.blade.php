<x-layout>
    <x-slot:title>{{$title}}</x-slot:title>
    <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Scrollable Navbar with Tailwind CSS</title>
  <!-- Include Tailwind CSS from CDN -->
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
  <!-- Optional: Add custom styles -->
  <style>
    /* Example custom styles */
    .nav {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      background-color: #1a202c; /* Example background color */
      z-index: 10; /* Ensure it's above other content */
    }

    .content {
      padding-top: 16px; /* Adjust padding to prevent content from being hidden under navbar */
    }
  </style>
</head>
<body>
  <!-- Navbar -->
  

  <!-- Content -->
  <div class="content">
    <!-- Placeholder content to test scrolling -->
    <div class="h-screen bg-gray-100">
      
    </div>
  </div>
</body>
</html>

    <h1></h1>
</x-layout>