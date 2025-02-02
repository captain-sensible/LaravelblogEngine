<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use App\Http\Requests ;
use Illuminate\Support\Facades\DB;
use  Illuminate\Support\Facades\Route;



class BlogController extends Controller
{
protected $blogDbRecord;
protected $dataFromBlogForm;   
protected $title;
protected $article;
protected $cleanArticle;
protected $image;
protected $slug;
protected $date;
protected $font;   
protected $id;   
protected $pattern1= ['"', "'", "`"];
protected $pattern2=["&#34;", "&#39;","&#39;" ];




// above what you wan to to get rid of first , with what ,last  oringian ltext string 
    /**
     * Display a listing of the resource.
     */
   
   
   public function blogForm()
   {
	   	
			return view('blogForm',['title'=>'blog forms']);
   }
   
       public function blogArticle( $slug )
   
    {
	
	$this->slug=$slug;
		
		
	  $this->blogDbRecord = DB::table('blogs')->where('slug',$this->slug)->first();
	
	return view('blogArticle',['title'=> 'blogs', 'blogs'=>$this->blogDbRecord]);
	
	}
    
    
      public function index()
    {
      
    
    }
    
    
     public function listGallery()
     
     {
		  
		  $gallery =DB::table('gallery')->count();
		  
		  
		   if( $gallery == 0)
      
      {
		  
	 return view('info ',['title'=> 'no blogs', 'value'=>'there are no pics at the moment to show ']);
   }	  
		  
		 else
		 { 
		   $galleryData = DB::table('gallery')
            ->select('Description', 'Name')
               ->simplePaginate(6);
    
    

    return view('listGallery',['title'=> 'gallery', 'gallery'=>$galleryData]);
	 }
	 }
    
    
    
    
    
    
    
    
      public function listBlogs()
    {
      $blogs = DB::table('blogs')->count();
     
      
      if( $blogs == 0)
      
      {
		  
	 return view('info ',['title'=> 'no blogs', 'value'=>'there are no blogs at the moment to show ']);
   }	  
      
     else
     {
		 
		 
		 
     
     
      
      
       $blogData = DB::table('blogs')
            ->select('title', 'article','image','slug','date','font')
         
            ->simplePaginate(7);
    
    

    return view('listBlogs',['title'=> 'blogs', 'blogs'=>$blogData]);
				
    }
    }
    
    
    

    /**
     * Show the form for creating a new resource.
     */
  
   public function viaBlogModel()
   {
	   $handle = new Blog();
   }
  
    
    
}
