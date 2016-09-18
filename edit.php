<!doctype html>
<html>
<head>
    <title>Edit Product Details</title>

    <meta charset="utf-8" />
    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
  
</head>

<body>

<?php

echo 'Edit Page!

	<form action="process.php" method="post">
		Part Number: <input type="text" name="partnumber"><br>
		Description: <input type="text" name="description"><br>
		Image: <input type="text" name="image"><br>
		Stock: <input type="text" name="stock"><br>
		Cost Price: <input type="text" name="costprice"><br>
		Sale Price: <input type="text" name="saleprice"><br
		VAT Rate: <input type="text" name="vatrate"><br>
		<input type="submit">
	</form>';

?>

</body>
</html>