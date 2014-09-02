<!DOCTYPE html>

<html lang="en">

<head   >
    <title>Resource</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    @include('layout.css')

    <!--[if lt IE 9]>
    <script type="text/javascript" src="js/respond.min.js"></script>
    <![endif]-->

</head>

<body data-color="grey" class="flat">

<div id="wrapper">

    @yield('main')

</div>




@include('layout.js')




</body>
</html>
