<!doctype html>
<html>
<head>
<title>   </title>
</head>
<body>
    <!-- Action Helper Function -->
    <a href="{{action('LearnHelperFucntions@index')}}"> Index Action Method </a> <br>
    <a href="{{action('LearnHelperFucntions@show',[2])}}"> Show Action Method </a> <br>
    
    <!-- Route Helper Function -->
    <a href="{{route('index')}}"> Index Route Method </a> <br>
    <a href="{{route('show',[3])}}"> Show Route Method </a>
    
    
</body>
</html>
