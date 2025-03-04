
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  </head>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href=" {{ url('home') }}">Home</a>
        </li>
       
       
        <li class="nav-item">
          <a class="nav-link" href=" {{ url('aboutMe') }}">About me</a>   
        </li>
         
         <li class="nav-item">
          <a class="nav-link" href=" {{url('listBlogs') }}">Blogs</a>   
        </li>
        
         <li class="nav-item">
          <a class="nav-link" href=" {{ url('contact') }}">Contact Us</a>   
        </li>
        
        
        
         <li class="nav-item">
          <a class="nav-link" href=" {{ url('listGallery') }}">Gallery</a>   
        </li>
        
         <li class="nav-item">
          <a class="nav-link" href=" {{  url('exampleFonts') }}">Fonts</a>   
        </li>
     
        <li class="nav-item">
          <a class="nav-link" href=" {{ url('blackcat') }}">Login</a>   
        </li>
     
         <li class="nav-item">
          <a class="nav-link" href=" {{ url('logout') }}">Logout</a>   
        </li>
     
     <li class="nav-item">
          <a class="nav-link" href="{{ url('admin') }}">Admin</a>   
        </li>
     
     
      </ul>
    </div>
  </div>
</nav>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
