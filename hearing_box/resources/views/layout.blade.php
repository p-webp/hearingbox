<!DOCTYPE html>
<html lang=ja>
    <head>
        <meta charaset='utf-8'>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name='viewport' content='width=dvice-width, initial-scale=1, shrink-to-fit=no'>
        <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css'>
        <title>HearingBox</title>
        <style>
            body {
                    font-size:16pt;
                    color:#000000;
                    padding-top:80px;
                }
        </style>
    </head>
    <body>
        <nav class='navbar navbar-expand-md navbar-dark bg-dark fixed-top'>
            <a class='navbar-brand' href={{route('companies')}}>HearingBox</a>
        </nav>
        <div class='container'>
            @yield('content')
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script><!-- Scripts（Jquery） -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script><!-- Scripts（bootstrapのjavascript） -->
    </body>
</html>