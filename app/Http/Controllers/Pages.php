<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests ;
use App\Http\Controllers\Controller ;
use App\Http\Controllers\CheckSpam;
use App\Models\Blog;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use  Illuminate\Support\Facades\Route;
Use Illuminate\Support\Facade\Sessions;

use Config;

class pages extends Controller
{
    
protected $logic3;                    
                 
                 
                 public function spam()
                 {
					  return view('spam',['title'=>'session']); 
					}
                 
                 
                 
                  public function checkSession(Request $request )
                   {
					   
					if(  $request->session()->has('role'))
					{
				     echo $request->session()->get('role');
						
				     }		
					else
					{
						echo " role has no value";
					}
					
					   
                    }                
                 
                 
                 
                    public function flushSession(Request $request )
                    
                    {
						$request->session()->flush();
					}
                    
                    public function setSession(Request $request )
                    
                    
                    {
						
				//	Session::put('role','admin');	
						$request->session()->put('role', 'admin');
				    }		

                   public function getSession(Request $request)
                   
                   {
					  
					  $value = $request->session()->get('role');
					  
					   return view('info',['title'=>'session', 'value'=>$value]);
					   
				   }
                   

 
					public function checkPage($page)

					{
						
						define("PATH","/srv/http/Laravel" );
						define("PATH2","/srv/http/Laravel/resources/views/");
						
					echo "<br>";

				
					$this->logic3= file_exists(base_path()."/resources/views/".$page.".blade.php");
				
                    

					if (($this->logic3 ==1) OR ($this->logic3 ==True))
					{
					return view($page, ['title'=>$page]);	
					}

					else

					{
						return view('nopage',['title'=>'no such page']);
					}


					}








}
