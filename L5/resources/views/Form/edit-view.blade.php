<!doctype html>
<html>
<head>
<title>   </title>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
</head>
    <body>
    
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-sm-offset-3">
                <div class="form-group">
                    <h3> Edit Post </h3>
                </div>
           
                        {!! Form::open(['url'=>'u_account/'.'update/' . $edit->id] , ['class'=>'form-horizontal'] )  !!}   {{-- Form Submit Using Url --}}
                
                    <div class="form-group">

                       {!! Form::text('text', $value = $edit->name, ['class' => 'form-control', 'placeholder' => 'Name']) !!}
                    </div>
                
                    <div class="form-group">

                       {!! Form::email('email', $value = $edit->email, ['class' => 'form-control', 'placeholder' => 'Type email']) !!}
                    </div>    

                    <div class="form-group">

                    </div> 

                        {!! Form::submit('Update' , ['class'=>'btn btn-primary'])  !!}

                        {!! Form::close() !!}
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">

            </div>
        </div>
    </div>

    
    </body>
</html>