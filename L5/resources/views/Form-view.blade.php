{!! Form::open(['url'=>'Form-submit']) !!}   {{-- Form Submit Using Url --}}
{{--  {!! Form::open(['action'=>'AdminController@formSubmit']) !!}  --}} {{-- Form Submit Using Action --}}
{{-- Form::open(['route'=>'F_Submit']) --}}   {{-- Form Submit Using Route Name  Hum 3no mai sy koi b method use krskty hen submit k liye--}}

{!! Form::text('one') !!} <?php echo $errors->first('one'); ?> 
{{-- data send in AdminController.php here we can use $error->all() method for display all fields data at a time here we use $error->get('one') for display one field all messages and we can use $errors->first('one') for display field one only fisrst message display --}}

{!! Form::text('two') !!} <?php echo $errors->first('two', "<li class='f'> :message </li>"); ?> 
{{-- here we display message with html tags --}}

{!! Form::submit('submit') !!}

{!! Form::close() !!}
<input type="hidden" name="_token" value="{{ csrf_token() }}">

{{--
For Display all errors 
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
--}}


