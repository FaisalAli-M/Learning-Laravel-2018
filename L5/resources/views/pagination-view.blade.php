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
                
              <article>
                    @foreach($p as $pa)

<h1>{{$pa->username}}</h1>
<h3>{{$pa->title}}</h3>
<p>{{$pa->body}}</p>
                     {!! Form::submit('Edit' , ['class'=>'btn btn-primary'])  !!} 
                    {!! Form::submit('Delete' , ['class'=>'btn btn-primary'])  !!} 
                  
                    @endforeach
                </article>  
                
            </div>
          <div class="col-sm-12">
            <h1>{{$p->links()}}</h1>
          </div>
        </div>
        
    </body>
</html>    

  




