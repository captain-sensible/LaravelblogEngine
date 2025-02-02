@extends('adminTemplate')

@section('content')




<form method="POST" action="/editBlogDo">
    @csrf
                   
   
                  <h3 style ="text-align:center"> This form is to amend a blog chosen</h3>
    
     
                <div class="form-group  mx-3"> 
			    <label for="title">Id is  noted on form but hidden</label><br><br>
			    <input type="hidden" name="Id" id ="id" class="form-control" value="{{ $blogs->id }}"  <br />
			    </div>
                <br><br>
                <div class=  "form-group mx-3"> 
                <label for="date">Edit Date if needed</label><br><br>
			    <input type="input" name="date" id ="date" class="form-control" value ="{{$blogs->date }} "/><br />
			    </div>
   <br><br>
   
   
       <div class=  "form-group mx-3"> 
    <label for="title">Edit Title If Needed:</label><br><br>
    <input type="text" id="name" name="title"  class="form-control"  value="{{ $blogs->title}}"><br>
    </div>
   
   <br><br>
   
    
    <div class=  "form-group mx-3">     
					 <label for="font">Choose New Font for title :</label>
					
					
					 <select name="font" id="fonts">
                  <option value="quintessential">quintessential</option>
				 <option value="kaushanscript">kaushanscript</option>
				 <option value="optimanormal">optimanormal</option>
				 <option value="dancing-script-ot">dancing-script-ot</option>
				 <option value="newtimesroman">new times roman </option>
				 <option value="times-new-roman">Times new Roman </option>
				 <option value="shangrilanReg">shangrilanReg</option>
				 <option value="aaargh">aaargh Font</option>
				 <option value="lemonchicken">lemonchicken </option> 
				 <option value="quintessentialBlue">quitessentialBlue</option>
				 <option value="quintessentialViolet">quintessentialViolet</option>
				 <option value="antic">antic </option>
				 <option value="anticSlab">anticSlab</option>
				  <option value="magnolia">magnolia</option>
				  <option value="caroni">caroni</option>
				 </select>
                  </div>
    
    
                  <div class="form-group mx-3"> 
			    <label for="article">Blog Article </label> <br><br>
			    <textarea class="form-control" id ="thArticle" rows="3" cols ="24" name ="article" required ="true"  >{{$blogs->article}}</textarea>
			   </div>
   
    <br><br>
   
     <div class="form-group  mx-3"> 
    <button input type="submit" name="submit" class="btn btn-primary "value="submit" />Submit </button>
    </div>
    
   
    
</form>
</div>




@endsection
