<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

Route::get('/', function () {
    return view('welcome');
});
// Accessing Urls
Route::get('a_url' , function(){
    echo url()->current() . "<br>";
    echo url()->full()  . "<br>";
    echo url()->previous()  . "<br>"; 
});
// Use Get with Closer Function no need to crate controller
Route::get('/admin' ,  function()
{
    echo "Admin from Closer function use ::get <br>";
   
});
// USe Get with Controller
Route::get('/control','AdminController@faisal'); // Here AdminController is a Class(Controller) name and Faisal its Method and @ use between class and Method Name and These crete in App\Http\Controllers; 

// USe Post with Controller
Route::post('/control','AdminController@user'); // Here AdminController is a Class(Controller) name and User its Method and @ use between class and Method Name and These crete in App\Http\Controllers and here we can also change controller name; 

// get url /control and post url /control both are difffernt and both calling differnt differnt structure because we create differnt struture to boht of them in backend

// Now Disscuse Parameters in Url
// Laravel has very stricky rule if we have define pass 1 Parameter so 1 Parameter must b given not more then 1 or less then 1 other wise error 
//if we have define pass 2 Parameter so 2 Parameter must b given not more then 2 or less then 2 other wise error 
//if we have define int Parameter so int Parameter must b given not string and other 

// one Parameter Closer Function
Route::get('/test1/{par1}',function($par1)
{
    echo "Closer Function Paramer is $par1";
});

// Two Parameter and Create Controller in App\Http\Controllers
Route::get('/test2/{par1}/{par2}', 'AdminController@value');

// Option Parameter Closer Function
Route::get('/test3/{par1}/{par2?}',function($par1,$par2='') // use ? to define optional parameter
{
    echo "Closer Function First Paramer is $par1";
    echo "Closer Function Second Paramer is $par2";
});

// regex use to set data type of parameter
Route::get('/test4/{par1}',function($par1)
{
    echo "Number Passed to Closer Function Paramer is $par1";
})->where(['par1'=>"[0-9]+"]); // use array to set par1 regex key name must same as parameter name

/*
---- Global Constraints ----
If you would like a route parameter to always be constrained by a given regular expression, you may use the pattern method. You should define these patterns in the  boot method of your RouteServiceProvider:

public function boot()
{
    Route::pattern('id', '[0-9]+');

    parent::boot();
}

Once the pattern has been defined, it is automatically applied to all routes using that parameter name:
*/

// ---  Named Route --- 
// Named Route Humen Url ki Flexibility dyta Hai AGr kbhe Pura Project Banany k bd kisi Url ko Change krna parhy to Jaha Jaha woh url Use huwa hai har Jaga Jaga ja kr USy Edit nhe krna parhy isliye NAMED Route Use krty hen URL ka NAAM rakhdyty hen or woh Name sy har jaga khud changes hojati hen

// We Defined URL NAME of Two Types

// (1)
Route::get('/admin/faisal/{name1}',function($name1)
{
    echo "Number Passed to Closer Function Paramer is $name1";
})->where(['name1'=>"[0-9]+"])->name('url-name1');

Route::get('/u' ,function(){
   echo route('url-name1',[123]) ;
});

// Without Main Url Parameter and give Parameter in route method

Route::get('/admin/faisal',function($name1) // Here no Parameter Passed
{
    echo "Number Passed to Closer Function Paramer is $name1";
})->where(['name1'=>"[0-9]+"])->name('url-name2');

Route::get('/u2' ,function(){
   echo route('url-name2',['sortby'=>'UrlName']) ; // Here we can Passed Url its likely to Optional Parameter Because NO Parameter Passed in Main URL
});

//(2)
Route::get('/admin/faisal/dashboard',function($name1) // Here no Parameter Passed
{
    echo "Number Passed to Closer Function Paramer is $name1";
})->where(['name1'=>"[0-9]+"])->name('url-name3');

Route::get('/u3',[ // here we can also use closer function
          'as' => 'base-url',
          'uses' => 'AdminController@url',
        ]);

