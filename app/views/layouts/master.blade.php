<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
    <head>

        <title>@yield('title')</title>

        <meta name="viewport" content="width=device-width, initial-scale=1.0" />

        <link rel="stylesheet" href="{{ URL::asset( 'css/vendor/bootstrap/bootstrap.css' ) }}">
        <link rel="stylesheet" href="{{ URL::asset( 'css/beardcms.css' ) }}">

        @yield('css')

    </head>
    <body>
        <!-- Nav Bar -->
        <div class="navbar navbar-inverse navbar-fixed-top">
            <div class="container">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/">BeardCMS</a>
                <div class="nav-collapse collapse navbar-responsive-collapse">
                    <ul class="nav navbar-nav">
                        @foreach( $navitems as $item )
                        <li @if($item->isActive())class="active"@endif><a href="{{ $item->url }}" title="{{ $item->title }}">{{ $item->name }}</a></li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
        <!-- /Nav Bar -->

        <!-- Content -->
        <div id="content" class="container">

            @yield('content')

        </div>
        <!-- /Content -->

        <footer>
            &copy; 2013 Bearded Robot
        </footer>

        <script src="{{ URL::asset( 'packages/jquery/js/jquery-2.0.2.js' ) }}"></script>
        <script src="{{ URL::asset( 'packages/bootstrap/js/bootstrap.js' ) }}"></script>

        @yield('js')

    </body>
</html>