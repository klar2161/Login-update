<?php

include_once 'header.php';

include_once 'footer.php';

if(isset($_SESSION['email'])){
	?>
	<?php 
		$em = $_SESSION['email'];

	$sql = "SELECT id, firstName, address, lastName, Wallet, phone,  balance FROM users WHERE email = '$em' ";
	$result = $con->query($sql);
	if ($result->num_rows > 0 ) {

	// output data of each row
	while($row = $result->fetch_assoc()) {

		$uid = $row[ "id" ];
		$fn = $row[ "firstName" ];
		$ln = $row[ "lastName" ] ;
		$w = $row["Wallet"] ;
		$b = $row["balance"] ;
		$add = $row["address"];
		$id = $row["id"];
		$phone = $row["phone"];
	}
		
		} else {
		echo "0 results" ;
	}
	$con->close();
	?>