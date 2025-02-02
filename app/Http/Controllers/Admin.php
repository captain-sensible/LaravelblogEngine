<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests ;
use App\Http\Controllers\Controller ;


use Illuminate\Support\Facades\DB;
use  Illuminate\Support\Facades\Route;
Use Illuminate\Support\Facade\Sessions;


use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;






class Admin extends Controller
{
protected $parameter;	
protected $newName;
protected $newPassword; 
protected $hashNewPassword;
protected $myarray; 
protected $name;
protected $Name;
protected $Description;
protected $Id;
protected $nameSubmitted;
protected $passwordSubmitted;
protected $logic;
protected $password;
protected $captchaSubmitted;
protected $actualCaptcha;
protected $captcha;
protected $hashPassword;
protected $role;
protected $users;
protected $nameMatches;
protected $passwordMatches;
protected $captchaMatches;
protected $dataFromBlogForm;   
protected $dataFromGalleryForm;
protected $title;
protected $cleanTitle;
protected $article;
protected $cleanArticle;
protected $image;
protected $slug;
protected $date;
protected $font;   
protected $id;   
protected $pattern1= ['"', "'", "`"];
protected $pattern2=["&#34;", "&#39;","&#39;" ];
protected $pattern3=["","",""];           
          
          
          public function deleteGalleryDo(Request $request)
          
          {
			  
			 
		   $data= $request;
		 $this->Id=   $data->Id;
		 
		  $gallery =DB::table('gallery')
		  ->where('Id',$this->Id)
		  ->count();
		 
		 if($gallery == 0)
		 {
			
		  return view('placeholder ',['title'=>'delete gallery ', 'info'=>'there is no gallery picture with that id, please try again'  ]); 	 
		 }
		 
		 else
		 {
		
		 try{
		 
		  $result = DB::table('gallery')
		  ->where('Id',($this->Id))
		  ->first();
		   $logic=  unlink(public_path('galleryImages/'.$result->Name));
		  $deleted = DB::table('gallery')
		  ->where('Id', $this->Id)
		  ->delete();
		  return view('placeholder ',['title'=>'delete blogs ', 'info'=>'hopefully pic has  been deleted and  unlink result is  :'.$logic.'and delete from db  result is : '.$deleted  ]); 
	  }
	  
	  catch(\Exception $e)
	  {
		  
		   return view('placeholder ',['title'=>'delete blogs ', 'info'=>'There was a glitch problem was   : '.$e->getMessage()  ]);  
		 } 
		
		
		
		
		}  
		}	  
          
          
          
          
          
          
               
         public function deleteGallery()
         {
			
							 
							  $gallery = DB::table('gallery')->count();
							  
						
						
							if( $gallery == 0)
					  
					  {
						  
					 return view('placeholder ',['title'=> ' no images ', 'info'=>'there are no gallery images at the moment to show ']);
				   }	
			  
			 else
			 {
				  $galleryData = DB::table('gallery')
				    ->select('Id', 'Description','Name')
                      ->get(); 
           
           
           
           
           
          
			
		           return view('deleteGalleryForm',['title'=> 'gallery list', 'gallery'=>$galleryData]);
			
			
			 }
			 
		}	        
         
       
   
       
        public function editBlogList()
        
        {
			
		  
		  $blogs = DB::table('blogs')->count();
     
      
      if( $blogs == 0)
      
      {
		  
	 return view('placeholder ',['title'=> 'no blogs', 'info'=>'there are no blogs at the moment to show ']);
   }	  
		else
		{  
		  
		  
		   $blogData = DB::table('blogs')
            ->select('title', 'article','slug','date','font')
            ->get();
    
    

    return view('editBlogList',['title'=> 'blogs', 'blogs'=>$blogData]);
     }
	}		    
       
       
       public function editBlog($slug)
       
       {
		echo "method editBlog, slug is    :".$slug;   
        
        $this->slug=$slug;
		
		
	  $this->blogDbRecord = DB::table('blogs')->where('slug',$this->slug)->first();
	
	return view('editBlogForm',['title'=> 'blogs', 'blogs'=>$this->blogDbRecord]);



	}	   
            
          
        public function editBlogDo(Request $request)
        {
			
			
			$this->parameter=$request;
			 $this->cleanArticle= str_ireplace($this->pattern1,$this->pattern2,$this->parameter->article);
		      $this->cleanTitle= str_ireplace($this->pattern1,$this->pattern3,$this->parameter->title);
		      $this->slug=  $this->slug= str_replace(' ', '-', $this->cleanTitle);
		 
		 
		 
		 $affected = DB::table('blogs')
              ->where('id', $this->parameter->Id)
              ->update(['title' => $this->cleanTitle, 'slug'=>$this->slug,'date'=>$this->parameter->date,'font'=>$this->parameter->font,'article'=>$this->cleanArticle]);
		
		
		
		
			
		//	need to do cleaning of text ,including mayeb title incase of single commas
			
			  if ($affected == 1)
		   {
			 $info =  "<p>looks like blog you edited was successfully processed </p>";
			 
			 
			   return view('placeholder ',['title'=>'reset pw ', 'info'=>$info]);
			 
			 
			}  
		   else
		   
		   $info= " there looks like there was a glitch";
		   
		  return view('placeholder ',['title'=>'reset pw ', 'info'=>$info]);
		}  
          
          
            
