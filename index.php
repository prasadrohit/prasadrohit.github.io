<!DOCTYPE html>
<html>

<head>
	<title>Visit World</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
	<link href="https://fonts. googleapis.com/css2?family=Josefin+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
</head>

<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Amazing Destinations</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
  <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link smooth-scroll" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link smooth-scroll" href="#about">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link smooth-scroll" href="#services">Services</a>
      </li>
      <li class="nav-item">
        <a class="nav-link smooth-scroll" href="#gallery">Gallery</a>
      </li>
      <li class="nav-item">
        <a class="nav-link smooth-scroll" href="#contact">Contact</a>
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
      <img src="images/img1.jpg" alt="Los Angeles" width="1100" height="500">
      <div class="carousel-caption">
        <h3>Los Angeles</h3>
        <p>Among the most attractive destinations!!</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="images/img2.jpg" alt="London" width="1100" height="500">
      <div class="carousel-caption">
        <h3>London</h3>
        <p>Among the most Iconic cities around the globe..</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="images/img4.jpg" alt="Dubai" width="1100" height="500">
      <div class="carousel-caption">
        <h3>Dubai</h3>
        <p>Among the most developed cities in all over the world:)</p>
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





<section class="my-5" id="about"> <!-- my-margin in y -->
	<div class="py-5"> <!-- py-padding in y -->
		<h2 class="text-center">About us</h2>
	</div>

	<div class="container-fluid">  <!-- for removing scrollbar from bottom -->
	<div class="row">
		
		<div class="col-lg-6 col-md-6 col-12">
			<img src="images/img5.jpg" class=" img-fluid aboutimg">
		</div>
		<div class="col-lg-6 col-md-6 col-12">
			<h2 class="display-4">I'm Rohit Prasad</h2>
			<p class="py-3">I have created this website to showcase all time favorite destinations around the Globe.From this website you will come across various interesting stuffs that you would like to know.Along with that, this website is full of general knowledge, about each and every city you select.</p>
			<p>Nature is something very special to us, that provide us the pleasent delightness that refresh not only body but also it affects alot to our mind.</p>
		</div>

	</div>
	</div>  
</section>

<section class="my-5" id="services"> <!-- my-margin in y -->
	<div class="py-5"> <!-- py-padding in y -->
		<h2 class="text-center">Our services</h2>
	</div>
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-4 col-md-4 col-12">
				<div class="card">
				  <img class="card-img-top img-fluid" src="images/nature11.jpg" alt="Card image">
				  <div class="card-body">
				    <h4 class="card-title">Beautiful Nature gift</h4>
				    <p class="card-text">My Github Account</p>
				    <a href="https://github.com/rohit679" class="btn btn-success">See Profile</a>
				  </div>
				</div>
			</div>

			<div class="col-lg-4 col-md-4 col-12">
				<div class="card">
				  <img class="card-img-top img-fluid" src="images/nature12.jpg" alt="Card image">
				  <div class="card-body">
				    <h4 class="card-title">Spectacular Scenary</h4>
				    <p class="card-text">My Linkedin Account</p>
				    <a href="https://www.linkedin.com/in/rohit-prasad-284531186/" class="btn btn-success">See Profile</a>
				  </div>
				</div>
			</div>

			<div class="col-lg-4 col-md-4 col-12">
				<div class="card">
				  <img class="card-img-top img-fluid" src="images/nature13.jpg" alt="Card image">
				  <div class="card-body">
				    <h4 class="card-title">Mindblowing beauty</h4>
				    <p class="card-text">My portfolio</p>
				    <a href="https://rohit679.github.io/" class="btn btn-success">See Profile</a>
				  </div>
				</div>
			</div>

		</div>
	</div>
</section>

<section class="my-5" id="gallery"> <!-- my-margin in y -->
	<div class="py-5"> <!-- py-padding in y -->
		<h2 class="text-center">Our Gallery</h2>
	</div>
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-4 col-md-4 col-12">
				<a href="city/london.php">
				<img src="images/london1.jpg" class="img-fluid  own"></a>
				<p style="text-align: center;"><b>London</b></p>
			</div>
			<div class="col-lg-4 col-md-4 col-12">
				<a href="city/kolkata.php">
				<img src="images/kolkata.jpg" class="img-fluid own"></a>
				<p style="text-align: center;"><b>Kolkata</b></p>
			</div>
			<div class="col-lg-4 col-md-4 col-12">
				<a href="city/paris.php">
				<img src="images/paris1.jpg" class="img-fluid own"></a>
				<p style="text-align: center;"><b>Paris</b></p>
			</div>
			<div class="col-lg-4 col-md-4 col-12">
				<a href="city/kerala.php">
				<img src="images/kerala1.jpg" class="img-fluid own"></a>
				<p style="text-align: center;"><b>Kerala</b></p>
			</div>
			<div class="col-lg-4 col-md-4 col-12">
				<a href="city/newyork.php">
				<img src="images/nw1.jpg" class="img-fluid own"></a>
				<p style="text-align: center;"><b>New York</b></p>
			</div>
			<div class="col-lg-4 col-md-4 col-12">
				<a href="city/kyoto.php">
				<img src="images/kyoto2.jpg" class="img-fluid own"></a>
				<p style="text-align: center;"><b>Kyoto</b></p>
			</div>
			<div class="col-lg-4 col-md-4 col-12">
				<a href="city/egypt.php">
				<img src="images/egypt1.jpg" class="img-fluid own"></a>
				<p style="text-align: center;"><b>Egypt</b></p>
			</div>
			<div class="col-lg-4 col-md-4 col-12">
				<a href="city/sydney.php">
				<img src="images/sydney1.jpg" class="img-fluid own"></a>
				<p style="text-align: center;"><b>Sydney</b></p>
			</div>
			<div class="col-lg-4 col-md-4 col-12">
				<a href="city/dubai.php">
				<img src="images/dubai1.jpg" class="img-fluid own"></a>
				<p style="text-align: center;"><b>Dubai</b></p>
			</div>
		</div>		
	</div>
</section>

<section class="my-5" id="contact"> <!-- my-margin in y -->
	<div class="py-5"> <!-- py-padding in y -->
		<h2 class="text-center">Contact us</h2>
	</div>
	<div class="w-50 m-auto">
		<form action="userinfo.php" method="post">
			<div class="form-group">
				<label>Username</label>
				<input type="text" name="user" autocomplete="off" class="form-control">
			</div>
			<div class="form-group">
				<label>Email Id</label>
				<input type="text" name="email" autocomplete="off" class="form-control">
			</div>
			<div class="form-group">
				<label>Mobile</label>
				<input type="text" name="mobile" autocomplete="off" class="form-control">
			</div>
			<div class="form-group">
				<label>Comments</label>
				<textarea class="form-control" name="comment"></textarea>
			</div>
			<button type="submit" class="btn btn-success">Submit</button>
		</form>
	</div>
</section>

<footer>
	<p class="p-3 bg-dark text-white text-center">@rohitprasadProduction</p>
</footer>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</body>
</html>