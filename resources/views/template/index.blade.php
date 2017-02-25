<html>
<head>
    <title>Belajar CRUD pada ArtikelController</title>

    <!-- untuk memanggil data css pada blade laravel menggunakan tutup kurung {} -->
    <link rel="stylesheet" href="{{ asset('material/dist/css/materialize.min.css') }}" >
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
</head>

<body>

@include('template.header')

<div class="container">
    @yield('content')
</div>

<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="{{asset('material/js/materialize.min.js')}}"></script>
<script type="text/javascript">
    (function($){
        $(function(){

            $('.button-collapse').sideNav();

        }); // end of document ready
    })(jQuery); // end of jQuery name space
</script>

</body>
</html>