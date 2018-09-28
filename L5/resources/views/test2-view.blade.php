

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
