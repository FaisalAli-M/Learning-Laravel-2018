@extends('F_layout.F_Master')
@section('F_content4') 
@include('include-table') 

<!-- alternate of include is each but it has lots of benefits it run foreach and if else condition by itsself no need to use in include file like above -->
<h1> Use of each function for include file </h1>

@each('each-view',$naam,'d','each-empty-view') <!-- it take 4 parameters 1 is include view name 2nd is humen jo data pass krna h mean jis py loop ya condition lagni h 3 parameter is name mean jis name sy variable us krna krna jaisy hun $data as $d krty hen or each mai or 4th parameter is view name agar data empty hoto kiya run ho woh jis view mai define krngy us view ka name like if else condtion -->
@endsection