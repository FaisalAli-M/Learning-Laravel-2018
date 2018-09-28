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
      <div class="row">
            <div class="col-sm-6 col-sm-offset-3">
                 @if(session('message'))
                    <p class="alert alert-success"> {{session('message')}}  </p>
                @endif
              <article>
                    @foreach($see as $se)
                    <h1> {{ $se->name }} </h1>
                    <p> {{ $se->email }} </p>
                  
                    <p> {{ $se->created_at->diffForhumans()}}</p> <!-- this is carbon class method in Model Mutators direct only work in created at and updated at columns agr hum chahty hen k carbon class hamari dusru feilds py b work kry to is k liye model mai us colum ko define krngy phly --> 
                  
                    <p> Your Age is {{$se->dob->age}} years </p> <!-- yeh humny apny custom column py carbon class use ki h is k liye isy phly model mai define kiya h or carbon class k or functions k bary mai laravel ki web py mutator mai jakr dekh skty hai -->
                  
                    <a href="{{url('u_account/'. $se->id.'/edit')}}"> {!! Form::submit('Edit' , ['class'=>'btn btn-primary'])  !!} </a>
                    <a href="{{url('u_account/'. $se->id.'/delete')}}"> {!! Form::submit('Delete' , ['class'=>'btn btn-primary'])  !!} </a>
                  
                    @endforeach
                </article>  
            </div>
        </div>
        
    </body>
</html>    

  