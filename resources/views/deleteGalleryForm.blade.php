@extends('adminTemplate')

@section('content')

<blockquote class= "prophet">
<h3>List of gallery  as follows :</h3>
  </blockquote>

@foreach($gallery as $output)



 
  
  
 <blockquote class="prophet">
      
      
       <div class="delBlogImg2"> 
		   {{ $output->Description }}<br>
		 <h4 style="color:red;"> Id=  {{$output->Id}} </h4>
		   
         <img  src ="{!!url('galleryImages/'.$output->Name) !!}" class="img-thumbnail"  > 
     </div>
  <br>
   
  
  </blockquote>
   
    @endforeach
.
<form method="POST" action="/deleteGalleryDo">
    @csrf
   
   <div class=  "mx-3"> 
    <label for="Id">Type the Id number only of gallery  that you wish to delete  into  text box below:</label><br>
    <input type="text" id="name" name="Id"  class="form-control"  value=""><br>
    
    </div>
    
   
    
    
    
    <div class="form-group  ms-2"> 
    <button input type="submit" name="submit" class="btn btn-primary "value="submit" />Submit </button>
    </div>
   
    
</form>
@endsection
