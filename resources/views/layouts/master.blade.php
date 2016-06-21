<!doctype html>
<html>
<head>
    <title>
        @yield('title','Nutrition Counseling Center')
    </title>

    <meta charset='utf-8'>

    <meta name='viewport' content='width=device-width, initial-scale=1'>

    <link href='https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css' rel='stylesheet'>

    <!-- Latest compiled and minified CSS -->
    <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css' integrity='sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7' crossorigin='anonymous'>
    <link href='https://maxcdn.bootstrapcdn.com/bootswatch/3.3.5/lumen/bootstrap.min.css' rel='stylesheet'>

    <link href='/css/style.css' rel='stylesheet'>

    {{-- Yield any page specific CSS files or anything else you might want in the <head> --}}
    @yield('head')

</head>
<body>

    <header>
        <nav class='navbar navbar-default navbar-fixed-top'>
          <div class='container'>
              <div class='navbar-header'>
                <button type='button' class='navbar-toggle collapsed' data-toggle='collapse' data-target='#bs-example-navbar-collapse-1' aria-expanded='false'>
                  <span class='sr-only'>Toggle navigation</span>
                  <span class='icon-bar'></span>
                  <span class='icon-bar'></span>
                  <span class='icon-bar'></span>
                </button>
                <a class='navbar-brand' href='/'>Nutrition Counseling Center</a>
              </div>
          <div class='collapse navbar-collapse' id='bs-example-navbar-collapse-1'>
            <ul class='nav navbar-nav'>
                <li><a href='/about'>About</a></li>
                <li><a href='/services'>Services</a></li>
                <li><a href='/testimonials'>Testimonials</a></li>
                <li><a href='/directions'>Directions</a></li>
                <li><a href='/contact'>Contact</a></li>
            </ul>
        </div>
        </nav>
    </header>

    <section>
        <div class='container'>
            {{-- Main page content will be yielded here --}}
            @yield('content')
        </div>
    </section>

    <footer>
        &copy; {{ date('Y') }} &nbsp;&nbsp;
    </footer>

    <script src='https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js'></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js' integrity='sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS' crossorigin='anonymous'></script>

    <!-- Active navbar indicator, from http://totalprogus.blogspot.com.br/2013/12/bootstrap-add-active-class-to-li.html -->
    <script>
        $(document).ready(function() {
            $('a[href="' + this.location.pathname + '"]').parent().addClass('active');
        });
    </script>

    <!-- Analytics -->
    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

        ga('create', '<?php echo env('ANALYTICS_ID') ?>', 'auto');
        ga('send', 'pageview');
    </script>

    {{-- Yield any page specific JS files or anything else you might want at the end of the body --}}
    @yield('body')

</body>
</html>
