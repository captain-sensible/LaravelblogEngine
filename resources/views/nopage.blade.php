@extends('mastertemplate')



@section('content')

<h3>I am spam </h3>
<div class="logo">
 <img  src ="{{           url('images/waiter.gif' )    }}" >
 
 
 
 <audio controls     preload="auto" autoplay="true"       >
  <source src= "{{    url('sounds/parisian.mp3') }}" type="audio/mp3"> 
  </audio>
 
 

 
 
 </div>
@endsection 