// ----- Redirects ------
Route::get('/re_d' , function(){
   return redirect('/re_test'); 
});
// we can use return back()->withInput(); method to redirect back to previous page if form validation fails and it is use in form practice so        check html form
//--- Redirecting to Named Routes
Route::get('/re_test', function(){
   return view('redirect-view');
})->name('r_testing');
Route::get('redirect',function(){
   return redirect()->route('r_testing');
});
// we can also pass parameters in Redirecting to Named Routes e.g  return redirect()->route('r_testing',['id'=>1]);
// Populating Parameters Via Eloquent Models
//  If you are redirecting to a route with an "ID" parameter that is being populated from an Eloquent model, you may pass the model itself. The       ID will be extracted automatically: e.g return redirect()->route('profile', [$user]); working same as above 
// If you would like to customize the value that is placed in the route parameter, you should override the getRouteKey method on your Eloquent      model same work as Elequent Model:

// we can also Redirecting to Controller Actions
/*
Route::get('rr','RedirectController@index');
Route::get('/redirectcontroller',function(){
   return redirect()->action('RedirectController@index');
});
if your controller route requires parameters, you may pass them as the second argument to the action method:

return redirect()->action(
    'RedirectController@index', ['id' => 1]
);
*/
/* ---- Redirecting To External Domains
Sometimes you may need to redirect to a domain outside of your application. You may do so by calling the away method, which creates a RedirectResponse without any additional URL encoding, validation, or verification: */
Route::get('/gmail', function(){
    return redirect()->away('https://www.google.com');    
});


// ------ Route Groups
// URLS ki COmmon Functionalities ko br br Define nhe krna Parhy isliye Hum Route Gropus Use krty hen
// or iska Phly Parameter hota hai Ek Arry or is mai hum MiddleWare , as , prefix , Namespace wagera use krty hen or Dusra Parameter hota h Closer Function (Anonymous function)

// ----- In Route Group Use Middileware and NameSpace
Route::group(['middleware'=>'web' , 'namespace'=>'Admin'] , function(){
   Route::get('/ns',function(){
       
   }) ;
     Route::get('/ns2',function(){
       
   }); // Is Route::Group mai Jitny b URL COntrollers Method Aiengy woh Khud Admin NameSpace k sth hongy   
});

// In Route Group Use 'as' to Prefix some name before all Controllers and URl Names 
Route::group(['middleware'=>'web' , 'namespace'=>'Admin' , 'as' => 'faisal-'] , function(){
   Route::get('/ns',[
       'as' => 'dashboard',
       'uses' => 'ControlName@MethodName',
   ]
       
   ); 
//Is Route::Group mai Jitny b URL COntrollers Method Name Aiengy Us sb k Name sy Phly faisal- Ayega use krty wqt qk isy name k sth prefix krdiya h  
    //or Uper Waly COntroller ko Isy Call kiya Jayega " route('faisal-dashborad') etc "
});


// ----- In Route Group Use 'Prefix' to Prefix some name before all URLS 
Route::group(['prefix' => 'faisal-admin-'] , function(){
   Route::get('/dashboard',[
       'as' => 'dashboard',
       'uses' => 'AdminController@dashboard',
   ]
       
   ); 
//Is Route::Group mai Jitny b URLAiengy Us sb k Name sy Phly faisal-admin- Ayega  
    
});
Route::get('/pre', function(){
        echo route('dashboard');
    });


// In Route Group Use 'Domain' to user sub domain according to application e.g faisal.applicationURL.com it not works on local host
/*
Route::group(['domain' => '{domainName}'] , function(){
   Route::get('profile',[
       'as' => 'profile',
       'uses' => 'AdminController@profile',
   ]
       
   ); 
//Is Route::Group mai Jitny b Subdomain Aiengy Unka Domain Name as a First Parameter Recieve hoga  
    
});
*/

// --- Nested Route::group
Route::group(['prefix' => 'faisal-admin'] , function(){
    
    Route::group(['prefix' => 'Subscriber'] , function(){
        Route::get('nested',function(){
           echo "Nested Route Group"; 
        })->name('nest');
    });
    
});
Route::get('/nes', function(){
        echo route('nest');
    });

// Route:any() it mean you can passed all Request post , get , put , patch , delete 
Route::any('anyUrl', function(){
    // in this case if URL Hits no matter what requst you send get , put , delete , patch , post inside this fuction delecare who runs
    // agr hum get use krty hen to woh get ki requst py he fuction call kryga agr post to woh post py he kryga mgr yeh sb py function ko call krdyga bs URl hit hoty he
});

Route::match(['get','post'], 'matchUrl', function(){
    // if get and post reqeust send then inside this code will run
});

