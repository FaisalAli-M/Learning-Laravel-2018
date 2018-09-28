<!-- jb hum if else normal php mai Krty hen to to humen br br php tag open close then html elements code dyna parhta h like
<?php /* if(condition){ ?>
    <div class="1"> ...... </div>
<?php } ?>

<?php else if(condition){ ?>
    <div class="2"> ...... </div>
<?php } ?>

<?php else { ?>
    <div class=""> ...... </div>
<?php } */ ?>
to youh php boht ghech pech hojati h iska laravel mai boht easy or read able method hai or is mai if sy phly @ lagaty hen or phr br br php k tags open close nhe krny parhty hen of last mai end if kedyty hen-->

@if($data == "Faisal")
<div><h1>Name is Faisal ALi</h1></div>

@elseif($data == "Danish")
<div><h1>Name is Danish</h1></div>

@else
<div><h1>Unknown Name Define</h1></div>


@endif


 <!-- agr hum ! ki condition use krna chahty hen e.g if(!LogIn) wagera to is k liye laravel mai ek function hai "unless" ka @ k sth e.g  unless(LogIn) back hand py laravel b if(!LogIn) yehe kam krta h isy set krny k liye Laavel ny hum bs ek Option k tor pyyeh function diya h code ko zaida readable banany k liye -->

@unless($data == "Faisal") <!-- this is equvalent to this code $data != Faisal boht can be use choice yours
<div><h1>Name is Not Faisal ALi</h1></div>

@else
<div><h1>Name is Faisal ALi</h1></div>

@endif