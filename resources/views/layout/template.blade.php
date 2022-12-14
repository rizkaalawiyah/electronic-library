<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{URL::to('css/bootstrap/bootstrap.css')}}" rel="stylesheet">
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <title>@yield('title')</title>
</head>
<body>
@include('include/navbar')

@yield('body')


<script src="{{URL::to('bootstrap/js/jquery.js')}}"></script>
<script src="{{URL::to('bootstrap/js/bootstrap.js')}}"></script>
<script type="text/javascript">
	
</script>
</body>
</html>