// laravel 5.5 Method for Assigning Route Group
Route::middleware(['web'])->group(function () {
    Route::get('/m', function () {
        echo "New Syntax of Route Group";
    });

    Route::get('user/profile', function () {
        // Uses first & second Middleware
    });
});
// here more method i.e  Route::prefix , Route::namespace , Route::domain , Route::name for name prefix


// Agr hum Chahty hen k Route define nhe krn ya humen koi msla hota h ya hum define krna bhool jaty hen br br Routes ko to Iska SOlution Route::Controller is sy Humen br br Routes ko Define nhe krna prhta hai hum ek Controller banaty hen phr us k Methods banaty hen or controller k methods automaticallly us k routes ban jaty hen or url b hit hony lagta hai 

// Step 1 Create Route::Controller
// ... Pending Beacuse not working now ...
//Route::controller('conAdmin','FaisalController');

// ----- View ------
// Determining If A View Exists
Route::get('/ch_view', function(){
   if(view()->exists('test-view')) // or we can write in Facade Formate like View::exists('test-view')
   {
       echo "Yes View is Found";
   }
});

// Creating The First Available View
// Using the first method, you may create the first view that exists in a given array of views.
/*Route::get('/f_ch_view', function(){
    return view()->first(['not-view' , 'other-view' , 'test-view']);
});*/ // Not Working Pending

//-- Passing Data to View here are more then one way to pass data to view choice on Yours to choice as your desires

//1) Method no 1
Route::get('/passView',function()
 {
    // Pass data to View
    $fa = ['ALiyan',
           'Danish',
           'aZHAR',
           'mEHMOOD']; // Data Pass kny k 2 3 tariky hen hum koi sa b use krskty hen jo hamen asan lagy
    // 1)
    return view('test-view', compact('fa')); // yaha hum compact mai ek sth ziada b parameter pass krty hen hum jitny b parrameter pass krngy woh inki array banadyga
    // or hum aist b likh skrty hen dono ka mtlb ek he h 
    //return view('test-view', ['fa'=>$fa]);

});

// 2) Method no 2
Route::get('/passView2',function()
 {
    // Pass data to View
    $fa2 = ['ALiyan',
           'Danish',
           'aZHAR',
           'mEHMOOD']; // Data Pass kny k 2 3 tariky hen hum koi sa b use krskty hen jo hamen asan lagy
    // 1)
    return view('test-view')->with('name', $fa2); // yaha hum ek st ziada b name() bana skty hen Method Chaing return view('test-view')->with('name', $fa2)->with('',)->with('',) ;
    
    
    // 2) ya Phir hum is main 2 parameters ki jaga array b pass krskty hen
    /*  return view('test-view')->with([
        'fname' => $fa2,
        'fadd' => $fa2]);
    */
 });


// 3) Method no 3   
// dynamic varibales
Route::get('/passView3',function()
 {
    // Pass data to View
    $fa3 = ['ALiyan',
           'Danish',
           'aZHAR',
           'mEHMOOD']; // Data Pass kny k 2 3 tariky hen hum koi sa b use krskty hen jo hamen asan lagy
 
    return view('test-view')->withFaisal($fa3); // yaha hum ek st ziada b WithVariableName() bana skty hen Method Chaing return view('test-view')->withNames($fa2)->withAddress($fa2)->withEtc($etc) ;
    
 });

// Sharing Data with all Views
// We have seen how we can pass data to views but at times, there is a need to pass data to all the views. Laravel makes this simpler. There is a method called “share()” which can be used for this purpose. The share() method will take two arguments, key and value. Typically share() method can be called from boot method of service provider. We can use any service provider, AppServiceProvider or our own service provider.

//Change the code of boot method in the file app/Providers/AppServiceProvider.php as shown below.
/*
   public function boot(){
      view()->share('name', 'Virat Gandhi');
   } so name variable and its value available in all views we can echo in all views of our project
*/

// ---- Passing Database Data to View
Route::get('/task', function(){
    $task = DB::table('customers')->select()->get();
    
    return view('tasks.index', compact('task'));
    
});
// -- With Parametet
Route::get('/task/{task}', function($id){
    $task = DB::table('customers')->find($id);
    
    return view('tasks.show', compact('task'));
    
});

