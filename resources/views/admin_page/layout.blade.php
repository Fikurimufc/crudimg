<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Pintereees</title>
        {{HTML::style('assets/bootstrap/css/bootstrap.min.css')}}
        {{HTML::style('assets/font-awesome-4.3.0/css/font-awesome.min.css')}}
        {{HTML::style('assets/material-design/css/bootstrap-material-design.min.css')}}
        {{HTML::style('assets/material-design/css/bootstrap-material-design.min.css.map')}}
        {{HTML::style('assets/material-design/css/ripples.min.css')}}
        
        {{HTML::script('assets/js/jQuery-2.1.4.min.js')}}
        {{HTML::script('assets/bootstrap/js/bootstrap.min.js')}}
        {{HTML::script('assets/material-design/js/material.min.js')}}
        {{HTML::script('assets/masonry/dist/masonry.pkgd.min.js')}}
    </head>
	<body>
		@yield('content')
	</body>
</html>        