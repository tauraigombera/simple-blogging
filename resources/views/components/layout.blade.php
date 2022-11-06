<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js"></script>
    <!-- <link rel="icon" href="{{ url('images/favicon.png') }}"> -->
    <link rel="icon" href="https://simple-blogging-ejgmo.ondigitalocean.app/images/favicon.png">
    <link href="./css/styles.css" rel="stylesheet">
    <!--@vite('resources/css/app.css')-->
    <link href="https://simple-blogging-ejgmo.ondigitalocean.app/build/assets/app.65f22eda.css" rel="stylesheet">
    <title>SimpleBlog</title>
</head>
<body>

{{$slot}}

<x-flash />

<script src="/js/script.js"></script>
</body>
</html>