// ---- MiddleWare ----
// there are three type of Register and use Middleware 1) middleware this is global and run in all URL hit 2) WOh middleware jin ko ek he sth he chalana h jo alag alag nhe chal skty unhy hum Group Middleware mai Register krty hen like login section 3) Woh middleware jinhy humen kisi specific url py he run krna ho unhy Route Middleware mai Register krty hen all middleware Register in Karnel.php

Route::get('/R_middleware', function()
           { 
    echo "<h1>Faisal</h1>";
})->middleware('F_logger'); // this log Middleware and is register in Route middleware file karnel.php and define in F_loggerMiddleware.php here if we want to set more then one middleware in this URL so we use array like ->middleware(['F_logger','auth','etc'])

//Another way to use Middleware both are valid choice yours
/*
Route::get('/R_middleware', [
'uses' => function()
           { 
    echo "<h1>Faisal</h1>";
},
'middleware' => 'F_Logger' or for array 'middleware' => ['F_logger','auth','etc']
]);
 
*/

// --- Middleware Group ----
/*
Route::get('/R_middleware', function()
           { 
    echo "<h1>Faisal</h1>";
})->middleware('web'); // this is Group name register in Karnel.php on Group Middleware

//Another way to use Middleware both are valid choice yours
/*
Route::get('/R_middleware', [
'uses' => function()
           { 
    echo "<h1>Faisal</h1>";
},
'middleware' => 'F_Logger' or for array 'middleware' => ['web','auth','etc']
]);

*/

// --------- MiddleWare in Route::group -----------
/*
Route::group(['prefix'=>'F_admin' , 'middleware'=>'F_logger'  ] , function() // or 'middleware'=>['F_logger','auth'] 
             {
    
});
*/

// ----------- Middlwear in Route::controllers ---------
/*
Route::controller('/A_Faisal' , [
    'uses' => 'AdminController',
    'middleware' => 'F_logger' // or ['F_logger','auth']
]);
// if we dont want to define middleware here so we define this in our Controller page in Constructor
Route::controller('/A_Faisal' , [
    'uses' => 'AdminController',
  
]);
*/

// ------ Middleware Parameter -----
Route::get('/R_middleware2/{e}', function($e)
           { 
    echo "<h1>Faisal Ali</h1>";
})->middleware('C_R:editor'); // MiddleWare FIle name is CheckRole.php and Register name is C_R

//------ Dependency Injection ---------

Route::get('/DI/{name}','DependencyInjection@D_dashboard');

//---- Dependency Injection via Service container----
Route::get('/Service_container' , function(){
    App::bind("App\L_DI_ServiceContainer\Facebook" , function(){
        return new \App\L_DI_ServiceContainer\Facebook(config('services.facebook'));
    });
    
   $run = App::make('App\L_DI_ServiceContainer\Facebook');
    dd($run->getClientId());
});

//---- Dependency Injection via Service Provider----
// Route::get('/Service_provider_DI' , function(){
   
//  App::bind("App\L_DI_ServiceContainer\Facebook" , function(){
//        return new \App\L_DI_ServiceContainer\Facebook(config('services.facebook'));
//    });   This code written in L_DI_ServiceProvider
  // $run = App::make('App\L_DI_ServiceContainer\Facebook');  // this write in web or any controller method where ypu want 
Route::get('/Service_provider_DI' , 'DependencyInjection@index');

// });

// ------- Blade and Master layout ---------
Route::get('/f_b' , function(){
 return  view('test2-view') ;
});

// ---- Component and slot -------
Route::get('/comp_slot' , function(){
 return  view('component_slot-view') ;
});

// ------ Passing data to view and Echoing through 'Blade' and 'core php' syntax----
Route::get('/f_b2' , function(){
 return  view('test3-view')->with('test',"<h1> Faisal Hacker </h1>")->with('test2',"<h1> Check </h1>") ;
});

// ----- Rendering Json ---- Sometimes you may pass an array to your view with the intention of rendering it as JSON in order to initialize a JavaScript variable. For example <script> var app = <?php echo json_encode($array); </script>
// However, instead of manually calling json_encode, you may use the @json Blade directive: <script> var app = @json($array);</script>
Route::get('/j_s' , function(){
 return  view('test2-view')->with('arr' , ['fa' ,'za' , 'la' , 'ba' ]) ;
});


// ------- Else if in Laravel BlaDe --------
Route::get('/else_if' , function(){
 return  view('else_if-view')->with('data',"Faisal") ;
});