      public function resetPwForm()
      
      {
		 
		  return view('resetPw',['title'=>'password  forms']);
		  
	  }      
      
      public function deleteBlog()
      
      {
		
		$blogs = DB::table('blogs')->count();
     
      
      if( $blogs == 0)
      
      {
		  
	 return view('placeholder ',['title'=> 'no blogs', 'info'=>'there are no blogs at the moment to show ']);
   }	  
		
		
		
		else
		{
		 $blogData = DB::table('blogs')
            ->select('title', 'article','image','slug','date','font','id')
            ->get();
    
    

    return view('deleteBlogList',['title'=> 'blogs', 'blogs'=>$blogData]);
 }
	  }
      
      
      
      public function deleteBlogDo(Request $request)
      
      {
		
		   $data= $request;
		 $this->Id=   $data->Id;
		 
		 
		   $blogCount  =DB::table('blogs')
		  ->where('id',$this->Id)
		  ->count();
		 
		 if ($blogCount == 0)
		 {
		return view('placeholder ',['title'=> 'no blogs', 'info'=>'there is no blog with that Id ']);	 
			 
		}	 
		
		else
		      {
		 
					  try
					  {
					  
					  
					  $result = DB::table('blogs')
					  ->where('id',($this->Id))
					  ->first();
					  $logic=  unlink(public_path('blogImages/'.$result->image));
					 $deleted = DB::table('blogs')
					  ->where('id', $this->Id)
					  ->delete();
					  return view('placeholder ',['title'=>'delete blogs ', 'info'=>'hopefully blog deleted result of unlink is'.$logic.'and rresult of db is'.$deleted  ]); 
	               
			   }
			   
			   catch(\Exception $e)
	  {
		  
		   return view('placeholder ',['title'=>'delete blogs ', 'info'=>'There was a glitch problem was   : '.$e->getMessage()  ]);  
		 } 
		
	               
	               
	               
	               }
	  }      
            
       public function resetPwDo(Request $request)
      
      {
		  echo "hello from class Admin method resetPw";
		  $data= $request;
		  $this->newName=  $data->name;
		  $this->newPassword=  $data->password;
		  $this->hashNewPassword=    password_hash($this->newPassword,PASSWORD_DEFAULT); 
		  
		  
		  
		  
		     $affected = DB::table('admins')
              ->where('Id', 1)
              ->update(['Name' => $this->newName, 'Password'=>$this->hashNewPassword]);
		    
		   
		   var_dump($affected);
		   
		   if ($affected == 1)
		   {
			 $info =  "<p>looks like password was successfully reset, what went into database was : <br><br></p><p>Name:   &nbsp;&nbsp;".$this->newName."<br><br></p><p> Password: &nbsp;&nbsp;".$this->newPassword."</p><p><br><br>
			  &nbsp;&nbsp;except password will have gone into database hashed. Better write down above credential so you don&#39;t forget</p>";
			 
			 
			   return view('placeholder ',['title'=>'reset pw ', 'info'=>$info]);
			 
			 
			}  
		   else
		   
		   $info= " there looks like there was a glitch";
		   
		  return view('placeholder ',['title'=>'reset pw ', 'info'=>$info]);
		 
		  
	  }        
            
            
            
     public function addGallery( Request $request )
     
     {
		
		  request()->validate([
        'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
			]);
       
		
		
		 $this->Id=null;
		echo "youve reached addGallery  method";  
		 $this->dataFromGalleryForm = $request ; 
	     $this->Description=   $this->dataFromGalleryForm->description;
	     $this->Name = $this->dataFromGalleryForm->name;
	     
	$this->image =time()."-".request()->image->getClientOriginalName();
	
	
	
	var_dump($this->image);
	
	 
	 
	  DB::insert('insert into gallery (Id,Description,Name) values (?, ?,?)', [$this->Id, $this->Description,$this->image]);
	
	  request()->image->move(public_path('galleryImages'), $this->image);
  
     return view('placeholder ',['title'=>'add to gallery ', 'info'=>'looks image added to gallery ']);
        
	
	
	
	
	}	        
            
            
            
