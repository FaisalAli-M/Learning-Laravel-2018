<?php
namespace App\Http\Controllers;
//For new mthod of receving input data
use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Input; // Import use old method of receive input field data or isy app.php mai alias mai b enter kr skty hai is sy hum isy har page py use kr sakengy like 'Input' => Illuminate\Support\Facades\Input:class 
use Illuminate\Support\Facades\Validator; // use for validation
use Illuminate\Http\Response ; // for cookie
use Illuminate\Validation\Rule;

class AdminController extends Controller
{
    public function faisal()
    {
        echo 'Controller and its Method Create in AdminController.php ';
    }
      public function user()
    {
        echo 'Controller and its Method Create in AdminController.php ';
    }
     public function value($par1 , $par2)
      {
        echo "From Controller First Parameter is $par1 and second Parameter is $par2";
      }
    public function url()
    {
         echo route('url-name3',['sortby'=>'Name']) ;
    }
    /*
      public function profile($domainName)
    {
         echo $domainName;
    }
    */
    // ---Middleware in controller
    /*
    public function __construct()
    {
        $this->middleware('F_logger',[ // 1st parameter is middleware name and second parameter is selection method name
            'except' => 'user' // or ['user','url'] mean this middle work except these methods of function urls
        ]); 
         $this->middleware('F_logger',[ // 1st parameter is middleware name and second parameter is selection method 
            'only' => 'value' // or ['value','url'] mean this middle work only these methods of function urls
        ]); 
    }
    */
    
    // ---- Request URL
    public function Request_url(Request $request){
      // Usage of path method
      $path = $request->path();
      echo 'Path Method: '.$path;
      echo '<br>';
     
      // Usage of is method
      $pattern = $request->is('r_url/*');
      echo 'is Method: '.$pattern;
      echo '<br>';
      
      // Usage of fullUrl method and return Without Query String..
      $url = $request->url();
      echo 'URL method: '.$url . "<br>";
    // Usage of url method and return Without Query String..    
        $url1 = $request->fullUrl();
        echo 'fullUrl method: '.$url1;
   }
    
// --- Cookie 
    public function setCookie(Request $req){
        $min = 1; // Minute
        $response = new Response('Hello Faisal');
        $response->withCookie(cookie('F_name','faisal',$min));
        return $response; 
        
    }
        public function getCookie(Request $req){
        
        $res = $req->cookie('F_name');
        echo $res; 
        
    }
    
    // ---- HTML Form ----
/*    public function formSubmit()
    {
        // ---- Receive input Field data using old method -----
        $f_one = Input::get('one','Field not Found'); // Here Field not Found run if one name field does not exist 
        // ---- here is more method to receive ------
        // $f_one = Input::except(['one']); this recevie all field except one name field
        // $f_one = Input::only(['one']); this recevie only one name field data
        // $f_one = Input::all(); this recevie all
        
        //----- Receive data using new method ----
        
        
    
        echo "<h1>{$f_one}</h1>";
    }
*/
// New Laravel Method to receive input field data using dependency Injection and type Hint
    
