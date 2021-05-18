<!DOCTYPE html>
<html>
<head>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>
<div class="main">
	<div class="center form-style-8">
		<form action="" method="post">
			<input type="button" value="Back" onclick="javascript:history.back(1)">
		</form>
	</div>       
</div>

<?php

include "config.php";

// SQL statement for creating a table
// $sql_select = "SELECT * FROM Boats";

$sql = "SELECT * FROM menuItem";
$result = $con->query($sql);

if($result->num_rows > 0){
    echo "All items in the menu:";
    echo "<br>";
    echo "<br>";
?>
   <table class="table table-striped">
      <tr>
         <th>Item Id</th>
         <th>Item Name</th>
         <th>category ID</th>
         <th>Price</th>
      </tr>
<?php
while($row = $result->fetch_assoc()){
?>
      <tr>
        <td><?php echo $row['itemID']?></td>
        <td><?php echo $row['itemName']?></td>
        <td><?php echo $row['categoryID']?></td>
        <td><?php echo $row['price']?></td>
      </tr>

<?php
}
}
else {
echo "Nothing to display. Please go back to the previous page.";
}
?>

</table>

<?php
$con->close();
?>  

</body>
</html>
