<html>
<head>
	<title>Products</title>
</head>
<body>
	<form method="POST">
	<select>
		<option value=" "></option>
		<option value="price">PRICE</option>
		<option value="category">CATEGORY</option>
	</select>
	<input type="submit" name="Filter" value="Filter">
	</form>
</body>
</html>

<?php
	require "dbconfig.php";//already connection established

	$details=mysqli_query("select product_name from products where name=$pname");

	while($rows=mysql_fetch_array($details)){
		$productname=$rows['pname'];
		echo "$productname<br>";
	}

	if($_POST['Filter']){
		$val=$_POST['price'];
		
		$det="select* from products where price=$val;
		
		echo "$det";
	}
?>

