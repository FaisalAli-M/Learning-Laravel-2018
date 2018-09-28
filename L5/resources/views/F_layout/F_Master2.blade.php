<!DOCTYPE html>
<html lang="en">
    <head>
<meta charset="utf-8" >
<title> Laravel Blade and view </title>
    
    
@stack('cs')    
    </head>
<body>
    <div class="container">
    <h1>Hello</h1>
    <p>My Name Is</p>
    @yield('F_content')
        
    </div>
    
    </body>
@stack('js')    
</html>