<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests ;
use App\Http\Controllers\Controller ;
use App\Models\Blog;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use  Illuminate\Support\Facades\Route;

class Andy extends Controller
{
    /**
     * Handle the incoming request.
     */
     function index()
    {
      
      $users2 = DB::select('select * from users ');
      
      $getUserData = User::find(1);
      
    //  $handle = new Blog();
      echo "base path of web app is :".base_path()."<br><br>";
      echo "hello";
     $users = User::get();

  

    
 
      
      
         // return view('landPage', ['pig' => 'James']);
    
         
 

 
 
DB::insert('insert into blogs (id,title,article,image,slug,date,font) values (?, ?,?,?,?,?,?)', [null,'new blog','its a blog','andy.png','new-blog','13 January','quintiessential']);
             
       return view('landPage', ['users' => $users,'pig' => 'James', 'users2'=>$users2]);
            
    }
}