// ------ Loops in Laravel Blade -------
Route::get('/loops' , function(){
 return  view('loops-view')->with('data',"Faisal") ;
});


// ------ When using loops you may also end the loop or skip the current iteration: -------
Route::get('/loop_cb' , function(){
 return  view('loops_cb-view')->with('f_u', [1,2,3,4,5,6,7]) ;
});


// ------ Loop Variable -------
Route::get('/loop_var' , function(){
 return  view('loop-variable-view')->with('f_u', [1,2,3,4,5,6,7]) ;
});

// ------ Forelse in Laravel Blade it is use for to run boht is else or foreach loop run at a time -------
Route::get('/' , function(){
 return  view('for_else-view')->with('data',"Faisal") ;
});

// ------ Switch Case in Laravel Blade -------
Route::get('/switch/{c}' , function($c){
 return  view('switch-view')->with('f',$c) ;
});

// -----Section Override------
Route::get('/s_o' , function(){
 return  view('section-child-view') ; // it is a child of section-view which extends section-view 
});

// ------ @Include in Laravel Blade ------

Route::get('/incl' , function(){
        $fan = [
            ['name' => 'ALiyan'],
            ['name' => 'Danish'],
            ['name' => 'Mehmood'],
            ['name' => 'Azhar'],
           ]; 
 return  view('test-incl-view')->with('naam',$fan) ; // it is a child of section-view which extends section-view 
});

// ------ Stack ------
Route::get('/stack' , function(){
 return  view('stack-view') ; 
});

// ------- Service Injection -------------
/* The @inject directive may be used to retrieve a service from the Laravel service container. The first argument passed to @inject is the name of the variable the service will be placed into, while the second argument is the class or interface name of the service you wish to resolve:

@inject('metrics', 'App\Services\MetricsService')

<div>
    Monthly Revenue: {{ $metrics->monthlyRevenue() }}.
</div>
*/

//------- Extending Blade ------ define in Appservice provider in boot method


// ------ Custom If Statements ------
/*
when defining simple, custom conditional statements. For that reason, Blade provides a Blade::if method which allows you to quickly define custom conditional directives using Closures. For example, let's define a custom conditional that checks the current application environment. We may do this in the  boot method of our AppServiceProvider:
*/
// After define we can use it like this
/*
    @env('local')
        // The application is in the local environment...
    @elseenv('testing')
        // The application is in the testing environment...
    @else
        // The application is not in the local or testing environment...
    @endenv
*/

// --------- LOCALIZATION -------
    // Laravel's localization features provide a convenient way to retrieve strings in various languages, allowing you to easily support multiple languages within your application. Language strings are stored in files within the resources/lang directory. Within this directory there should be a subdirectory for each language supported by the application: e,g resources/lang/es/message.php and so others

    //All language files return an array of keyed strings. For example:

    // --- Configuring The Locale
        Route::get('con_loc/{locale}' , function($locale){
           
            App::setLocale($locale);
            // Determining The Current Locale
            
            $loc = App::getLocale();
            if(App::isLocale('es'))
            {
                echo "<h1> Language is Spanish </h1>";
            }
        });
// ------ Retrieving Translation Strings ------
    Route::get('re_trans' , function(){
       return view('retrieve_trans-view'); 
    });

//  ----Pluralization
Route::get('retrieve_plur' , function(){
    return view('retrieve_plur-view');
});


// ----- DataBase and Insert Reacord -----
Route::get('/DB_insert','F_Database@insert');

// ----- DataBase and Select Reacord -----
Route::get('/DB_select','F_Database@select');

// ----- DataBase and update Reacord -----
Route::get('/DB_update','F_Database@update');

// ----- DataBase and Delete Reacord -----
Route::get('/DB_delete','F_Database@delete');

// ----- DataBase and Select Reacord Using Join Tables -----
Route::get('/DB_select_join','F_Database@QB_Join');

// ----- DataBase and Select Reacord Using RightJoin Tables -----
Route::get('/DB_select_Rjoin','F_Database@QB_RightJoin');


// ----- DataBase and Select Reacord Using LeftJoin Tables -----
Route::get('/DB_select_Ljoin','F_Database@QB_LeftJoin');


// ----- DataBase and Select Reacord Using CrossJoin Tables -----
Route::get('/DB_select_Cjoin','F_Database@QB_CrossJoin');



