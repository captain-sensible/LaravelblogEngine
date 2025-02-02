@extends('mastertemplate')



@section('content')
    <h1>Welcome to Our Application</h1>
    <h4 class="quintessential">
    This is the home page.</h4>
    
   
      <div class="form-group mb-3"> 
		  <input type="submit" name="submit" class="btn btn-info"value="submit" /> 
		  </div>
		   <div class="form-group  ms-2"> 
    <button input type="submit" name="submit" class="btn btn-primary "value="submit" />Submit </button>
    </div>
@endsection
