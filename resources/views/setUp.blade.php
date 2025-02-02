@extends('mastertemplate')

@section('content')
<div class ="ms-2">This is to populate admins table with admin name and password  <br><br>
<form method="POST" action="/populateDb">
    @csrf
   
   <div class=  "mx-3"> 
    <label for="name">Name:</label><br>
    <input type="text" id="name" name="name"  class="form-control"  value="{{ old('name') }}"><br>
    
    </div>
    
   
    
    <div class= "mx-3"> 
    <label for="password">Password:</label><br>
    <input type="text" id="password"  class="form-control "  name="password" value="{{ old('email') }}"><br>
    </div>
    
     <div class="mx-3">
  <label for="sel1">Role:</label>
  <select class="form-control" id="sel1" name="list">
    <option>admin</option>
    <option>editor</option>
    </select>
     </div> 
    
    <br><br>
    
    <div class="form-group  ms-2"> 
    <button input type="submit" name="submit" class="btn btn-primary "value="submit" />Submit </button>
    </div>
   
    
</form>
</div>
@endsection
