<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\customer; // for use model
use DB;

class F_Database extends Controller
{
    //
    public function insert()
    {
        
        // Insert using ORM method
        $customer = new customer;
        $customer->c_name = 'Faisal';
        $customer->c_email = 'Faisal@gmail';
        $customer->c_pass = '123S';
        $customer->save();  
        // we can also insert using array in Orm or is k liye object k constructor mai sy array pass  ikrtuy hai like
        /*
         $customer = new customer([
         'name' => 'Faisal 2',
         'email' => 'Faisal2@gmail',
         'pass' => '1233',
         ]);
        mgr is k liye phly Mass Assignment use krna hoga yeh security k liye hota hai or model mai property set krty hai is ki
        */
        
        // Another Method to add data without create instance before add data
    /*
        $customer = customer::create([
         'name' => 'Faisal 2',
         'email' => 'Faisal2@gmail',
         'pass' => '1233',
            
        ]);
    */
        
          // Another Method to add data 
    /*
        $customer = customer::create([
         'name' => 'Faisal 2',
         'email' => 'Faisal2@gmail',
         'pass' => '1233',
            
        ]); 
    */
        // Another Method
        /*
          $customer = new customer;
        $cusomer->fill([
         'name' => 'Faisal 2',
         'email' => 'Faisal2@gmail',
         'pass' => '1233',
         ])
         $customer->save();  
         */
        
        // we can add more valuse after save data
        /*
          $customer = new customer([
         'name' => 'Faisal 2',
         'email' => 'Faisal2@gmail',
       
         ]);
        $customer->save();
        $customer->pass = 'password'
        $customer->save();
        */
        
        // OR
        /*
         $customer = new customer([
         'name' => 'Faisal 2',
         ]);
        $cusomer->fill([
         'email' => 'Faisal2@gmail',
         'pass' => '1233',
         ]);
        $customer->save();
        */
    }
    public function select()
    {
        $customer = customer::all();
        foreach($customer as $c)
        {
            echo $c->c_name . " " . $c->c_email . "<br>";
        }
    }
    public function update()
    {
        $customer = customer::find(4); // find() method use for search data only using id not other column name or not id colum name if change
        
        $customer->fill([
            'c_name' => 'Aliyan',
            'c_email' => 'aliyan@gamil.com'
        ]);
        $customer->save();
    }
        public function delete()
    {
        // if we want to perform any activity before delete record like safe user name for all user past to furure just information so dekete like that
        $customer = customer::find(1); // find() method use for search data only using id not other column name or not id colum name if change
        // here write your activity perform code the delete record
        $customer->delete();
        
        // if you only want to delete record no activty perform before delete so delete like that
       // customer::destroy(2);
        
        
    }
    public function QB_select(){
        $select = DB::table('customers')->select()->get(); // get always use end of all query because it run the qusery
        foreach($select as $s)
        {
            echo $s->c_name . "<br>";
        }
        $select1 = DB::table('customers')->select('c_name','c_email')->get(); // or hum arry main b dyskty hen like ['c_name','c_email']
        foreach($select1 as $s1)
        {
            echo $s1->c_email . " " . $s1->c_name . "<br>";
        }
        $select2= DB::table('customers')->select()->where('c_name','faisal')->get();
        foreach($select2 as $s2)
        {
            echo $s2->c_email . "<br>";
        }
        // or hum individucal b use krskty hai yeh normally condition wagera use krni hoti hai to phr aisy use krty hen
        $select3= DB::table('customers');
        $select3->select();
        $select3->where('c_name','aliyan');
        $r = $select3->get();
         foreach($r as $s3)
        {
            echo $s3->c_email . "<br>";
        }
        // use with alias best for use when we have more than one tables and both some columns name are same
          $select4 = DB::table('customers as cus')->select('cus.c_name','cus.c_email')->get(); // or hum arry main b dyskty hen like ['c_name','c_email']
        foreach($select4 as $s4)
        {
            echo $s4->c_email . "<br>";
        }
        // agr humny select method use kiya wa h or condition k andr dubara select use krna hai to woh uper waly ko override krdyga or sirf nichy wali select ki value lyga is sy bachny k liye adselect() method use krty hen
        //PENDING
        
        
        //Data Base Query Log
        DB::enableQueryLog();
        
            $select = DB::table('customers')->select()->get();    
          $select2= DB::table('customers')->select()->where('c_name','faisal')->get();
    
        $log = DB::getQueryLog();
       // echo dd($log); // for view last Query use dd(end($log));
        
        // Where Clause
        echo "<h1><br> Where Clause <br></h1>";
        // Uncomment one by one and see results
        
        //$wh1= DB::table('customers')->select()->where('c_name','faisal')->get();
         // $wh1= DB::table('customers')->select()->where('c_name','=','faisal')->get(); // here we can also use < > instead of = 
         //$wh1= DB::table('customers')->select()->where(['c_name' => 'faisal'])->get();

        
        
        
// ---- if we want to excte this query select * from col where name = "faisal" and pasword = "123" so it has three method AND Condition use k
        // $wh1= DB::table('customers')->where('c_name','faisal')->where('c_pass','123')->get();
        // $wh1= DB::table('customers')->where(['c_name'=>'faisal' , 'c_pass'=>'123'])->get();
         /* 
            $wh1= DB::table('customers')->where([
            ['c_name' , 'faisal'] , ['c_pass','123']
            ])->get(); // Multi dimentional array 
        */
// --- Multidimention array boht faida hai qk agr humen other then = k koi or condition lagani h like > < wager to woh sing array ki key value          mai nhe dy skty hen hum to yaha multidimentio kam aati hai like
        /*
        $wh1= DB::table('customers')->where([
            ['c_name' ,'like', 'fai%'] , ['c_pass','like','12%'] // here we use < > and so many
          ])->get(); // Multi dimentional array 
        */
         //$wh1= DB::table('customers')->select()->where('c_name' , 'like' , 'fa%')->get();
        
        
        
        
// ----- OR Condition bydefault Laravel and conditon run krta ha ar or use krna hai to orwhere() method use krty hen
// --- if we want to excte this query select * from col where name = "faisal" OR pasword = "123" so it has three method AND Condition use k
        
        // $wh1= DB::table('customers')->where('c_name' , 'faisal')->orWhere('c_pass','123')->get(); 
       
//---- Multidimention array boht faida hai qk agr humen other then = k koi or condition lagani h like > < wager to woh sing array ki key value          mai nhe dy skty hen hum to yaha multidimentio kam aati hai like
        
        $wh1= DB::table('customers')->where([
            ['c_name' ,'like', 'fai%'] // here we use < , > and so many
          ])->orWhere([
            ['c_pass','=','123'] // here we use like , < , > and so many
          ])->get(); // Multi dimentional array 
       
         //$wh1= DB::table('customers')->select()->where('c_name' , 'like' , 'fa%')->get();
         foreach($wh1 as $w1)
        {
            echo $w1->c_email . "<br>";
        }
//--- Addition where method for in between etc
        echo "<br> <h3> Where IN or NotIN  </h3> <br>";
        
        // se;ect * from customers where id in('1' , '25' , '34' ,'2');
        $wh2 = DB::table('customers')->whereIn('id',['1','2'])->get();
        foreach($wh2 as $w2)
        {
            echo $w2->c_pass . "<br>";
        }
        // Reverse // se;ect * from customers where id not in('1' , '25' , '34' ,'2');
          $wh3 = DB::table('customers')->whereNotIn('id',['1','2'])->get();
        foreach($wh3 as $w3)
        {
            echo $w3->c_pass . "<br>";
        }
        
        // Between
        echo "<br> <h3> Where between or Notbetween  </h3> <br>";
        
        // se;ect * from customers where id between('1' and 10);
        $wh4 = DB::table('customers')->whereBetween('id',['1','3'])->get();
        foreach($wh4 as $w4)
        {
            echo $w4->c_pass . "<br>";
        }
        // Reverse // se;ect * from customers where id not between('1' , '25' , '34' ,'2');
          $wh5 = DB::table('customers')->whereNotBetween('id',['1','2'])->get();
        foreach($wh5 as $w5)
        {
            echo $w5->c_pass . "<br>";
        }
        
        // Null Column
        echo "<br> <h3> Where Null or NotNull  </h3> <br>";
        
        // se;ect * from customers where id is null;
        $wh6 = DB::table('customers')->whereNull('id')->get();
        foreach($wh6 as $w6)
        {
            echo $w6->c_pass . "<br>";
        }
        // Reverse // se;ect * from customers where id is not Null('1' , '25' , '34' ,'2');
          $wh7 = DB::table('customers')->whereNotNull('c_name')->get();
        foreach($wh7 as $w7)
        {
            echo $w7->c_name . "<br>";
        }
        
        // whereColumn yeh hum do colum ki value ko campare krrny k liye use krty hai whereColumn('FirstName','LastName') ya whereColumn('FirstName' , '!=' , 'LastName') ya Multi Dimension Array for more Comparison whereColumn([ [FirstName' , '!=' , 'LastName'] , ['UpdateAt' , '=' , 'CreatedAt']])
        
    }
    
    public function QB_Join()
    {
        $join = DB::table('users')->join('posts' , 'users.id' , '=' , 'posts.user_id')->select('users.name' , 'posts.title')->get();
        
        echo $join;
    }
        
    public function QB_RightJoin()
    {
        $join = DB::table('users')->Rightjoin('posts' , 'users.id' , '=' , 'posts.user_id')->select('users.name' , 'posts.title')->get();
        
        echo $join;
    }
    
    
    public function QB_LeftJoin()
    {
        $join = DB::table('users')->Leftjoin('posts' , 'users.id' , '=' , 'posts.user_id')->select('users.name' , 'posts.title')->get();
        
        echo $join;
    }
    
        public function QB_CrossJoin()
    {
        $join = DB::table('users')->Crossjoin('posts' , 'users.id' , '=' , 'posts.user_id')->select('users.*' , 'posts.*')->get();
        
        echo $join;
    }
    
    
}
