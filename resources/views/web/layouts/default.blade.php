<!DOCTYPE html>
<html>
<head>
 
    @include('web.layouts.nav.head')
    <link class="main-stylesheet" href="@filerev('/css/style.css')" rel="stylesheet" type="text/css"/>
    <link href="//fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet">
    <link rel="shortcut icon" href="">
<body>
 
<header>
    @include('web.layouts.nav.header')
</header>

<div class="page-container">
    @yield('content')
</div>

<footer>
    @include('web.layouts.nav.footer')
</footer>

<script src="@filerev('/js/app.js')" type="text/javascript"></script>
@hasSection('page_js')
@yield('page_js')
@endif 

</body>
</html>
