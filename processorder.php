<html>
<?php
	$tireqty = $_POST[ 'tireqty'];
	$oilqty = $_POST[ 'oilqty'];
	$sparkqty = $_POST[ 'sparkqty'];
?>
	

	<head>
		<title>Bob's Auto Patrs - Order Results</title>
	</head>
	<body>
		<h1>Bob 's Auto Parts</h1>
		<h2>Order Results</h2>
		<?php
			echo "<p>Order processed at";
			echo date('H:i,JS F Y');
			echo "</p>";
			echo "<p>Your order is as follows: </p>";
			echo $tireqty.'tires<br />';
			echo $oilqty.'bottles of oil<br />';
			echo $sparkqty.'spark plugs<br />'; 
			$totalqty=0;
			$totalamount =0.0;
		?>

	</body>
</html>

