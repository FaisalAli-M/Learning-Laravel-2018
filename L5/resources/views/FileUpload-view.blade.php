{!! Form::open(array('url' => '/fileupload','files'=>'true')); !!}
         {!! Form::file('image'); !!}
         {!! Form::submit('Upload File'); !!}
         {!! Form::close(); !!}
    