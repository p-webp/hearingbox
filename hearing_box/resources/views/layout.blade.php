<!DOCTYPE html>
<html lang=ja>
    <head>
        <meta charaset='utf-8'>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name='viewport' content='width=dvice-width, initial-scale=1, shrink-to-fit=no'>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        <title>HearingBox</title>
        <style>
            body{
                font-size:16pt;
                color:#000000;
                padding-top:80px;
                }

            .h3{
                font-size:20pt;
            }

            .inline{
                display:inline;
                }

            .brand-text{
                font-size:30px;
            }
            .nav-link{

            }
        </style>
    </head>
    <body>
        <nav class='navbar navbar-expand-md navbar-dark bg-dark fixed-top'>
            <a class='navbar-brand brand-text' href="{{route('companies.index')}}">HearingBox</a>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link inline" href="{{route('about.link')}}">about</a>
                        <a class="nav-link inline" href="{{route('setting')}}">設定</a>
                    </li>
                 </ul>
            </div>
        </nav>
        <div class='container'>
            @yield('content')
        </div>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        @yield('script')
    </body>
</html>