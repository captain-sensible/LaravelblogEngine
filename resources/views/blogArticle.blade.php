@extends('mastertemplate')

@section('content')

<blockquote class="prophet"><h4 class="{{$blogs->font }}"> {{$blogs->title}} 
<br><br>
</h4>
Date Posted : {{$blogs->date }}



</h4></blockquote>



<div class="delBlogImg2"> 
 <div class ="blogArticleImg">   <img   src ="{!!url('blogImages/'.$blogs->image) !!}" class="img-fluid" align ="left" ></div>
</div>
<br><br>
<blockquote class="prophet"> {!! $blogs->article !!} </blockquote>




 

@endsection
