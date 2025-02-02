<!DOCTYPE html>
<html lang="en">


<head>
<meta charset="utf-8" />

    <meta name="viewport" content="width=device-width, initial-scale=1">
<title>{{ $title }}</title>
<meta name="generator" content="Geany 2.0" />


 <link rel="icon" href="{{ asset('favicon.ico') }}">
<link href="{{asset('css/myStyle.css')}}" rel="stylesheet">





<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

</head>

<body>
	<div class="d-flex flex-column mb-3 "  >

	<div class ="headsection"  >  
								 <div class="logo">
									 <img  src ="{{url('images/logo.png') }}" >
								      </div> 			
							    
							   <div class="mx-auto" >
							 <h1 class  ="quintessential" >Laravel</h1> 
							 </div>

                         
					</div>
							
					        
	
	
	
	@include('navbar')

 <div class ="contentsection">
        @yield('content')
    </div>
   <br class="clearfix">
   
  <!--                                        -->
      <div class ="footersection">
				 
				 <div class ="a"> 
				  <a href="https://www.facebook.com/"      target="_blank">	<i class="fa fa-facebook-official fa-3x" aria-hidden="true"></i>	</a>	 </div>
				 
				<div class="a"><a href ="https://www.tiktok.com/" >  
					
				<img   width="50"   <img  src ="{{           url('images/tiktok.svg' )    }}" >
				   
				
				     </a></div>
				 
	           <div class="b">                <a href = "https://www.youtube.com/"  target="_blank"    > <i class="fa fa-youtube   fa-3x"></i>	</a></div>
       <div class="a"><a href ="https://www.instagram.com/"  target="_blank" ><i class="fa fa-instagram   fa-3x"></i> </a></div>
               
      
      
      
      <div class= "c"><div><h6>powered by:</h6></div> <a href ="https://sourceforge.net/projects/laravelblogengine/"><h7>Laravel blog Engine</h7></a>    </div>
	
	
	        </div>	
	       <h5 class="newtimes">©Someweb  | All Rights Reserved {{ date('d/m/Y ', time()) }} </h5>	
			</div>
			
			</div>
    
    <!--                                            -->
    </div>   <!-- end main div-->
    
    
    <script src="{{ asset('js/popper.js') }}"></script>
  <script src="{{ asset('js/bootstrapbundle.js') }}"></script>
    <script src="{{ asset('js/bootstrap.js') }}"> </script>
      <script src="{{ asset('js/jquery-3.5.1.min.js') }}"></script>
       <script src="{{ asset('js/jquery-migrate-3.3.0.js') }}"></script>
       <script src="{{ asset('js/jquery-migrate.js') }}"></script>
    
  
    <script>
	$( window ).load(function() {
$("button#2").hide();	
$("p#toggle").hide();
$( "button#1" ).click(function( event ) {
$("button#2").show();
$("button#1").hide();
$("p#toggle").show();
});

});  
		  
	</script>
    
 
    
</body>

</html>

