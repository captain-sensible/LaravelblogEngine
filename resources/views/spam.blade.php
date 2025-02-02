@extends('mastertemplate')



@section('content')

<h3>I am spam </h3>
<div class="logo">
 <img  src ="{{           url('images/slug.gif' )    }}" >
 
 
 
 <audio controls     preload="auto" autoplay="true"       >
  <source src= "{{    url('sounds/spamsong.mp3') }}" type="audio/mp3"> 
  </audio>
 
 

 
 
 </div>
@endsection 