// ------- Request URL
Route::get('/r_url/f' , 'AdminController@Request_url');
// we can also Accessing The Request Via Route Closures
/*
Route::get('/', function (Request $request) {
    //
});
*/
//--- Retrieving The Request Method
Route::get('/method', function (Request $requ) {
    if($requ->isMethod('get'))
    {
        echo "method is get";
    }
    else
    {
        echo "Method is post";
    }
}); // we can also use this in controller's method

//----- Cookie
Route::get('/cookie/set','AdminController@setCookie');
Route::get('/cookie/get','AdminController@getCookie');

// ----- Attaching Cookies To Responses Laravel 5.5 Documentation Pending and Present in Response


//----- Html Form ----
Route::group(['middleware'=>'web'], function(){ // this middleware use for run section and preserve input fields data
    Route::get('Form' , function()
           {
            return view('Form-view'); 
            });

// ------ Html Form Submit -----
Route::post('Form-submit', [
'uses' => 'AdminController@formSubmit',
'as' => 'F_Submit'

]);
    
//------ Form Insert Update Delete Edit-----
    //----- Also Use Acessor and Mutators and Caarbon Class-----
   
Route::get('u_account/create', 'UAccountController@create')  ;
// INSERT
     //----- Use Mutator with insert data in database --- and it set in Model
Route::post('u_account', 'UAccountController@save')  ;
// View    
     //----- Use Acessor with view data from database --- and it set in Model
Route::get('u_account', 'UAccountController@index')  ;
    
Route::get('u_account/{id}/edit', 'UAccountController@edit')  ;
Route::post('u_account/update/{id}', 'UAccountController@update')  ;
Route::get('u_account/{id}/delete', 'UAccountController@delete')  ;    
    


    
    
    // Session
Route::get('session', 'AdminController@session_C')   ; 
});

// ----- Query Builder -------

// ----- select via query Builder -----
Route::get('/QB_select','F_Database@QB_select');

// File Uploading
Route::get('fileUploadF', function(){
   return view('FileUpload-view'); 
});

Route::get('fileupload', [
'uses' => 'FileUploadController@show',
'as' => 'fileupload'

]);


Route::post('fileupload', [
'uses' => 'FileUploadController@store',
'as' => 'fileupload'

]);

// ------ Mail -------
Route::get('basic_m', 'EmailController@BasicMail');
Route::get('html_email','MailController@html_email');
Route::get('attachment_email','MailController@attachment_email');

// ----- AJAX ----
Route::get('ajax',function(){
   return view('ajax_message_view');
});
Route::post('/getmsg','AjaxController@index');

// Error
Route::get('/error',function(){
   abort(404);
    // we can also pass Message in 404 error page and display on it abort(404 , 'Not PResent');
});

//------ Laravel 5.5 From Laravel Website Documentation
// --Route Model Binding--
    // is mai hum apny Model ko Directly Route k sth bind kr skty hen or database wagera sy usk model k zariye direct data retrieve krskty hen is mai hamara model instance dirct inject hojata h route sy 

    // ---- 1) Implicit Binding  https://laravel.com/docs/5.5/routing#route-model-binding
Route::get('api/customers/{customer}', function (App\Customer $customer) {
    return $customer->c_email;
}); // is mai hum uri mai jo b parameter name dengy usy Apny model k instance k sth bind krngy or phr uska koi b column ki value direct call krskty hen bydefault yeh id naame ka colum lyta h or us sy sb retrive krta hai database sy or yeh backend py yeh query send krta hai select * from `customers` where `id` = url parameter value limit 1
// AGr hum id k ilawa kisi or colum name sy data reterive krna chahty hen to model mai jakr yeh function likhna hoga  public function getRouteKeyName(){return 'column name';}

    // ---- 2) Explicit Binding
    // First use in AppServiceProvider Route::model('user', App\User::class); then all route woh use 'user' url parameter automatically bind with Coustomer model  
//Route::get('/find/{customer}' , function(App\Customer $customer){ return $customer->c_name}); 

// Agr Hum Apni Khud ki Logic Banana Chahty hen to woh b bana skty heb AppServiceProvider mai he

// ------ Resource Controller --------
// PhotoController

Route::resource('Photo','PhotoController');
// Hum Partially b yeh assign krskty hen k konsa method kam kry or konsa nhe kry
/* Route::resource('photo', 'PhotoController', ['names' => [
    'create' => 'photo.build'
]]); or except ki jaga 'only' method b use krskty hai*/

