<!--
Amin Ali-2035693
Ahmad Radwan - 2045887
-->
<!DOCTYPE html>
<html>

<head>
    <title>Chicco Di Cafe</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('CSS/main.css') }}">
    <script src="{{ asset('email.js') }}" defer></script>
</head>
@include('includes.header')

<body>

    <div class="about-us-box">
        <h2>About Us</h2>

        <p>
            At Chicco Di Cafe, we believe in the power of passion and dedication to create something extraordinary. Our journey began with a dream and a shared love for the art of coffee and the joy it brings to people's lives. Whether it's the rich aroma of a cappuccino, the indulgence of a warm apple crisp, or the joy of a shared moment, each visit to Chicco Di Cafe is an invitation to experience something extraordinary.
        </p>
    </div>

    <div class="contact-box">
        <h2>Contact Information</h2>

        <p>
            Address: Chicco Di Cafe<br>
            123 Café Street<br>
            Coffeeville, CO 12345<br>
            United States<br><br>
            Phone: Main Line - (555) 123-4567<br>
            Reservations - (555) 987-6543<br>
            Email: General Inquiries - info@chiccodicafe.com<br>
            Reservations - reservations@chiccodicafe.com
        </p>
    </div>
</body>
@include('includes.footer')

</html>