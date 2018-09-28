<?php

namespace App\Http\Controllers;

use App\FileUpload;
use Illuminate\Http\Request;

class FileUploadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
            $file = $request->file('image');
            $name = $file->getClientOriginalName();
            $extension = $file->getClientOriginalExtension();
            
            $folder = 'uploads';
            $file->move($folder,$file->getClientOriginalName());
            
            \App\FileUpload::create([
                'thumbnail' => $name ,
            ]);
        return redirect()->route('fileupload', ['name' => $name]);

        
            
         
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\FileUpload  $fileUpload
     * @return \Illuminate\Http\Response
     */
    public function show(Request $req)
    {
        echo "<img src='uploads/$req->name ' style='width:128px;height:128px'>";
        echo "<br>";
        echo $req->name;
        
    /* 
        //
        $file = $req->file('image');
        echo "File Name " . $file->getClientOriginalName();
        echo "<br> File Extension " . $file->getClientOriginalExtension();
        echo "<br> File Path " . $file->getRealPath();
        echo "<br> File Size " . $file->getSize();
        echo "<br> File Mime Tyoe " . $file->getMimeType();
       // $folder = 'uploads';
        // $file->move($folder,$file->getClientOriginalName());
        
        // Laravel 5.5 document Website Files pending for learn
        
        $file = $req->file('image');

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

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\FileUpload  $fileUpload
     * @return \Illuminate\Http\Response
     */
    public function edit(FileUpload $fileUpload)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\FileUpload  $fileUpload
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, FileUpload $fileUpload)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\FileUpload  $fileUpload
     * @return \Illuminate\Http\Response
     */
    public function destroy(FileUpload $fileUpload)
    {
        //
    }
}
