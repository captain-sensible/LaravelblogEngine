@extends('adminTemplate')

@section('content')

<blockquote class="prophet">

<h3 style="color:blue;text-align:center">

Place Holder Page  </h3>
<br><br>
<p>I am a place holder page; by clicking links on left this page will be replaced with relevant page to do with the task you want to work on </p>

<p> You are currently logged in using default password; you can change the default password using link below; you can change it <br>several times.</p><p> The one that will take affect is the 
last entry that is in the database before you log out,of current credentials  .</p>



<p>In other words new name and password wont take affect until you have logged out</p>
<br><br>

<h4 style = "color:red;text-align:center">{!! $info !!} </h4>

</blockquote>

@endsection
