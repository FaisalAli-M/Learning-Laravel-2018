<!-- jb hum loops normal php mai Krty hen to to humen br br php tag open close then html elements code dyna parhta h like
<?php /* for(condition){ ?>
    <div class="1"> ...... </div>

<?php } */ ?>
to youh php boht ghech pech hojati h iska laravel mai boht easy or read able method hai or is mai for, while, foreach sy phly @ lagaty hen or phr br br php k tags open close nhe krny parhty hen of last mai endfor , endwhile , end foreach krdyty hen-->

@for($i=1 ; $i<5 ; $i++)
    <div style="border: 1px solid red">
    <h1>{{$i}}</h1>
    <p>{{$data}}</p>
    </div>

@endfor

<!-- aisy he while , foreach loop wagera b laga skty hen bs sb sy phly @ lagyga o break wagera sy phly b 

@foreach ($users as $user)
    <p>This is user {{ $user->id }}</p>
@endforeach



@while (true)
    <p>I'm looping forever.</p>
@endwhile

-->