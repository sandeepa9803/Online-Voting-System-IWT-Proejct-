<?php
	$CardHolderName = $_POST['CardHolderName'];
	$CardNumber = $_POST['CardNumber'];
	$CardType = $_POST['CardType'];
	$CardCVC = $_POST['CardCVC'];
	$CardExpireDate = $_POST['CardExpireDate'];
	$TicketCount = $_POST['TicketCount'];
	

	// Database connection
	$conn = new mysqli('localhost','root','','payment');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into paymentnew(CardHolderName,CardNumber,CardType,CardCVC,CardExpireDate,TicketCount) values(?, ?, ?, ?, ?,?)");
		$stmt->bind_param("sisiii", $CardHolderName, $CardNumber, $CardType, $CardCVC, $CardExpireDate,$TicketCount);
		$execval = $stmt->execute();
		echo $execval;
		echo "Payment successfully...";
		$stmt->close();
		$conn->close();
	}
?>