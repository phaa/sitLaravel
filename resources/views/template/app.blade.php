<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8" />
        <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
        <link rel="icon" type="image/png" sizes="96x96" href="assets/img/favicon.png">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
        <meta name="viewport" content="width=device-width" />

        <title>Credenciamento</title>

        <!-- Bootstrap core CSS     -->
        <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}"/>
        <!-- Animation library -->
        <!--link rel="stylesheet" href="{{ asset('css/animate.min.css') }}"/-->
        <!--  Paper Dashboard e o core CSS    -->
        <link rel="stylesheet" href="{{ asset('css/paper-dashboard.css') }}"/>
        <link rel="stylesheet" href="{{ asset('css/custom-css.css') }}"/>
        <link rel="stylesheet" href="{{ asset('css/toogle.css') }}"/>

        <!--  Fonts and icons precisamos das duas font-aweasome    -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous"/>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css"/>
        <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Poppins:400,500,600' type='text/css'/>

    </head>
    <body>
        <div class="wrapper">
            @include('snippets.sidebar')
            <div class="main-panel">
                @include('snippets.upper_nav')
                <div class="content">
                    <div class="container-fluid">
                        <div class="row">
                            @yield('page_content')
                        </div>
                    </div>
                </div>
                @include('snippets.footer')
            </div>
        </div>

        @include('snippets.scripts')
    </body>
</html>
