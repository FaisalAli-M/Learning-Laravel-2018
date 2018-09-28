<?php

namespace App\Http\Controllers;
use Mail;
use Illuminate\Http\Request;

class EmailController extends Controller
{
    public function BasicMail()
    {
        $data = ['name'=>'Faisal'];
        Mail::send(['text'=>'mail_view'], $data , function($message){
            $message->to("faisal.ali.aptechnn@gamil.com","Ali")->subject("Hello Faisal Ali");
            $message->from("Faisalali12329@gmail.com");
            
            
        });
        echo "Basic Message Send.. Check Email";
    }
      public function html_email(){
      $data = array('name'=>"Faisal aLi");
      Mail::send('mail', $data, function($message) {
         $message->to('abc@gmail.com', 'Faisal ALi')->subject
            ('Laravel HTML Testing Mail');
         $message->from('xyz@gmail.com','Faisal');
      });
      echo "HTML Email Sent. Check your inbox.";
   }
   
   public function attachment_email(){
      $data = array('name'=>"Virat Gandhi");
      Mail::send('mail', $data, function($message) {
         $message->to('abc@gmail.com', 'Hello')->subject
            ('Laravel Testing Mail with Attachment');
         $message->attach('C:\laravel-master\laravel\public\uploads\image.png');
         $message->attach('C:\laravel-master\laravel\public\uploads\test.txt');
         $message->from('xyz@gmail.com','Faisal');
      });
      echo "Email Sent with attachment. Check your inbox.";
}
}
