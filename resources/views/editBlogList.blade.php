@extends('adminTemplate')

@section('content')

<blockquote class= "prophet">
<h3>List of current blogs to edit  as follows :</h3>
You will see you can edit title date, but not change image; if you really need to chnage date, title article etc and Image well then delete the blog and start again, paying attention to what you are doing !



  </blockquote>

@foreach($blogs as $output)



 <blockquote class= "prophet">
  
  <a href="{!! url('editBlog/'.$output->slug) !!} "><h4> {{$output->title}}</a>  </h4>
   
 </blockquote>  
      
     
  
   
   
    @endforeach
.

@endsection

 
