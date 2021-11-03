<!DOCTYPE html>
<html lang="en">
<head>
    
    <title></title>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/style.css" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@300&display=swap" rel="stylesheet">
  
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">learn with Esha</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Services</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="about.php">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Contact</a>
      </li>
      
      
      
      
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
<div id="demo" class="carousel slide" data-ride="carousel">
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/4.jpg" alt="image" width="100" height="90">
      <div class="carousel-caption">
        <h3>Hurry up</h3>
        <p>Register yourself in this amazing online cource</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="images/2.jpg" alt="image" width="100" height="90">
      <div class="carousel-caption">
        <h3>Best online Course</h3>
        <p>Get free certificate</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="images/3.jpg" alt="image" width="100" height="90">
      <div class="carousel-caption">
        <h3>Improve your skills</h3>
        <p>Get hired for jobs easily</p>
      </div>   
    </div>
  </div>
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>
<section class="my-5">
  <div class="py-5">
    <h2 class="text-center">About us</h2>
  </div>
  <div class="container-fluid">
  <div class="row">
    <div class="img">
      <img src="images/3.jpg" class="img-fluid aboutimg">
      <div class="row">
    <div class="text">
      <h2 class="display-4"> Teaching method</h2>
      <p class="py-3"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem, saepe.</p>
      <a href="about.php" class="btn btn-success"> check more</a>
      


    </div>

  </div>
</div>
</section>

<section>
  <div class="py-5">
    <h2 class="text-center">Our services</h2>
  </div>
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-4 col-md-4 col-12">
      <div class="card" >
  <img class="card-img-top" src="images/2.jpg" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">Great Services</h4>
    <p class="card-text"></p>
    <a href="services.php" class="btn btn-primary">Services</a>
  </div>
</div>
      

    </div>

</div>
      </div>
      

      

    </div>

</div>
      </div>
    </div>

  </div>
</section>
<div>
  <section class="my-5">
    <div class="py-5">
      <h2 class="text-center"> contact us</h2>
    </div>
    <div class="w-50 m-auto">
  <form action="userinfo.php" method="post"> 
    
  <div class="form-group">
      <label>Username</label>
      <input type="text" name="user" autocomplete="off" class="form-control">
    </div>
    <div class="form-group">
      <label>Email</label>
      <input type="text" name="email" autocomplete="off" class="form-control">
    </div>
    <div class="form-group">
      <label>Phone</label>
      <input type="text" name="phone" autocomplete="off" class="form-control">
    </div>
    <div class="form-group">
      <label>Address</label>
      <input type="text" name="address" autocomplete="off" class="form-control">
    </div>
    <div class="form-group">
      <label>comments</label>
      <textarea name="comments" id="" class="form-control" rows="10"></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>

  </form >
</div>
  </section>
  <footer>
    <p class="p-3 bg-dark text-white text-center">@eshatechnical</p>
  </footer>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    
</body>
</html>