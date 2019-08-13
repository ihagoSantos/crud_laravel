<html>
    <head>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <title>Cadastro de Produtos</title> 

        <meta name="csrf-token" content="{{ csrf_token() }}">

        <style>
            body{
                padding: 20px;
            }

            .navbar{
                margin-bottom: 10px;
            }
        </style>
    </head>

    <body>
        <div class="container">

            @component('component_navbar',["current"=> $current])
            @endcomponent

            <main role="main">
                @hasSection('body')
                    @yield('body')
                @endif
            </main>
        </div>

    <script src="{{  asset('js/app.js')}}" type="text/javascript"></script>
    </body>
</html>