    public function formSubmit(Request $req) // here Request is type hint and dependency Injection
    {
        $f_one = $req->get('one');
        // second parameter run if one data is not present
        //  $f_one = $req->get('one','Not Find');
        
        // $f_one = $req->except(['one']); this recevie all field except one name field
        // $f_one = $req->only(['one']); this recevie only one name field data
        // $f_one = $req->all(); this recevie all
        
        // Retrive Data in input method
        $in = $req->input('two');
        // second parameter run if two data is not present
        //  $f_one = $req->get('two','Not Find');
        
        
        echo "<h1>  {$f_one}</h1>";
        echo "<h2> retrieve with input method {$in}</h1>.";
        
        // Retrive Data in Query String
        // Second Parameter run if the one data is not present
        $qs = $req->query('one','fa');
        echo "<h2> retrieve with Query String {$qs}</h1>.";
        
        // Short Key Or Retrieving Input Via Dynamic Properties
        echo $req->one . "<br>"; 
        
        // Determining If An Input Value Is Present
        if($req->has('three')) // we can give two or more field $req->has(['three','two'])
        {
            echo "Yes One Field value is Present <br>" ;
        }
        else
            {
            echo "No Field value is not Present <br>";
            }
        

        
// Use Form Validation Old Laravel method
        /*
        $Vald = Validator::make($req->all(),['two'=>'required']); // it give two compusolry parameter and 1 optional parameter
        
        if($Vald->fails())
        {
            return back(); // for preserve field data use return back()->withInput();
            // or humen error b chaheye back page py to isk liye 
            // return back()->withErrors([$vald])->withInput();
        }
        echo $req->two; 
        */
        // agr hum chahty hai yeh validation method use krty wy b dirrect automatic redirection hojaye or if use nhe krna parhy to isk liye if ki jaga validate () method use krngy e.g $Vald = Validator::make($req->all(),['two'=>'required'])->validate();
        
    /*
        like to create a validator instance manually but still take advantage of the automatic redirection offered by the requests's validate method,call the validate method on an existing validator instance. If validation fails, the user will automatically be redirected or, in the case of an AJAX request, a JSON response will be returned:

    Validator::make($request->all(), [
        'title' => 'required|unique:posts|max:255',
        'body' => 'required',
    ])->validate();
        */
        
        /*
-----Validating When Present-------
    In some situations, you may wish to run validation checks against a field only if that field is present in the input array. To quickly accomplish this, add the  sometimes rule to your rule list:

    $v = Validator::make($data, [
        'email' => 'sometimes|required|email',
    ]);
In the example above, the email field will only be validated if it is present in the  $data array.
        
        
----- Complex Conditional Validation -----
            Sometimes you may wish to add validation rules based on more complex conditional logic. For example, you may wish to require a given field only if another field has a greater value than 100. Or, you may need two fields to have a given value only when another field is present. Adding these validation rules doesn't have to be a pain. First, create a Validator instance with your static rules that never change:
            
            $v = Validator::make($data, [
            'email' => 'required|email',
            'games' => 'required|numeric',
            ]);
        
        Let's assume our web application is for game collectors. If a game collector registers with our application and they own more than 100 games, we want them to explain why they own so many games. For example, perhaps they run a game resale shop, or maybe they just enjoy collecting. To conditionally add this requirement, we can use the sometimes method on the Validator instance.

        $v->sometimes('reason', 'required|max:500', function ($input) {
            return $input->games >= 100;
        });
        The first argument passed to the sometimes method is the name of the field we are conditionally validating. The second argument is the rules we want to add. If the Closure passed as the third argument returns true, the rules will be added. This method makes it a breeze to build complex conditional validations. You may even add conditional validations for several fields at once:

        $v->sometimes(['reason', 'cost'], 'required', function ($input) {
            return $input->games >= 100;
            });
        */
        
// New Method no 1 for laravel 5
        $this->validate($req , 
        [
            'two' => ['required' , Rule::notIn(['sprinkles', 'cherries'])], // we can use more than one rules in one field 'two' => 'required|unique:posts|max:255'
            'one' => 'alpha' // only alphabets
            // stop running validation rules on an attribute after the first validation failure. To do so, assign the 'bail' rule to the attribute e.g 'title' => 'bail|required|unique:posts|max:255' In this example, if the require rule on the title attribute fails, the unique and max rule will not be checked.
        ] , // Customized error
        [
            'required' => 'Cannot be Blank'
            // we can also use for specific filed like 'two.required' => 'Cannot be Blank' or we can use :attribute to get field name in message or get min max value in define in field so use :min and :max in message 
        ]);
        // if we use this so no use if condition and pass and fails method it use self them in backhand traits
        echo $req->two;
        
// Session Data Receive
      //  session()->forget('k'); // this is use to remove "k" value form session
        echo "<h1> Session Work </h1>";
       echo "<br>" . session()->get('k');
        // agr hum chahty hen ka kbhe session ki key ghalat agae h jis py koi data h he nhe to us py null value dekhny k bajaye ko message wagera aye to usy hum get k second parameter mai dyty hen 
        echo "<br>" . session()->get('k1','Not found');
        // You can use all() method to get all session data instead of get() method.
        // hum get mai sy cloase function b pass krslty hen k session ki key nhe hoto yeh function chal jaye
        echo "<br>" . session()->get('k2', function(){
            return 2 + 3;
        });
          // get session value using session() method without using Request
        // echo session('f');       
        
        // Determining If An Item Exists In The Session
        if($req->session()->has('k'))
        {
            echo "<br>Yes it is Present";
        }
        else{
            echo "<br>Not Present";
        }
        // To determine if a value is present in the session, even if its value is null
         if($req->session()->exists('k2'))
        {
            echo "<br>Yes it is Present";
        }
        else{
            echo "<br>Not Present";
        }
        // agr hum chahty hen k flash sy is request py to data send hogaya h or is k bd ek or 3sri request ya page py data send hpjaye to us k liye session->reflast(); use krty hen or yeh koi parameter nhe lyta h flash wali he key ka data ab 3sry py b get krskty hen
        
        // If you only need to keep specific flash data, you may use the keep method:
        // $request->session()->keep(['username', 'email']);
    }
    public function session_C()
    {
        //set session value k is key and Faisal Ali ki value
        session()->put('k','Faisal ALi from Session');
        // agr hum chahty hen k ek request sy dusri py data transfer ho or phr khud remove hojaye forget wagera nhe krna parhy to us k liye
        // session()->flash('k','Faisal ALi from Session'); use krty hen
        //You may also use the flashOnly and flashExcept methods to flash a subset of the request data to the session. These methods are useful for keeping sensitive information such as passwords out of the session:
        
        // set session value using session() method without using Request
        // session(['f' => 'Faisal ALi']);
        
        return view('Form-view'); 
        /*
        Use flush() method instead of forget() method to delete all session data. Use the pull() method to retrieve data from session and delete it afterwards. The pull() method will also take “key” as the argument. The difference between the forget() and the pull() method is that forget() method will not return the value of the session and pull() method will return it and delete that value from session.
        
        */
    }
    
    // File Uploading
    public function showFile(Request $req){
        $file = $req->file('image');
        echo "File Name " . $file->getClientOriginalName();
        echo "<br> File Extension " . $file->getClientOriginalExtension();
        echo "<br> File Path " . $file->getRealPath();
        echo "<br> File Size " . $file->getSize();
        echo "<br> File Mime Tyoe " . $file->getMimeType();
        $folder = 'uploads';
        $file->move($folder,$file->getClientOriginalName());
        
        // Laravel 5.5 document Website Files pending for learn
        
        $file = $req->file('image');
/*
        $file = $req->image; // return file temp name
        echo $file . "<br>";
        // hasFile method
        if($req->hasFile('image1'))
        {
            echo "Yes File is Present <br>";
        }
        else{
            echo "File is not Present <br>";
        }
        // isValid Method
        if($req->file('image')->isValid())
        {
            echo "File is Valid <br>";
        }
       
        echo $req->image->path() ."<br>";
        echo $req->image->extension()."<br>";
        //Storing Uploaded Files
        $p = $req->image->store('uploads');
        echo $p;
        // If you do not want a file name to be automatically generated, you may use the  storeAs method
        $path = $req->image->storeAs('images', 'filename.jpg');
*/
    }
    
    public function save(Request $request){
        // Image Upload Database
    }
}


?>