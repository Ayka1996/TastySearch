<?php
session_start();
$connect = mysqli_connect("localhost", "root", "", "tastysearch");
  $query = "SELECT * FROM products ORDER BY id ASC";
  $run = mysqli_query($connect, $query);
 
 require_once("dbcontroller.php");
$db_handle = new DBController();
$count = count($_SESSION["cart_item"]);
    if(!empty($_GET["action"])) {
switch($_GET["action"]) {
  case "add":
    if(!empty($_POST["quantity"])) {
      $productByCode = $db_handle->runQuery("SELECT * FROM products WHERE p_name='" . $_GET["p_name"] . "'");
      $itemArray = array($productByCode[0]["p_name"]=>array('name'=>$productByCode[0]["p_name"], 'p_name'=>$productByCode[0]["p_name"], 'quantity'=>$_POST["quantity"], 'price'=>$productByCode[0]["price"]));
      
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
      
?>

<!DOCTYPE html>
<html>
<head>

  <title>Your Order</title>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="paul_css.css">

    <link rel="icon" href="http://www.paul.fr/img/favicon.ico?1510045128">

</head>
<body>
<nav class="navbar nav navbar-inverse navbar-fixed-top" style="background-color: black " >
  <div class="container-fluid">
            
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
        <img  id="logo" src="images/paul_logo.png">
      
      <ul class="nav navbar-nav">
        <li ><a href="paul.php" class="linksNav">Home</a></li>
        <li><a href="paul_menu.php" class="linksNav">Menu</a></li>
        <li><a href="paul_contact.php" class="linksNav">Contact</a></li>
        <li class="dropdown" style="background-color: black">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#" class="linksNav">TastySearch <span class="caret"></span></a>
          <ul class="dropdown-menu" style="background-color:black; opacity:0.8;">
            <li><a href="/TastySearch/paul/paul.php" class="linksNav">PAUL</a></li>
            <li><a href="/TastySearch/cinnabon/cinnabon.php" class="linksNav">Cinnabon</a></li>
            <li><a href="/TastySearch/books/books.php" class="linksNav">Books&Bytes</a></li>
            <li><a href="/TastySearch/rem/rem.php" class="linksNav">Rem Service</a></li>
          </ul>
        </li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="http://www.paul-international.com/" class="linksNav"><span class="glyphicon glyphicon-globe"></span> PAUL International</a></li>
        <li><a href="paul_order.php" class="linksNav"><span class="glyphicon glyphicon-shopping-cart"></span> YOUR ORDER (<?php echo $count?>)</a></li>
      </ul> 
    </div>
  </div>
</nav>

<div id="orderheader">
<div class="container">
    <div class="container">
  <h3>YOUR ORDER</h3>
</div>

<?php
if(isset($_SESSION["cart_item"])){

    $item_total = 0;
    $items="";
  }
?>  

<?php
  if(!empty($_SESSION["cart_item"])) {   
    foreach ($_SESSION["cart_item"] as $item){
      $item_total+=($item["price"]*$item["quantity"]);
      $items .= $item["name"].' - '.$item["quantity"].";";
    ?>
<div class="container">
      <hr>

  <div class="row">
    <div class="col-sm-3">
    <img class="orderedimage" src="<?php echo $item['image']?>"> </div>
    <div class="col-sm-4">
      <div style="font-size: 15pt;"><b><?php echo $item["name"]; ?></b> </div><br> 
      <div style="font-style: italic;" > Quantity: 
      <input type="text" style="font-style: italic; background-color: rgb(254,238,214);" value="<?php echo $item["quantity"]; ?>"  size="1"  id="count" readonly ></div>
<br>
      <b><?php echo $item["price"]*$item["quantity"]; ?> AZN </b> 

      </div>
    <div class="col-sm-4"> </div>
    <div class="col-sm-1" style="font-size: 20pt;" > 

                <a href="paul_order.php?action=remove&p_name=<?php echo $item["p_name"]; ?>" class="btnRemoveAction" style="color: black;"><strong>X</strong></a>  <br><br><br>

</div>
  </div>
</div> <?php
     }}else{

      ?>
      <div style="padding-top: 30px; text-align: center; font-size: 24px; ">YOUR CART IS EMPTY!</div>
      <?php
    }
    ?>
<div class="container"> 
  <hr>
    <div class="row">
      <div class="col-sm-9">
      <div>
 <a style="    background-color: black;
    color: rgb(254,238,214);
    border: none;
    color: white;
    padding: 5px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;" href="paul_order.php?action=empty">Empty Cart</a></div></div>

      <form action="paul_order.php?action=empty" method="post" enctype="multipart/form-data">
      <div class="col-sm-3" style="font-size: 20px;"> <i><strong>TOTAL:</strong> </i> 
<input type="text" size ="2" style="background-color: rgb(254,238,214); border-width: 0;" value= "<?php if(empty($_SESSION['cart_item'])){ ?>0<?php } else echo $item_total;  ?> " name ="p_price" readonly>(AZN) </div>
      <br><br>



  </div>
  <br>
<div class="row">

                          <div class="col-sm-3"></div>
        <div class="col-sm-3">
        <input class="orderoption" size="30" type="text" name="u_id" placeholder="ID" required>     </div>

                <div class="col-sm-3" >

        <input class="orderoption" size="30" type="text" name="u_name" placeholder="Name" required> </div>

        <div class="col-sm-3">
      <input class="orderoption" size="30" type="time" min="09:00" max="18:00"  type="text" name="p_time" placeholder="Select time interval" required>
      <input type="hidden" name="p_name" value="<?php echo $items ?>">

      <input id="orderbutton" name="submit" type="submit" value="Send Order">  
    </form>
    </div>
</div>
  <br>
</div>
      
      
    </div>
</div>
</div>
<script >
$(function() {
    $(".plus").click(function() {
        var quantity = $(this).prev().prev(":quantity");
        quantity.val(parseFloat(quantity.val(), 10) + 0.5);
    });

    $(".minus").click(function() {
        var quantity = $(this).prev(":quantity");
        quantity.val(parseFloat(quantity.val(), 10) - 0.5);
    });
});
    </script> 
</body>
</html>
<?php 

if (isset($_POST['submit'])) 
{
  $id = $_POST['u_id'];
  $p_name = $_POST['p_name'];
  $u_name = $_POST['u_name'];
  $p_time = $_POST['p_time'];
  $p_price = $_POST['p_price'];
    if ($p_price!=0){

  $sql = "insert into orderlist (id, p_name, u_name, p_time, p_price ) 
  values ('$id','$p_name','$u_name','$p_time', '$p_price')";


  if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

// Perform queries 
mysqli_query($connect,"SELECT * FROM orderlist");
mysqli_query($connect,"INSERT INTO orderlist (id, p_name, u_name, p_time, p_price ) 
  values ('$id','$p_name','$u_name','$p_time', '$p_price')");
echo '<script>alert("Your order sent")</script>';
echo "<meta http-equiv = 'refresh' content='0'>";

mysqli_close($connect);
}else  
{
 echo '<script>alert("Your order is empty")</script>';
echo "<meta http-equiv = 'refresh' content='0'>"; 
}
}

?>