     public function createBlog(Request $request)
    {
         
        request()->validate([
        'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
			]);
       
       
        $this->dataFromBlogForm = $request ;
     //above gets bulk data from blog form 
       $this->id=null;
       
        $this->image =time()."-".request()->image->getClientOriginalName();
       
      
       $this->title= $this->dataFromBlogForm->title;
       $this->slug= str_replace(' ', '-', $this->title);
       $this->article=  $this->dataFromBlogForm->article;
       $this->cleanArticle= str_ireplace($this->pattern1,$this->pattern2,$this->article);
      
     
      
      
      
       $this->date= $this->dataFromBlogForm->date;
       $this->font= $this->dataFromBlogForm->font;
        
        
        echo $this->cleanArticle;
        
      //need to sanitize out quotes  
        
        
     DB::insert('insert into blogs (id,title,article,image,slug,date,font) values (?, ?,?,?,?,?,?)', [$this->id, $this->title,$this->cleanArticle,$this->image,$this->slug,$this->date,$this->font]);
      request()->image->move(public_path('blogImages'), $this->image);
  
     return view('placeholder ',['title'=>'creating blog', 'info'=>'looks like blog created']);
        
        
    //     request()->image->move(public_path('blogImages'), $imageName);
   //   return redirect()->back()->with('message', 'File uploaded successfully.');
    }        
            
            
            public function blogForm()
   {
	   	
			return view('blogForm',['title'=>'blog forms']);
   }
            
            
    public function galleryForm()
    
    {
		return view('galleryForm',['title'=>'gallery  forms']);
	} 
     
     
     
            
            
            public function admin()
            
            {
			 return view('placeholder',['title'=>'session', 'info'=>' outcome of task will be re-directed here ']);	
			}
            
            
            
            
             public function getSession(Request $request)
                   
                   {
					  
					  $value = $request->session()->get('role');
				$myVariable = 	  $request->session()->exists('role'); 
					  
					  echo $myVariable;
					  
					   return view('info',['title'=>'session', 'value'=>$value]);
					   
				   }
                   
            
            
            
            
            
             
               
               
               
               
               public function populateDb(Request $request)
               {
				   $this->id=NULL;
				   $this->name= $request->name;
				   $this->password= $request->password;
				   $this->hashPassword=   password_hash($this->password,PASSWORD_DEFAULT); 
				 
				 
				   $this->role=$request->list;
			  
			       DB::insert('insert into admins (Id,Name,Password,Role) values (?, ?,?,?)', [$this->id, $this->name,$this->hashPassword,$this->role]);
			  
			       return view('info',['title'=> 'populate admins table','value'=>'with any luck admins table has been populated']);
			  
			  
			   }
               
               
                public function setUp()
                {
					return view('setUp',['title'=> 'populate admins table']);
				}   
 
				
				public function logout(Request $request )
				
				
				{
				$request->session()->flush();	
				
					return view('info',['title'=> 'populate admins table', 'value'=>'your now logged out']);
				
				
				}
				
				
				public function login(Request $request)

		{//start login 
					
					//this controller will process data from 
                     // now that admins table is populated next do check on name password entered against database 
				// in codeigniter like this $this->passwordMatches= password_verify($this->password,$this->hashPassword);
				
				 $this->users = DB::select('select * from admins ');
			     $this->name=  $this->users[0]->Name;
			     $this->password= $this->users[0]->Password;
				 $this->nameSubmitted= $request->name;
				  $this->passwordSubmitted = $request->password;
				  $this->captchaSubmitted = $request->captcha;
                  $this->captcha = $request->session()->get('captcha');
                  $this->actualCaptcha= implode("",$this->captcha);

				
				$this->passwordMatches= password_verify($this->passwordSubmitted,$this->password);
				
				

				if ($this->actualCaptcha == $this->captchaSubmitted)
				{
				$this->captchaMatches = true;
				
				}

				else
				$this->captchaMatches = false;
				
				
				
				if($this->name == $this->nameSubmitted)
				{
					$this->nameMatches = true;
				}
               
                else
                $this->nameMatches 		=false;	


          if  (        (($this->nameMatches == true) OR ($this->nameMatches ==1)) AND(($this->passwordMatches == true) or ($this->passwordMatches ==1)) AND (($this->captchaMatches ==true) or ($this->captchaMatches ==1) ))
          {
			  
		      $request->session()->put('role', 'admin');
		      
		       return view('placeholder ',['title'=>'login  ', 'info'=>'<p>your logged in</p> ']);
		  }


           
     
     
      } //end login method
 
				 public function blackcat(Request $request)
				 
				 {
					  $this->myarray = array( chr(rand(48,57)) , chr(rand(48,57)) , chr(rand(48,57)) , chr(rand(48,57)) , chr(rand(48,57)));
					 
					 // need to use session and assign above to it, so can get values generated 
					
					//$request->session()->put('key1', $this->myarray[0]);
					$request->session()->put('captcha', $this->myarray);
					
					//$_SESSION['captcha']= $myarray;			
					
					
					 return view('blackcat',['title'=>'login','value1'=>$this->myarray[0],'value2'=>$this->myarray[1] ,'value3'=>$this->myarray[2] ,'value4'=>$this->myarray[3],'value5'=>$this->myarray[4]  ]); 
					 
				 }
 
}
