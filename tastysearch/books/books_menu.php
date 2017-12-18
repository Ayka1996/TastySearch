<?php
$db=mysqli_connect('localhost','root','','tastysearch');

 
  #available is boolean values that shows availability
    $sql = "SELECT * FROM b_products WHERE available = 1";
    $available = $db ->query($sql);
   
  session_start();

require_once("dbcontroller.php");
$db_handle = new DBController();
    if(!empty($_GET["action"])) {
switch($_GET["action"]) {
  case "add":
    if(!empty($_POST["quantity"])) {
      $productByCode = $db_handle->runQuery("SELECT * FROM b_products WHERE p_name='" . $_GET["p_name"] . "'");
      $itemArray = array($productByCode[0]["p_name"]=>array('name'=>$productByCode[0]["p_name"], 'p_name'=>$productByCode[0]["p_name"], 'quantity'=>$_POST["quantity"],'image'=>$productByCode[0]["image"], 'price'=>$productByCode[0]["price"]));
      
      if(!empty($_SESSION["cart_itemb"])) {
        if(in_array($productByCode[0]["p_name"],array_keys($_SESSION["cart_itemb"]))) {
          foreach($_SESSION["cart_itemb"] as $k => $v) {
              if($productByCode[0]["p_name"] == $k) {
                if(empty($_SESSION["cart_itemb"][$k]["quantity"])) {
                  $_SESSION["cart_itemb"][$k]["quantity"] = 0;
                }
                $_SESSION["cart_itemb"][$k]["quantity"] += $_POST["quantity"];
              }
          }
        } else {
          $_SESSION["cart_itemb"] = array_merge($_SESSION["cart_itemb"],$itemArray);
        }
      } else {
        $_SESSION["cart_itemb"] = $itemArray;
      }
    }
  break;
  case "remove":
    if(!empty($_SESSION["cart_itemb"])) {
      foreach($_SESSION["cart_itemb"] as $k => $v) {
          if($_GET["p_name"] == $k)
            unset($_SESSION["cart_itemb"][$k]);        
          if(empty($_SESSION["cart_itemb"]))
            unset($_SESSION["cart_itemb"]);
      }
    }
  break;
  case "empty":
    unset($_SESSION["cart_itemb"]);
  break;  
}
}
$count =0;
    if(!empty($_SESSION["cart_itemb"])) {

$count = count($_SESSION["cart_itemb"]);
}
?>
<!DOCTYPE html>
<html id = "background">

<head>

	<title>Books&Bytes MENU</title>
  <meta charset="utf-8">
  <link rel="icon" href="images/booksicon.ico">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="books_css.css">
</head>
<body >
  <div style="padding-bottom: 100px;">
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
            <li><a href="/tastysearch/paul/paul.php" >PAUL</a></li>
            <li><a href="/tastysearch/cinnabon/cinnabon.php">Cinnabon</a></li>
            <li><a href="/tastysearch/books/books.php">Books&Bytes</a></li>
            <li><a href="/tastysearch/rem/rem.php" >Rem Service</a></li>
          </ul>
        </li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="books_order.php"><span class="glyphicon glyphicon-shopping-cart"></span> YOUR ORDER (<?php echo $count ?>)</a></li>
      </ul> 
    </div>
  </div>
</nav>
</div>
<div class="tab">

  <button  class="tablinks" onclick="openMenu(event, 'MAIN COURSE')">MAIN COURSE</button>
  <button class="tablinks" onclick="openMenu(event, 'SOUPS')">SOUPS</button>
  <button class="tablinks" onclick="openMenu(event, 'SIDE DISHES')">SIDE DISHES</button>
  <button class="tablinks" onclick="openMenu(event, 'SALADS')">SALADS</button>
  <button class="tablinks" onclick="openMenu(event, 'PIZZAS')">PIZZAS</button>
  <button class="tablinks" onclick="openMenu(event, 'PASTERY')">PASTERY</button>
  <div class="input-group" style="float: right;">
   <input type="text" class="form-control" style="height: 52px; width: 200px; " placeholder="Search by name" id="txtSearch"/>
        <button  type="submit">
        <span class=" fa fa-search" style="color: white !important;"></span>
        </button> 
   </div>
</div>  

<p style="text-align: center; padding-top: 10px; font-size: 25px;" id="noProduct"></p>

  <?php while($b_products = mysqli_fetch_assoc($available)) : ?> <!-- Just to check array <?php var_dump($product); ?> -->
<div id ="<?php echo $b_products['p_name'] ?>" class="<?php echo $b_products['tabs']; ?> tabcontent" style="display: <?php if (isset($_GET['tab'])){ echo ($b_products['tabs'] == $_GET['tab'])? "inline-block" : "none";} else {echo ($b_products['tabs'] == 'MAIN COURSE')? "inline-block" : "none";}?>; " >
   <form method="post" action ="books_menu.php?action=add&p_name=<?php echo $b_products['p_name']; ?>&tab=<?php echo $b_products['tabs']; ?>">
    <div class="product" style="height: 395px;">                     
    
      <div class="containermycss">
        <img src="<?php echo $b_products['image']; ?>" alt="<?php echo $b_products['p_name'] ?>" class="img-res">
          <div class="overlay">
            <div class="text" style="font-size: 12pt;" ><?php echo $b_products['ingredients'] ?></div>
          </div>
          </div>
            <div class="description">
         <h3 class="mealname" ><?php echo $b_products['p_name'] ?></h3>               
          <p><strong class="price" ><?php echo $b_products['price'] ?> AZN</strong></p>
           <div class="buttons clearfix">
              <i><?php echo $b_products['portion'] ?></i>  <br><br>             
             <div>
              <div> Quantity:
              <input type="number" style="width: 15%;" min="1" name="quantity" value="1" size="2" /> </div>

              <input type="submit" name ="add" class="add_basket" style="width: 240px; " 
              onclick="" value="ADD TO ORDER"/>
             </div>
           </div>
        </div>
    </div>
 </form>
</div>
 <?php endwhile; ?>
</div>


<br>

<br>
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
            <li><a href="/TastySearch/paul/paul.php" class="linksNav">PAUL</a></li>
            <li><a href="/TastySearch/cinnabon/cinnabon.php" class="linksNav">Cinnabon</a></li>
            <li><a href="/TastySearch/books/books.php" class="linksNav">Books&Bytes</a></li>
            <li><a href="/TastySearch/rem/rem.php" class="linksNav">Rem Service</a></li>
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


  <script>
function openMenu(evt, menuBar) {
      document.getElementById("noProduct").innerHTML=""; 

    var i, tabcontent, tablinks,arr;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
        tablinks[i].style.backgroundColor="";
    }
    arr = document.getElementsByClassName(menuBar);
    for (i = 0; i < arr.length; i++) {
        arr[i].style.display = "inline-block";
    }
    evt.currentTarget.className += " active";
}
function searchProduct(evt) {
      document.getElementById("noProduct").innerHTML=""; 
        var tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
        tablinks[i].style.backgroundColor="";
    }

    var  tabx;
    tabx = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabx.length; i++) {
        tabx[i].style.display = "none";
    }
    var text = ""+document.getElementById("txtSearch").value.toUpperCase();
    var number=0;
    for (i = 0; i < tabx.length; i++) {
      var str = tabx[i].id.toString();
      var n = str.search(text);
        if(n>-1){
          tabx[i].style.display="inline-block";
          number++;
        }
    }
    if(number==0)
    document.getElementById("noProduct").innerHTML="There is no such product in stocks!"; 


  }
</script>


</body>
</html>