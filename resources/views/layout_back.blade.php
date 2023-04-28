<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>We-fashion @yield('title')</title>
        <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
        <link rel="stylesheet" href="https://cdn.datatables.net/1.10.2/css/jquery.dataTables.min.css">
        <!-- Fonts -->
        @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    </head>
    <body>

        @include('insert.header')

        @yield('content')

    </body>

    <script type="text/javascript" src="{{ asset('assets/js/jquery-3.6.4.min.js') }}"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.2/js/jquery.dataTables.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#example').DataTable();
        } );
    </script>

    <script>
        $(document).ready(function (){
            $("#addmorebtn").click(function (){
                $(".MultipleRecord .duplicate-row:last-child").clone().appendTo(".MultipleRecord");
            });

            $(document).on('click','.btn-remove', function (){
                    if($(".MultipleRecord .duplicate-row").length > 1)
                    {
                        $(this).parents(".duplicate-row").remove();
                    }
            });

        });
    </script>

    <script type="text/javascript" src="{{ asset('assets/js/script.js') }}"></script>

</html>
