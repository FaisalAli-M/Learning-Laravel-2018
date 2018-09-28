@foreach($task as $t)
<li> <a href="task/{{$t->id}}"> {{ $t->c_name }} {{ $t->c_email }} </a> </li> <br>


@endforeach