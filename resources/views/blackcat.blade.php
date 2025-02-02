@extends('mastertemplate')

@section('content')
<div class ="mx-3"> 
	<blockquote class ="prophet">
	<h4 class="literataRegular">
	 Default login are  <br><br>
	
	Name: Demo <br><br>
	Password: Demo
	
	</h4>
</blockquote>
<form method="POST" action="/login">
    @csrf
   
   
   <div class=  "mx-3"> 
    <label for="name">Name:</label><br>
    <input type="text" id="name" name="name"  class="form-control"  value="{{ old('name') }}"><br>
    </div>
    
   
    <div class= "mx-3"> 
    <label for="password">Password :</label><br>
    <input type="password" id="password"  class="form-control "  name="password" value="{{ old('email') }}"><br>
    </div>
    
   
     <div class="mx-3"> 
			    <label for="captcha">Enter The Numbers Here that you can see Below </label>
			    <input type="input" name="captcha" id ="theCaptcha" class="form-control"  required = "required"     /><br />
			     </div>
    
    
   
    
    
    <br><br>
    <div class="form-group  ms-2"> 
    <button input type="submit" name="submit" class="btn btn-primary "value="submit" />Submit </button>
    </div>
   
    
    <div class="mx-auto" >
<!--	<h3> using session::get  {{Session::get('key1') }} </h3>-->
	
	
	
	
		
		
		
		<img  src ="{{url('captcha/'.$value1.'.png') }}" >
		<img  src ="{{url('captcha/'.$value2.'.png') }}" >
		<img  src ="{{url('captcha/'.$value3.'.png') }}" >
		<img  src ="{{url('captcha/'.$value4.'.png') }}" >
		<img  src ="{{url('captcha/'.$value5.'.png') }}" >
		
		</div>
    
    
    
</form>
</div>
@endsection
