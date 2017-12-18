<!DOCTYPE html>
<html >
<head>
  <title>Books&Bytes</title>
  
<meta charset="utf-8">
<link rel="icon" href="images/booksicon.ico">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">	
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="books_css.css">
</head>
<body>
<nav class="navbar nav navbar-default navbar-fixed-top" >
  <div class="container-fluid">
            
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="books.php"><b>Books&Bytes</b></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">

      
      <ul class="nav navbar-nav">
        <li ><a href="books.php" >Home</a></li>
        <li><a href="books_menu.php">Menu</a></li>
        <li><a href="books_contact.php" >Contact</a></li>
        <li class="dropdown" >
          <a class="dropdown-toggle" data-toggle="dropdown" href="#" class="linksNav">TastySearch <span class="caret"></span></a>
          <ul class="dropdown-menu" style="background-color:white; opacity:0.8;">
            <li><a href="/TastySearch/paul/paul.php" class="linksNav">PAUL</a></li>
            <li><a href="/TastySearch/cinnabon/cinnabon.php" class="linksNav">Cinnabon</a></li>
            <li><a href="/TastySearch/books/books.php" class="linksNav">Books&Bytes</a></li>
            <li><a href="/TastySearch/rem/rem.php" class="linksNav">Rem Service</a></li>
          </ul>
        </li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="books_order.php"><span class="glyphicon glyphicon-shopping-cart"></span> YOUR ORDER</a></li>
      </ul> 
    </div>
  </div>
</nav>

  <h2>MY CAROUSEL</h2>  
  <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="3000">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="images/bookslide32.jpg" style="width:100%; height: 100%;">
      </div>

      <div class="item">
        <img src="images/bookslide22.jpg" style="width:100%; height: 100%;">
      </div>
            <div class="item">
        <img src="images/bookslide12.jpg" style="width:100%; height: 100%;">
      </div>
    </div>

    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>

<div class="container"> <br>
	<div class="row">
		<h1 style="color:#990000"><b>ABOUT Books&Bytes</b></h1>
		<hr class="booksdesc">

	</div>
	<div class="row" id="booksabout">
		<p style="text-align: justify;">SPIA Building - This cozy café is a great place to spend a break. The food offer is homely and emphasizes local much loved recipes. Daily Menu features such as fruit pie and home-made soup are a definite recommendation. Come here for quality barista coffees, especially teas, freshly squeezed juices or smoothies. Looking for something more substantial? Try one of our hand-made sandwiches on artisan bread, a freshly made salad or a bowl of piping hot soup. We also have delicious cookies and cakes to tempt you.</p>
	</div>
	<div class="row">
	 <h2 style="color:#990000"><b>Books&Bytes Photo Gallery</b></h2>
	 <hr class="booksdesc">
	 </div>
	<div class="row" id="booksgallery">
  <div class="row">
    <div class="col-md-4">
      <div class="thumbnail">
        <a  href="images/bookg1.jpg" target="_blank">
          <img  class="aboutphoto" src="images/bookg1.jpg" style="width:100%">

        </a>
      </div>
    </div>
    <div class="col-md-4">
      <div class="thumbnail">
        <a href="images/bookg2.jpg" target="_blank">
          <img class="aboutphoto"  src="images/bookg2.jpg" style="width:100%">

        </a>
      </div>
    </div>
    <div class="col-md-4">
      <div class="thumbnail">
        <a href="images/booksg3.jpg" target="_blank">
          <img class="aboutphoto"  src="images/booksg3.jpg" style="width:100%">

        </a>
      </div>
    </div>
  </div>
	</div>
</div>
<footer >
  <hr>
  <div class="container" style="clear: both;">
    <div class="row">


      <div class="col-sm-5">
        <h4 style="color:black">About Us</h4>
        <hr>
        <p>ADA University runs four diverse outlets across campus as well as four catered halls of residence and a dedicated hospitality service catering for meetings, events and celebrations. As new established online system of ADA university, TastySearch provides dishes of campus cafeterias in a digital way. The main aim is to assist the audience for saving their time without wasting their efforts while waiting on the long lines.</p> 
      </div>  
            <div class="col-sm-3"> </div>  
       <div class="col-sm-2">
        <h4 style="color:black">Cafeterias</h4>
        <hr>
        <ul class="list-unstyled">
            <li><a href="/TastySearch/paul/paul.php" class="linksNav">PAUL</a></li>
            <li><a href="/TastySearch/cinnabon/cinnabon.php" class="linksNav">Cinnabon</a></li>
            <li><a href="/TastySearch/books/books.php" class="linksNav">Books&Bytes</a></li>
            <li><a href="/TastySearch/rem/rem.php" class="linksNav">Rem Service</a></li>
        </ul>  
      </div>  


    

      <div class="col-sm-2">
        <h4 style="color:black">Contacts</h4>
        <hr>
        <ul class="list-unstyled">
        <div style="font-size: 12px" >

        <li>+994 553830733 </li>
        <li>+994 702023616 </li>
        <li>FlexTech@gmail.com </li>


        </ul>

        <a href="#" class="fa fa-facebook fa-2x"></a>
        <a href="#" class="fa fa-twitter fa-2x"></a>
        <a href="#" class="fa fa-google fa-2x"></a>
        <a href="#" class="fa fa-instagram  fa-2x"></a>
        
        
      </div>  


    </div>
      
<hr><p>
<h5>Copyright &copy; 2017 TastySeach.com </h5> 
        All rights reserved. </p>

  </div>

</footer>
</body>
</html>
