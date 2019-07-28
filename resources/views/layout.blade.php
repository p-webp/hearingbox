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
            body {
                background-color: #f4f7f8;
                font-size:16pt;
                /*padding-top:80px;*/
            }

            .navbar {
                margin: 2rem 0 2.5rem 0;
            }

            .my-navbar {
                align-items: center;
                background: #333;
                display: flex;
                height: 4rem;
                justify-content: space-between;
                padding: 0 2%;
                margin-bottom: 2rem;
            }

            .my-navbar-brand {
                font-size: 18px;
            }

            .my-navbar-brand,
            .my-navbar-item {
                color: #8c8c8c;
            }
            
            .my-navbar-brand:hover,
            a.my-navbar-item:hover {
                color: #ffffff;
            }

            .table td:nth-child(n) {
                white-space: nowrap;
                width: 1px;
            }

            .form-control[disabled],
            .form-control[readonly] {
                background-color: #fff;
            }

            .list-group-item:hover {
                color: #000000;
                background-color: #e8ecef;
            }

            .list-group-item.active {
                color:#000000;
            }

            .list-group-item {
                color:#000000;
            }
            
            .my-active {
                color: #ffffff;
                background-color: #4EC1E9;
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
    <header>
        <!--!<nav class='navbar navbar-expand-md navbar-dark bg-dark fixed-top'>-->
        <nav class="my-navbar">
            <a class="my-navbar-brand" href="{{route('companies.index')}}">HearingBox</a>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link inline" href="{{route('about.link')}}">about</a>
                        <a class="nav-link inline" href="{{route('setting')}}">設定</a>
                    </li>
                 </ul>
            </div>
        </nav>
    </header>
        <div class='container'>
            @yield('content')
        </div>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        @yield('script')
    </body>
</html>