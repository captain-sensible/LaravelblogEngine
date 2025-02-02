@extends('mastertemplate')

@section('content')

<blockquote class= "prophet">
<h3>List of gallery  as follows :</h3>
  </blockquote>
<div class ="portfolio mx-2">
@foreach($gallery as $output)



 
  
  
 
      
      
       <div class="delBlogImg2"> 
		   {{ $output->Description }}
    <div class ="item">      <img  src ="{!!url('galleryImages/'.$output->Name) !!}" class="img-fluid"  > </div>
     </div>
  <br>
   
  
   
   
    @endforeach
.
</div>
<br><br>
{{ $gallery->links() }}
@endsection
