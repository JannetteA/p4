<!DOCTYPE html>
<html>
<head>
    <title>
        @yield('title','P4 - Final:  Jans Closet')
    </title>

    <meta charset='utf-8'>
    <link href="/css/p4.css" type='text/css' rel='stylesheet'>

        @yield('head')

</head>

<body>

    <header>
        <a href='/items'>
        <img src="/css/logo.png" alt="Logo"></a>
    </header>


    <nav>
        <a href="/items">Home</a>
        <!--<a href="../pagename">Link Label</a>-->
        <a href="/items/show">View all clothing items</a>
        <a href="/items/create">Add a new clothing item</a>
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