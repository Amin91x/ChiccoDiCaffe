<!--
Amin Ali-2035693
Ahmad Radwan - 2045887
-->
<!DOCTYPE html>
<html>

<head>
    <title>Chicco Di Cafe</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('CSS/main.css') }}" />
</head>
@include('includes.header')

<body>

    <div class="border">
        <h2 style="text-align: center">OUR MENU</h2>
        <p>
            At Chicco Di Cafe, Customers can expect dishes prepared with premium
            ingredients from scratch and to-order, with service that is refreshingly
            personal, yet professional and vibrant
        </p>
        <a href="{{ url('Menu') }}" class="view-menu-button">View Menu</a>
        <img src="{{ asset('Image/Eggs-Benedict-9.jpg') }}" alt="Dish" class="resized-image" />
    </div>

</body>

@include('includes.footer')

</html>