<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use  Illuminate\Support\Facades\Route;

use Illuminate\Cookie\Middleware\EncryptCookies;
use Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse;
use Illuminate\Session\Middleware\StartSession;
use Illuminate\View\Middleware\ShareErrorsFromSession;
use Illuminate\Foundation\Http\Middleware\ValidateCsrfToken;
use Illuminate\Routing\Middleware\SubstituteBindings;
use \App\Http\Controllers\ContactController;



class CheckSpam
{
   
protected $keywords = array('http','www','//', 'viagra','vildi','late client','.com','.net','promotion', 'app','free consultation','Toenail Clippers','free shipping','free shipping !','Ã','YouTube','Î','É','Salam','Zdravo','cijenu','kainÄ','prys','Ciao','prezzo');
protected $commentText;
protected $logic;
protected $hasKeyword;			
protected $email;
protected $data;
protected $inputString;
    
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
				 
				  
				   $this->data= $request;
				   $this->inputString =$this->data->message;
				   echo $this->inputString;
				   
				  
				  
				 				

				
				foreach($this->keywords as $keyword)
					 {
									  if(str_contains($this->inputString,$keyword))
								 
								 

								
							{
							// basically below has to be defined in routes 	
							
								 return redirect()->action([\App\Http\Controllers\ContactController::class, 'spam']);
								
								 }
					 
					}
        return $next($request);
    }
}

