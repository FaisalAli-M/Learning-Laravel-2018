<!DOCTYPE html>
<html lang="en">
    <head>
<meta charset="utf-8" >
<title> Laravel Blade and view </title>
    
    
    
    </head>
<body>
    <div class="container">
    <h1>Hello</h1>
        @section('sidebar') <!-- if any child class want to use this sidebar so it use this section in it if it want to diplay this section data as         same in master layout so it use @parent in child or it want to change the value of this sidebar so it give new value in chlid -->
        <p> This is Master Layout Sidebar </p>
        @show
        
    <p>My Name Is</p>
    @yield('F_content') <!-- yaha yield isliye likha h k jo b class is master ko extend inhert kry us mai jo b chezn hon woh yaha display ho or 'F_content ek name hai jo b class isy inherit krygi usk section mai k is name mai jo b define hoga woh yaha display hogas yaha test2-view,blade.php isy inheri kr rahe h --> 
    
    <!-- Passing data to view and Echoing with Blade and core php syntax in file test2-view.blade.php -->
    @yield('F_content2')
    </div>
    
    <!-- Section OverRiding in file section-view.blade.php-->
    <h1> F_Master </h1>
    @yield('F_content3') 
    
    
       <!-- Include in file test-incl-view.blade.php-->
    <h1> F_Master Include </h1>
    @yield('F_content4') 
</body>
</html>