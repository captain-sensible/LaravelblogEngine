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


use PHPMailer\PHPMailer\PHPMailer; 
use PHPMailer\PHPMailer\OAuth;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;


class ContactController extends Controller
{
protected $handle;
protected $articleText;
protected $data;
protected $totalMessage;
protected $mailResult;
protected $sendError;							
							
							
							
							
							public function index()
							{
								echo "defualt function for ContactController" ;
								$mail = new PHPMailer(true);
								//next step get stuff from contact form and process it 
							}


                          public function spam()
							
							{
								return view('spam',['title'=>'spam']);
								
							}
                  
                  
                  
                  
							public function     showForm()
							{
								
							
							return view('contactForm',['title'=>'contact us']);
							}
    
    
					
										   public function submitForm(Request $request)
										  
										   {
											  
											   $this->data= $request;
											  $this->totalMessage = "there name is   ".$this->data->name."    \r\n  their email address is :".  $this->data->email." their message was ".$this->data->message;
											  $mail = new PHPMailer(true); 
												$mail->isSMTP();
												$mail->Timeout = 20;
												$mail->SMTPDebug = 0;
												$mail->Host = 'smtp.gmail.com';
													$mail->Port = 587;
													$mail->SMTPSecure = 'tls';        
													$mail->SMTPAuth = true;
														$mail->Username = "andybrookestar@gmail.com";
				                                    $mail->Password = "fxzbcuhpxrltzixk";

							                                	$mail->setFrom('andybrookestar@gmail.com', 'webmaster ');
							
							$mail->addAddress('andybrookestar@yahoo.com', ' andy');
							$mail->Subject = ' Message from web surfer    ';
							$mail->Body = $this->totalMessage;
							
					               	try
					               	{
							
							 $this->mailResult=			$mail->send();				
												
										if ($this->mailResult == true)
										
										{
											
											  return view('info',['title'=>'session', 'value'=>' looks like your message was sent, to admin of website']);
										}
											
											
									}
									
									  catch ( \Exception  $e)
									{
									$this->sendError=	 $e->getMessage();
										
										  return view('info',['title'=>'send mail ', 'value'=>' there was a glitch <br><br>'.$this->sendError ]);
										
										
									}		
											
											
											
												
										}//end function 
							
						 
           }//end of class 
           
           
    

