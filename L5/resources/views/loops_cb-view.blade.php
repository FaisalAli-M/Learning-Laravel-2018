@foreach ($f_u as $user)
    @if ($user == 3)
        @continue
    @endif

    <li>{{ $user }}</li>

    @if ($user == 5)
        @break
    @endif
@endforeach

{!! " <h1> For loop </h1>" !!}

@for ($i = 0; $i < 10; $i++)
        
    @if ($i == 4)
        @continue
    @endif
                      
    The current value is {{ $i }} <br>

@if ($i == 7)
        @break
    @endif

@endfor

{{-- 
You may also include the condition with the directive declaration in one line:

@foreach ($users as $user)
    @continue($user->type == 1)

    <li>{{ $user->name }}</li>

    @break($user->number == 5)
@endforeach
--}}