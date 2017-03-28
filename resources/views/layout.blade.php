<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Teach</title>

    {!! Html::style('assets/css/style.css') !!}

    <!-- Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700|Roboto+Slab:300,700' rel='stylesheet' type='text/css'>


</head>
<body>
<div id="notifications"></div>
<nav class="navbar navbar-default">
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">

                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="https://styde.net" target="_blank">Styde.net</a>
                </div>

                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                   

                  
                </div>
            </div>
        </div>
    </div>
</nav>

@yield('content')

<!-- Scripts -->
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>
<script src="{{ asset('assets/js/app.js') }}"></script>
<script src="{{ asset('assets/js/alert.js') }}"></script>
</body>
</html>
