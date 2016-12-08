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
        <a href='/items'>
        <img src="/css/logo.png" alt="Logo"></a>
    </header>

    <!--<a href="../pagename">Link Label</a>-->


   <nav>
        
            @if(Auth::check())
                <a href='/'>Main</a>
                <a href='/items/create'>Add a new clothing item</a>
                <a href='/logout'>Log out</a>
            @else
                <a href='/'>Main</a>
                <a href='/login'>Log in</a>
                <a href='/register'>Register</a>
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