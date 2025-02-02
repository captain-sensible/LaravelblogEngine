<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CheckSpam extends Controller
{
 protected $keywords = array('http','www','//', 'viagra','late client','.com','.net','promotion ', 'app','free consultation','Toenail Clippers','free shipping', 'free shipping !','Ã','YouTube','Î','É','Salam','Zdravo','cijenu','Sveiki, aÅ¡ norÄ—jau suÅ¾inoti jÅ«sÅ³ kainÄ','Hallo, ek wou jou prys ken');
 protected $commentText;
protected $logic;
protected $hasKeyword;	
 
 public function index()
 {
	 echo " i am method index in controller checkspam<br><br>";
	} 
    //
    
    public function  filterSpam($input)
			{
				$string =$input;
			
			foreach($this->keywords as $keyword)
					 {
					 if (strpos($string, $keyword) !== false) 
					 
					 {
					 $this->hasKeyword  = true;
					break; // stops searching the rest of the keywords if one was found
					 }
					 
					else
					{
					$this->hasKeyword= false;	
					} 
					 
             }
			
			return $this->hasKeyword;
			
			
					}
    
    
    
    
    
    
    
    
}
