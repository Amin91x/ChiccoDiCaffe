<head>
<link rel="stylesheet" type="text/css" href="{{ asset('CSS/Header.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('CSS/print.css') }}">
</head>
<header class = "php-header noPrint">
    <a href="{{ url('Home') }}">
        <img src="{{ asset('Image/Chicco Di Cafe Logo.jpg') }}" alt="Chicco Di Cafe" class="bordered-image">
    </a>
</header>
<nav class = "noPrint">
    <a href="{{ url('Menu') }}">Menu</a>
    <a href="{{ url('Specials') }}">Specials</a>
    <a href="{{ url('gallery') }}">Gallery</a>
    <a href="{{ url('about') }}">About Us</a>
    <a href="{{ url('feedback') }}">Feedback</a>
    <a href="{{ url('resumes2') }}">Resume</a>
</nav>