<html>
<head>
	<title>ONlINE SHOPPING</title>
</head>

<body>
	<form method="POST" action="shopping.php">
		Product Name : <input type="text" name="Pname" value="Pname"><br>
		Price        : <input type="text" name="Pprice" value="Pprice"><br>
		Category     : <input type="text" name="category" value="category"><br>
		Quantity     : <input type="text" name="quant" value="quant"><br>
		Purchase Date :<input type="text" name="purchase" value="purchase"><br>
		Expiry Date : <input type="text" name="expiry" value="expiry"><br>
		<input type="submit" name="Add" value="Add">
		<input type="submit" name="Searchproducts" value="Searchproducts">
	</form>
</body>
</html>

<?php 
	//require dbconfig.php;  Database connection or
	$conn=mysqli_connect("localhost","root","","productdb");
	
	if($conn==false)
		die("Couldn't Connect to the Database");
	
	//Seller Side
	if($_POST["Add"]){
		$pname=$_POST["Pname"];
		$price=$_POST["Pprice"];
		$categ=$_POST["category"];
		$quantity=$_POST["quant"];
		$purchase=$_POST["purchase"];
		$expiry=$_POST["expiry"];
		
	$sql="INSERT INTO products (product_name,price,category,quantity,purchasedate,expirydate) 
				VALUES($pname,$price,$categ,$quantity,$purchase,$expiry)";

	if(mysqli_query($conn,$link))
		die("Records inserted successfully");
	else
		die("ERROR");
	}

	//User side
	if($_POST["Searchproducts"]){
		header("Location : productlist.php");//Redirects to products list page and displays entire products details
	}
?>