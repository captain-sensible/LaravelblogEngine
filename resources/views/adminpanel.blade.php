<div class="adminpanel">

<h3 style="color:blue;text-align:center">

Admin Panel  </h3>

<br><br>
here will set out a href links to do tasks :<br><br>




<a href =" {{ url('blogForm') }}"> New Blog </a><br><br>


<a  href=" {{ url('editBlogList') }}">Edit Blog</a>   
<br><br>
<a href ="{{ url('galleryForm') }}"> Add to Gallery </a><br><br>

<a href ="{{ url('deleteGalleryList') }} ">Delete from Gallery </a><br><br>

 



<a  href=" {{ url('deleteBlogList') }}">Delete Blog</a>  <br><br>

<a href ="{{ url('resetPw') }}" Reset Admin password </a><br>

<a href ="{{ url('logout') }} "> Logout  </a><br>






<br><br>
</h4>
</div>
