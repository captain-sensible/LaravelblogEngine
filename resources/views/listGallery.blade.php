@extends('mastertemplate')

@section('content')

			<blockquote class= "prophet">
				<br><br>
			<h4 class="anticSlab">List of gallery  as follows :</h4>
			  
			  </blockquote>
<br><br>

<div class ="portfolio mx-2">
                  
                  
                   @foreach($gallery as $output)
                   
                   
		   
    <div class ="item">  {{ $output->Description }}    <img  src ="{!!url('galleryImages/'.$output->Name) !!}" class="img-fluid"  > </div>
     
  <br>
    @endforeach
  </div>
   
   
   
.

<br><br>
{{ $gallery->links() }}


@endsection
