<html>
    <head>
        <title>App Name - @yield('title')</title>
        <link href="{{ URL::asset('css/app.css') }}" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,600,700&display=swap" rel="stylesheet">
    </head>
    
    <body>
        <header>
            <img class="brand" src="{{ URL::asset('images/legend_logo.png') }}" >
        </header>
        <div class="container">
            @yield('content')
        </div>
    </body>
</html>