@foreach($f_u as $m)

{{ "this is total count of loop " . $loop->count }} <br>

    @if($loop->first)
    {{ "FIRST ITERNATION" }} <br>
    @endif

{{ $loop->index }}

{{ "Remaining loop is " . $loop->remaining }}

{{ "loop numbers" . $m  }} <br>



    @if($loop->last)
    {{ "last ITERNATION" }} <br>
    @endif


@endforeach


{{-- If you are in a nested loop, you may access the parent loop's $loop variable via the parent property:

 --}}
@foreach ($f_u as $user)
    @foreach ($f_u as $post)
        @if ($loop->parent->first)
            This is first iteration of the parent loop. <br>
        @endif
{{ $loop->depth }}
    @endforeach
@endforeach