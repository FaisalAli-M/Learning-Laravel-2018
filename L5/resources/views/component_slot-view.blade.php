<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>


@extends('F_layout.F_Master') <!--  F_layout is a our created folder to Seprate F_Master file but not necessary choice on you -->

@section('sidebar')
    @parent  <!-- here we use master layout Sidbar Section if we want to Change this so overwrite this by new value and remove parent and if we             dont want to use sidebar so here dont give new value or dont write parent so sidebar will not display -->
@endsection

@section('F_content') <!-- F_Content in F_Master file -->

<h1 id="demo">
Faisal Ali
</h1>
 <!-- Json Rendering of j_s http -->

<script>
    var a = @json($arr);
    document.getElementById("demo").innerHTML = a;
</script>

@endsection

 <!------ Component and slot Start ----->

<!--- {{-- @component('F_layout.Component-alert')
<p>another</p>
    
@endcomponent 
--}}

-->
<!-- we can also pass variable as a array --> 
@component('F_layout.Component-alert' , ['title' => 'My title' , 'type' => 'success'])
another 2
    
    <!-- agr hum array mai variable or us ki value nhe dyna chahty to aisy b dy skty hai ek he bt hai -->
    @slot('message')
        the Message from another trick
    @endslot
@endcomponent

    
    </body>
</html>