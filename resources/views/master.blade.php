<!DOCTYPE html>
<html>
<head>
    <title>
        @yield('title','P4 - Final:  Jans Closet')
    </title>

    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link href="/css/p4.css" type='text/css' rel='stylesheet'>

        @yield('head')

</head>

<body>

    @if(Session::get('flash_message') != null)
        <div class='flash_message'> {{Session::get('flash_message') }} </div>
    @endif

    <header>
        <a href='/'>
        <img src="/css/logo.png" alt="Logo"></a>
    </header>

        <nav>
            @if(Auth::check())
                <a href='/logout'>Log out</a>
                <a href='/items/create'>Add a new clothing item</a>
                <a href='/'>View my entire closet!</a>
            @else
                <a href='/login'>Log in</a>
                <a href='/register'>Register</a>
                <a href='/'>View my entire closet!</a>
            @endif
       
        </nav>

    <section>
        @yield('content')
    </section>


    <footer>
        &copy; Jannette A. {{ date('Y') }}  
    </footer>

    @yield('body')

</body>
</html>