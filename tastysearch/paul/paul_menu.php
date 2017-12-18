<?php
$db=mysqli_connect('localhost','root','','tastysearch');

  #available is boolean values that shows availability
    $sql = "SELECT * FROM products WHERE available = 1";
    $available = $db ->query($sql);
  
  session_start();

 require_once("dbcontroller.php");

$db_handle = new DBController();


    if(!empty($_GET["action"])) {
switch($_GET["action"]) {
  case "add":
    if(!empty($_POST["quantity"])) {
      $productByCode = $db_handle->runQuery("SELECT * FROM products WHERE p_name='" . $_GET["p_name"] . "'");
      $itemArray = array($productByCode[0]["p_name"]=>array('name'=>$productByCode[0]["p_name"], 'p_name'=>$productByCode[0]["p_name"], 'quantity'=>$_POST["quantity"],'image'=>$productByCode[0]["image"], 'price'=>$productByCode[0]["price"]));
      
      if(!empty($_SESSION["cart_item"])) {
        if(in_array($productByCode[0]["p_name"],array_keys($_SESSION["cart_item"]))) {
          foreach($_SESSION["cart_item"] as $k => $v) {
              if($productByCode[0]["p_name"] == $k) {
                if(empty($_SESSION["cart_item"][$k]["quantity"])) {
                  $_SESSION["cart_item"][$k]["quantity"] = 0;
                }
                $_SESSION["cart_item"][$k]["quantity"] += $_POST["quantity"];
              }
          }
        } else {
          $_SESSION["cart_item"] = array_merge($_SESSION["cart_item"],$itemArray);
        }
      } else {
        $_SESSION["cart_item"] = $itemArray;
      } 
    }

  break;
  case "remove":
    if(!empty($_SESSION["cart_item"])) {
      foreach($_SESSION["cart_item"] as $k => $v) {
          if($_GET["p_name"] == $k)
            unset($_SESSION["cart_item"][$k]);        
          if(empty($_SESSION["cart_item"]))
            unset($_SESSION["cart_item"]);
      }
    }
  break;
  case "empty":
    unset($_SESSION["cart_item"]);
  break;  

}

}
$count =0;
    if(!empty($_SESSION["cart_item"])) {

$count = count($_SESSION["cart_item"]);
}
?>
<!DOCTYPE html>
<html id = "background">

<head>

  <title>PAUL MENU</title>
  <meta charset="utf-8">
  <link rel="icon" href="http://www.paul.fr/img/favicon.ico?1510045128">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="paul_css.css">
</head>
<body>

  <!--Nav for transition among cafeteries--> 

<nav class="navbar nav navbar-inverse navbar-fixed-top" style="background-color: black " >
  <div class="container-fluid">
     <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <!--Header-->
        <img  id="logo" src="images/paul_logo.png">
      
      <ul class="nav navbar-nav">
        <li ><a href="paul.php" class="linksNav">Home</a></li>
        <li><a href="paul_menu.php" class="linksNav">Menu</a></li>
        <li><a href="paul_contact.php" class="linksNav">Contact</a></li>
        <li class="dropdown" style="background-color: black">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#" class="linksNav">TastySearch <span class="caret"></span></a>
          <ul class="dropdown-menu" style="background-color:black; opacity:0.8;">
            <!--put here .php pathes for each restaurant-->
            <li><a href="/tastysearch/paul/paul.php" class="linksNav">PAUL</a></li>
            <li><a href="/tastysearch/cinnabon/cinnabon.php" class="linksNav">Cinnabon</a></li>
            <li><a href="/tastysearch/books/books.php" class="linksNav">Books&Bytes</a></li>
            <li><a href="/tastysearch/rem/rem.php" class="linksNav">Rem Service</a></li>
          </ul>
        </li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="http://www.paul-international.com/" class="linksNav"><span class="glyphicon glyphicon-globe"></span> PAUL International</a></li>
        <li><a href="paul_order.php" class="linksNav"><span class="glyphicon glyphicon-shopping-cart"></span> YOUR ORDER (<?php echo $count ?>)</a></li>
      </ul> 
    </div>
  </div>
</nav>
<br><br><br><br><br><br>
<!--Main content-->

<div class="tab">
  <button  class="tablinks" onclick="openMenu(event, 'SOUPS')" >SOUPS</button>
  <button class="tablinks" onclick="openMenu(event, 'TARTINS')">TARTINS</button>
  <button class="tablinks" onclick="openMenu(event, 'HOT BEVERAGES')">HOT BEVERAGES</button>
  <button class="tablinks" onclick="openMenu(event, 'DRINKS')">DRINKS</button>
     <div class="input-group" style="float: right;">
     <input type="text" name="keywords" autocomplete="off" class="form-control" style="height: 52px; width: 200px; " placeholder="Search by name" id="txtSearch"/>
      <button type="submit" value="Search" onclick="searchProduct(event)">
      <span class=" fa fa-search" style="color: rgb(254,238,214) !important;"></span>
      </button> 

     </div>
</div> 
<p style="text-align: center; padding-top: 10px; font-size: 25px;" id="noProduct"></p>

  <?php while($product = mysqli_fetch_assoc($available)) : ?> <!-- Just to check array <?php var_dump($product); ?> -->
<div id ="<?php echo $product['p_name'] ?>" class="<?php echo $product['tabs']; ?> tabcontent" style="display: <?php if (isset($_GET['tab'])){ echo ($product['tabs'] == $_GET['tab'])? "inline-block" : "none";} else {echo ($product['tabs'] == 'SOUPS')? "inline-block" : "none";}?>; " >
   <form style="padding-bottom: 10px;" method="post" action ="paul_menu.php?action=add&p_name=<?php echo $product['p_name']; ?>&tab=<?php echo $product['tabs']; ?>">
    <div class="product" style="height: 395px;">                     
    
      <div class="containermycss">
        <img src="<?php echo $product['image']; ?>" alt="<?php echo $product['p_name'] ?>" class="img-res">
          <div class="overlay">
            <div class="text" style="font-size: 12pt;" ><?php echo $product['ingredients'] ?></div>
          </div>
          </div>
		        <div class="description">
         <h3 class="mealname" ><?php echo $product['p_name'] ?></h3>               
          <p><strong class="price" ><?php echo $product['price'] ?> AZN</strong></p>
           <div class="buttons clearfix">
              <i><?php echo $product['portion'] ?></i>  <br><br>             
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
</div><br>
<br>


<!--Footer-->
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
          <li><a class="navigation" href="paul.php">PAUL</a></li>
          <li><a class="navigation" href="cinnabon.php">Cinnabon</a></li>
          <li><a class="navigation" href="divan.php">REM</a></li>
          <li><a class="navigation" href="books.php">Books&Bytes</a></li>
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