<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title' , 'MyWebsite')</title>
</head>
<body>
    <ul>
    <li><a href="/">Home</a></li>
        <li><a href="/contact">contact us</a> for more.</li>
        <li><a href="/about">About Us</a></li>
    </ul>
    @yield('content')
</body>
</html>