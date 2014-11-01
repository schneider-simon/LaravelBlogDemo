<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>@yield('title')</title>

        <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
        <link href="http://bootswatch.com/flatly/bootstrap.min.css" rel="stylesheet">
    </head>
    <body>
        <div class="container">
            <h1>Simons superblog</h1>

            <!-- Area for error and success messages -->
            <div class="flashmessages">
                @if ( Session::get('message') ) <div class="alert alert-success">{{ Session::get('message') }}</div> @endif
                @if ( Session::get('error') ) <div class="alert alert-danger">{{ Session::get('error') }}</div> @endif
            </div>
            <!-- -->



            <!-- The content of the sections "title" and "content" are defined in the child template -->
            <h2>@yield('title')</h2>

             @yield('content')
        </div>
    </body>

</html>