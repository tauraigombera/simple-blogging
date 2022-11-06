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
    <title>SimpleBlog</title>
    @vite('resources/css/app.css')

    <!-- Three.js animation scripts-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r75/three.min.js" ></script>
    <script src=" https://s3-us-west-2.amazonaws.com/s.cdpn.io/175711/TextGeometry.js" ></script>
    <script src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/175711/FontUtils.js" ></script>
    <script src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/175711/pnltri.min.js" ></script>
    <script src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/175711/droid_sans_bold.typeface.js" ></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.18.0/TweenMax.min.js" ></script>
    <script src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/175711/bas.js" ></script>
    <!-- End of Three.js animation scripts-->
</head>
<body>

{{$slot}}

<x-flash />

<script src="/js/script.js"></script>
<script src="/js/animation.js"></script>
</body>
</html>
