@extends('F_layout.F_Master') <!--  F_layout is a our created folder to Seprate F_Master file but not necessary choice on you -->

@section('F_content2') <!--To Run this use URL /f_b2 and F_Content in F_Master file -->

<!-- Echoing Data via Core Php Syntax it Run all Html and Script tags so it is Unsecure -->
<?= $test ?>
<?php echo $test ?>

<!-- Echoing Data via Laravel Blade Syntax it scape all Html elements and Script tags and not Run these elements and display them same to same so it is secure for form validation and hackers attacks -->
{{$test}} 


<!-- incase If we want to run all Html elements and script tags which is passing through view and want to use Laravel Blade syntax so use -->
{!! $test !!} 

<!-- we can also use functions in blade syntax -->
{{ date('d M Y') }} <br> <br>

<!-- agr hum javascript use krna chahty hen or binding wagera krna chahty hen to uska syntax b same he hota hai "double curly braces" mgr laravel mai sirf aisy likh dyny sy binding nhe hogi javascript ki qk laravel blade "double curly braces" is syntx ko raw php py convert krta hai or then variable ki value mai to yeh "double curly braces" ;synatx to khatam krdyga woh or binding k liiye usy syntax milyga he nhe k woh binding kr skty to aisy mai humen laravel blade ko batana parhta h k "double curly braces" syntax ko parse nhe kro isy same to same aagy jalny do ta k aagy binding ho skty to is k liye hum @ sing use krty hen is "double curly braces" syntax sy phly 
-->

@{{ $test }} <br> <br>


<!-- use short code of laravel for conditions 
Terminator Operator Short or long Code code -->

<!--  Normal for all -->
    
    {{isset($test2) ? $test2 : 'Not Define variable'}} <br> <br>

<!--  Short for Laravel -->
{{ $data or 'Not Define'}}

<!-- both Perform case function and logic but difference of short and long code and more readable and understand able this is specaility of laravel -->
@endsection