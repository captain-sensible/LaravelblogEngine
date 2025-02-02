@extends('mastertemplate')

@section('content')

<blockquote class= "prophet">
<h3>List of blogs as follows :</h3>
  </blockquote>

@foreach($blogs as $output)



 <blockquote class= "prophet">
  
  <a href="{!! url('blogArticle/'.$output->slug) !!} "><h4> {{$output->title}}</a>  
  
  
  
  </h4>
   
 </blockquote>  
      
    
  
   
   
    @endforeach
.<br><br><Br>
<h5>{{ $blogs->links()  }} </h5>
@endsection

 
