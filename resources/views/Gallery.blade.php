<!-- 
Amin Ali-2035693
Ahmad Radwan - 2045887
-->
<!DOCTYPE html>
<html>

<head>
    <title>Chicco Di Cafe</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('CSS/main.css') }}">
</head>

<body>
    @include('includes.header')

    <div class="gallery">
        <!-- First Row -->
        <div class="gallery-item">
            <img src="{{ asset('Image/risotto.jpg') }}" alt="Image 1">
        </div>
        <div class="gallery-item">
            <img src="{{ asset('Image/roasted turkey.jpg') }}" alt="Image 2">
        </div>
        <div class="gallery-item">
            <img src="{{ asset('Image/night.jpg') }}" alt="Image 3">
        </div>

        <!-- Second Row -->
        <div class="gallery-item">
            <img src="{{ asset('Image/soup.jpg') }}" alt="Image 4">
        </div>
        <div class="gallery-item">
            <img src="{{ asset('Image/mushrooms.jpg') }}" alt="Image 5">
        </div>
        <div class="gallery-item">
            <img src="{{ asset('Image/crostini.jpg') }}" alt="Image 6">
        </div>

        <!-- Add more rows and images as needed -->
        <div class="gallery-item">
            <img src="{{ asset('Image/mint.jpg') }}" alt="Image 7">
        </div>
        <div class="gallery-item">
            <img src="{{ asset('Image/nutlatte.png') }}" alt="Image 8">
        </div>
        <div class="gallery-item">
            <img src="{{ asset('Image/spicychai.jpg') }}" alt="Image 9">
        </div>

        <div class="gallery-item">
            <img src="{{ asset('Image/jazznight.jpg') }}" alt="Image 10">
        </div>
        <div class="gallery-item">
            <img src="{{ asset('Image/night.jpg') }}" alt="Image 11">
        </div>
        <div class="gallery-item">
            <img src="{{ asset('Image/bar.jpeg') }}" alt="Image 12">
        </div>

</body>
@include('includes.footer')

</html>