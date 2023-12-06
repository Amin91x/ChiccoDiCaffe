<!DOCTYPE html>
<html lang="en">

<div>
    @include('includes.header')

</div>

<head>
    <title> Chicco Di Caffe</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('CSS/main.css') }}" />
</head>



<body class="cv-body">


    <div class="grid place-items-center">
        <object height="1100" width="900" data="{{ asset('CSS/My CV.pdf') }}" type="application/pdf">
            <p>Your browser doesn't have a PDF plugin.
                Instead you can <a href="{{ asset('CSS/My CV.pdf') }}">CLICK TO DOWNLOAD CV.</a></p>
        </object>

    </div>

</body>
<div>
    @include('includes.footer')
</div>


</html>