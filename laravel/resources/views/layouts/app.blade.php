<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'My App')</title>
    <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" href="/css/{{ (new \App\Controllers\PageController())->getCurrentTheme() }}/style.css">
</head>
<body>
    @include("themes." . (new \App\Controllers\PageController())->getCurrentTheme() . ".components.header")
    
    <div class="container">
        @yield('content')
    </div>
    
    @include("themes." . (new \App\Controllers\PageController())->getCurrentTheme() . ".components.footer")
    
    <script src="/js/app.js"></script>
</body>
</html>
