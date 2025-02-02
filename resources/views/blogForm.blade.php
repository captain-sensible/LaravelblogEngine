@extends('adminTemplate')

@section('content')
<div class ="mx-3"> Form For New Blog  <br><br>

<form action="/newBlog" method="post" enctype="multipart/form-data">
@csrf
   
   <div class=  "form-group mx-3"> 
    <label for="title">Title:</label><br>
    <input type="input" id="name" name="title"  class="form-control"  value="{{ old('name') }}"><br>
    </div>
                        
                        <div class=  "form-group mx-3">     
					 <label for="font">Choose a font for title :</label>
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
   <br><br>
    <div class= "form-group mx-3"> 
    <label for="date">Date posted :</label><br>
    <input type="text" id="date"  class="form-control "  name="date" value="{{ old('email') }}"><br>
    </div>
    
    <div class="form-group mx-3"> 
			    <label for="article">Blog Article </label> 
			    <textarea class="form-control" id ="thArticle" rows="3" cols ="24" name ="article" required ="true"  ></textarea>
			   </div>
    
    <!--                                    -->
    
    
    
   
    
    
    
    <!--                                           -->
    <div class="  form-group mx-3"> 
    <label for="image">Navigate to image:</label><br>
    <input type="file" name="image">
  </div>
    <br><br>
    <div class="form-group  ms-2"> 
    <button input type="submit" name="submit" class="btn btn-primary "value="submit" />Submit </button>
    </div>
   
    
</form>
</div>
@endsection
