@extends('adminTemplate')

@section('content')

<blockquote class= "prophet">
<h3>List of blogs that can be deleted as  follows :</h3>
  </blockquote>

@foreach($blogs as $output)



 <blockquote class ="prophet">
  
    <div class ="delBlogImg2">
	  
	title =   "{{$output->title}}" <br>
     <h4 style="color:red">  id = {{$output->id}} </h4>
  
	  
	  
	  <img src="{!! url('blogImages/'.$output->image )!!}"  class="img-thumbnail"  >
 
  
  
  
  </div>
   


</blockquote>

 
   @endforeach
      <form method="POST" action="/deleteBlogDo">
    @csrf
   
   <div class=  "mx-3"> 
    <label for="Id">Type the Id number only of blog that you wish to delete  into  text box below:</label><br>
    <input type="input" id="name" name="Id"  class="form-control"  value=""><br>
    
    </div>
    
   
    
    
    
    <div class="form-group  ms-2"> 
    <button input type="submit" name="submit" class="btn btn-primary "value="submit" />Submit </button>
    </div>
   
    
</form>
</div>
      <!--
       <div class="delBlogImg2"> 
    <div class ="blogArticleImg">      <img  src ="{!!url('blogImages/'.$output->image) !!}" class="img-fluid"  > </div>
     </div>
  <br>
   -->
  
   
   
  
.

@endsection

 
