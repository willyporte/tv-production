<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Simple CRUD</title>

    <!-- Fonts -->
    {{ Html::style('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css') }}
    {{ Html::style('https://fonts.googleapis.com/css?family=Catamaran:400,100,300,700') }}

            <!-- Styles -->
    {{ Html::style('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css') }}


</head>
<body>


@yield('content')

        <!-- JavaScripts -->
{{ Html::script('https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js') }}
{{ Html::script('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js') }}


@yield('scripts')

</body>
</html>
