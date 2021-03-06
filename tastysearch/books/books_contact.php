<?php
session_start();
$con = mysqli_connect("localhost", "root", "", "tastysearch");
?>
<!DOCTYPE html>
<html id = "background">

<head>
    <title>Books&Bytes CONTACT</title>
      <meta charset="utf-8">
      <link rel="icon" href="images/booksicon.ico">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="books_css.css">
</head>

<body id="bcon">
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

<div id="contact_info">
 <div class="container">
  <h2>CONTACT US</h2>

    <hr><br>
<div class="row">
  <div class="col-sm-4">
  <a href="https://www.facebook.com/PAUL.Azerbaijan/" class="fa fa-facebook fa-3x" style="color:black;"> </a>
  <a href="https://www.instagram.com/paulazerbaijan/" class="fa fa-instagram fa-3x" style="color:black;"></a>
  <a href="https://www.instagram.com/paulazerbaijan/" class="fa fa-twitter fa-3x" style="color:black;"></a>
  <br> <br>
  <table>
  <tr>
    <td rowspan="2" > <i class="fa fa-phone fa-2x"> &nbsp </i> </td>  
    <td> 055-XXX-XX-XX </td>
  </tr>
  <tr>
    <td > 012-XXX-XX-XX </td>
  </tr>
</table>
<hr> 
<table>
  <tr>
    <td><i class="fa fa-envelope fa-2x" aria-hidden="true">&nbsp</i>
</td>
    <td>PAUL mail</td>
  </tr>
</table>
<hr>
<table>
  <tr>
    <td><i class="fa fa-map-marker fa-3x" >&nbsp</i>
</td>
    <td>SPIA Building, Basement.
    ADA University, Baku, Azerbaijan.</td>
  </tr>
</table>
<hr>
<table>
  <tr>
    <td><i class="fa fa-calendar fa-2x" >&nbsp</i>
</td>
    <td>Monday - Friday, 9AM-6PM</td>
  </tr>
</table>
<hr>
</div>
<div class="col-sm-1"> </div>
<div class="col-sm-7">
  <iframe id="booksmap" 
      src="https://www.google.com/maps?q=ADA+University+&amp;output=embed"  frameborder="0" scrolling="no">
  </iframe  >
</div>
</div>
 </div>
<div class="container" style="padding-bottom: 130px;">
<h2>Send Feedbacks</h2>
  <div id="feedbackform">

     <form action="books_contact.php" method="post" enctype="multipart/form-data">
      <div class="row">
        <div class="col-sm-2">
        <input class="inputname" type="text" name="firstname" placeholder="Firstname" required> </div>
     <div class="col-sm-2">
      <input class="inputname" type="text" name="lastname" placeholder="Lastname" required> </div><br> <br> </div>

    <div class="form-group">
      <textarea class="form-control" type="text" rows="5" id="feedbackid" name="feedback" placeholder="Your feedbacks" required></textarea>
    </div>
        <br>
        <div class="row">
      <input style="float: right" name="submit" id="feedbackbutton" type="submit" value="submit"></div> </div>
</div> </div>
  </form>

<footer >
  <hr>
  <div class="container" style="clear: both;">
    <div class="row">


      <div class="col-sm-5">
        <h4 style="color:#990000">About Us</h4>
        <hr>
        <p>ADA University runs four diverse outlets across campus as well as four catered halls of residence and a dedicated hospitality service catering for meetings, events and celebrations. As new established online system of ADA university, TastySearch provides dishes of campus cafeterias in a digital way. The main aim is to assist the audience for saving their time without wasting their efforts while waiting on the long lines.</p> 
      </div>  
            <div class="col-sm-3"> </div>  
       <div class="col-sm-2">
        <h4 style="color:#990000">Cafeterias</h4>
        <hr>
        <ul class="list-unstyled">
          <li><a class="navigation" href="/TastySearch/paul/paul.php">PAUL</a></li>
          <li><a class="navigation" href="/TastySearch/cinnabon/cinnabon.php">Cinnabon</a></li>
          <li><a class="navigation" href="/TastySearch/books/books.php">Books&Bytes</a></li>
          <li><a class="navigation" href="/TastySearch/rem/rem.php">REM</a></li>
        </ul>  
      </div>  


    

      <div class="col-sm-2">
        <h4 style="color:#990000">Contacts</h4>
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
<?php 

if (isset($_POST['submit'])) 
{
  $fname = $_POST['firstname'];
  $lname = $_POST['lastname'];
  $feedback = $_POST['feedback'];
  
  $sql = "insert into b_feedback (fname, lname, feedback) values ('$fname','$lname','$feedback')";


  if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

// Perform queries 
mysqli_query($con,"SELECT * FROM b_feedback");
mysqli_query($con,"INSERT INTO b_feedback (fname, lname, feedback) values ('$fname','$lname','$feedback')");
echo '<script>alert("Thank you for your feedback.")</script>';
echo "<meta http-equiv = 'refresh' content='0'>";

mysqli_close($con);

}

?>