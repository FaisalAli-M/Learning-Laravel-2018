
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

        <div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      @if(Session::has('locale'))
        {{session('locale')}}
      @else
        {{Config::get('app.locale')}}
      @endif
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item" href="{{url('language\en')}}">English</a>
    <a class="dropdown-item" href="{{url('language\ur')}}">Urdu</a>

  </div>
</div>
<form>
 
      <br>
      <br>
    <label for="exampleInputEmail1" class="col-md-4 control-label <?php if(App::isLocale('ur')) echo 'float-xl-right'  ?>" >{{__('forms.email')}}</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>

  <div class="form-group">
    <label for="exampleInputPassword1" class="col-md-4 control-label <?php if(App::isLocale('ur')) echo 'float-xl-right'  ?>" >{{__('forms.password')}}</label>
    <input type="text" class="form-control mb-2 mr-sm-2" id="exampleInputPassword1" placeholder="Password">
  </div>
  <div class="form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">{{__('forms.check')}}</label>
  </div>
  <button type="submit" class="btn btn-primary">{{__('forms.submit')}}</button>
</form>
        
    </body>
</html>