// Hum Resource Route k methods ka Name b Assign krskty hen
/* Route::resource('photo', 'PhotoController', ['names' => [
    'create' => 'photo.build' , 'edit' => 'photo.change'
]]); */
// Naming Resourse Route Parameter we can also pass parameters in Resource route
/*
Route::resource('user', 'AdminUserController', ['parameters' => [
    'user' => 'admin_user'
]]);
*/

// Localizing Resource URIs
// hum Resource Route Main action verbs k name b Change krslty hen jaisy hum url mai craete or edit dyna parhta h to hum edit or create ki jaga kuch b change krskty hai or jo change krngy phr url mai b wohe name dyna parhyga e.g /public/Photo/newcreatename ya /public/Photo/neweditname isk liye AppServiceProvider k boot method mai define krty hai or isk liye method hai  Route::resourceVerbs() 
/*
public function boot()
{
    Route::resourceVerbs([
        'create' => 'crear',
        'edit' => 'editar',
    ]);
}
phr url mai b yehe name dengy to edit or create method run hongy e.g /photos/crear ya /photos/{foto}/editar
*/

/*
Supplementing Resource Controllers
If you need to add additional routes to a resource controller beyond the default set of resource routes, you should define those routes before your call to  Route::resource; otherwise, the routes defined by the resource method may unintentionally take precedence over your supplemental routes:

Route::get('photos/popular', 'PhotoController@method');

Route::resource('photos', 'PhotoController');
*/

// ---- Response ------
// Cookie in Response Chapter Present in Cookie topic
// Redirect in Response Chapter Present in Redirect Topic

// --- Other Response
// The response helper may be used to generate other types of response instances. When the response helper is called without arguments, an implementation of the  Illuminate\Contracts\Routing\ResponseFactory contract is returned. This contract provides several helpful methods for generating responses.

// View Responses pending present in Chapter Response

// JSON Response
Route::get('/J_S_R', function(){
   return response()->json([
       'name' =>'Faisal',
       'id' => 1,
   ]) ;
});
// JSONP Response
Route::get('/J_SP_R', function(Request $req){
   return response()->json([
       'name' =>'Faisal',
       'id' => 1,
   ])->withCallback($req->input('callback')) ;
});
// File Responses (Display Image)
Route::get('/display', function(){
    
    $ds = "uploads/Fasting.pdf";
    return response()->file($ds);
    // Some file response function pending laravel 5.5 documentation in Response 
});
// File Download
Route::get('/down', function(){
   
    $fl = "uploads/1-converted.png";
    return response()->download($fl);
    // return response()->download($fl)->deleteFileAfterSend(true); use if you want to delete file after send
    // Some file downloading function pending laravel 5.5 documentation in Response
});

// ------- Releations and Elequent Model ---------
Route::resource('users','UsersController');
Route::resource('role','RoleController');
Route::resource('Profile','ProfileController');

// ------ Learn Helper Functions ------
Route::get('L_H_F',function(){
   return view('LearnHelperFunctions');  
});
//---- Action Helper Function
Route::get('index','LearnHelperFucntions@index');
Route::get('show/{id}','LearnHelperFucntions@show');

//---- Route Action Function
Route::get('index','LearnHelperFucntions@index')->name('index');
Route::get('show/{id}','LearnHelperFucntions@show')->name('show');

//---- Pagination
Route::get('/pagination', 'LFickerTinkerController@index')  ;

//---- Localization ----- Language Switcher-----
Route::get('/language_switch' , function(){
 return  view('localization-view') ;
});
Route::get('/language/{lang}' , function($lang){
    \Session::put('locale',$lang);
    return  redirect()->back() ;
})->middleware('language_s');


//---- Many to Many RelationShip
   // -- use newuser and newrole model and table

Route::get('/MtoM', function () {
    $roles = App\NewUser::find(1);
    dd($roles->toArray());
    
    
    return view('welcome');
});

// Create helper Functions
Route::get('/c_helperfunction' , function(){
    echo hello() . "<br>"; // this function is create in App.Helpers.fuctions.php and create by me as a helper function
    echo callLang('failed'); // this function is create in app/L_HelperFunction/My_Function.php and create by me as a helper function
} );

//----- HasManyThrough ----

Route::get('/HMT', function () {
    
    dd(App\country::find(1)->postsf->toArray());
    
    
    return view('welcome');
});


