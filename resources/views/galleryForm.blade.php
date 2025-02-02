@extends('adminTemplate')

@section('content')
<div class ="mx-3"> Form For Adding  Picture to Gallery   <br><br>

<form action="/addGallery" method="post" enctype="multipart/form-data">
@csrf
   
   <div class=  "form-group mx-3"> 
    <label for="title">Image Description</label><br>
    <input type="text" id="name" name="description"  class="form-control"  value="{{ old('name') }}"><br>
    </div>
    
   
    
    
    
    
 
    
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
