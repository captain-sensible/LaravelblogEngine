@extends('mastertemplate')

@section('content')
<div class ="ms-2">If you use the form below entering your name , your email address and your message, then the data from the form will 
be emailed to one of our admin. So we are asking for your email so we can get back to you. <br><br>
<form method="POST" action="/contact">
    @csrf
   
   <div class=  "mx-3"> 
    <label for="name">Name:</label><br>
    <input type="text" id="name" name="name"  class="form-control"  value="{{ old('name') }}"><br>
    
    </div>
    
   
    
    <div class= "mx-3"> 
    <label for="email">Email:</label><br>
    <input type="email" id="email"  class="form-control "  name="email" value="{{ old('email') }}"><br>
    </div>
    
    <div class="  mx-3"> 
    <label for="message">Message:</label><br>
    <textarea id="message"  class="form-control" name="message">{{ old('message') }}</textarea><br>
   </div>
    
    <div class="form-group  ms-2"> 
    <button input type="submit" name="submit" class="btn btn-primary "value="submit" />Submit </button>
    </div>
   
    
</form>
</div>
@endsection
