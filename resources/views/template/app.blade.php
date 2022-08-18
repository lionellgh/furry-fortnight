
<?php
/*
 ../resources/views/template/app.blade.php
 */
?>

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<html lang="en">

<head>

  @include('template.partials._head')

</head>

<body data-baseURL="{{ url('/') }}">
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->


    <header class="navbar navbar-inverse navbar-fixed-top" role="banner">
        @include('template.partials._header')
    </header><!--/header-->



			<ul class="grid cs-style-3">
	       @yield('content1')
			</ul>

		<!-- Our Portfolio -->

	    <!-- Footer -->
	    <div class="footer">
	        @include('template.partials._footer')
	    </div>

       @include('template.partials._script')

    </body>
</html>
