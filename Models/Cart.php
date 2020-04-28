<?php 
session_start();

$query = "set names utf8";
$stmt = new PDO("mysql:host=localhost;dbname=mvc;", 'root', '');
$stmt->query($query);

$action = $_POST["action"];
if ($action == 'show')
{
   if (!(isset($_SESSION['cart'])))
   {
       echo '<h2><div class="text-center h1-responsive">У вас нет заказов</div></h2>';
       exit;
   };
   $cart = $_SESSION['cart'];
   if (count($cart) == 0)
   {
       echo '<h2><div class="text-center h1-responsive">У вас нет заказов</div></h2>';
       exit;
   }

   for ($i = 0; $i < count($cart); $i++)
   {
       $idProduct = $cart[$i]["idProduct"];
       $query = 'select * from `product` where id = '.$cart[$i]["idProduct"].'';
       $results = $stmt->query($query);
       while($row = $results->fetch(PDO::FETCH_ASSOC))
       {
           echo'
           <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
				      <div class="col-form-label-sm p-3 center mb-5">
	    			    <div>
	      				  <img src="'.$row["img"].'" class="col-img float-lg-left ml-lg-n4 pl-4 pr-3">
	    			    </div>
	      			  <strong class="d-inline-block mb-2 text-dark mt-3">Price: '.$row["price"].' ₽</strong>
	      			  <h3>Model: '.$row["model"].'</h3>
	      			  <div class="mb-1 text-muted mb-3">'.$row["producer"].'</div>
				      </div>
				        <div>
					         <input type="button" value="Удалить из корзины" onClick="delFromCart('.$row["id"].')" class="btn btn-danger del">
				        </div>
			     </div>
           ';                      
       }
       
   }
}
$cart = $_SESSION['cart'];
for ($i = 0; $i < count($cart); $i++)
{
   $idProduct = $cart[$i]["idProduct"];
   $query = 'select `price` from `product` where id = '.$cart[$i]["idProduct"].'';
   $results = $stmt->query($query);
   while($row = $results->fetch(PDO::FETCH_ASSOC))
   {
    $count = 0;
    $count += $row["price"];                     
   }       
}
echo'
<footer class="mt-5">
  <div>
    <hr>
      <p>
        <h3 class="ml-5"><b>Total price: </b> '.$count.' ₽</h3>
      </p>
      <a class="btn btn-dark float-lg-right mt-lg-n5 mr-5" href="/submit">Buy</a>
  </div>
</footer>
'; 


############################
if ($action == 'add'){
  $cart = $_SESSION['cart'];

	$id = $_POST['id'];
	
	$newProduct["idProduct"] = $id;

	$cart[count($cart)] = $newProduct;
	
	$_SESSION['cart'] = $cart;
}

###########################
if ($action == 'del'){
    $id = $_POST["id"];

    $newCart = array();

    $cart = $_SESSION['cart'];

    for ($i = 0; $i < count($cart); $i++){
        $idProduct = $cart[$i]["idProduct"];
        if ($id != $idProduct){
            $newCart[count($newCart)] = $cart[$i];
        }
    }

    $_SESSION['cart'] = $newCart;
}

