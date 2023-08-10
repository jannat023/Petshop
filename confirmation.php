<?php include 'includes/session.php'; ?>
<?php include 'includes/header.php'; ?>
<body class="hold-transition skin-blue layout-top-nav">
<div class="wrapper">

	<?php include 'includes/navbar.php'; ?>
	 
	  <div class="content-wrapper">
	    <div class="container">

	      <!-- Main content -->
	      <section class="content">
	        <div class="row">
	        	
	        		 <form action="download.php" method='GET'>
						<div style="font-size: 20px; padding-left: 30%; padding-top: 5%; font-family: cursive;">
							<label style="font-size: 50px; font-family: monospace; color: grey;">CONFIRMATION</label> <br><br>
							<label>Name: <?php echo $user['firstname']." ".$user['lastname']; ?></label> <br>
							<label>Email: <?php echo $user['email']; ?></label> <br>
							<label>Name on Card: <?php echo $_GET['cardname']; ?></label> <br> 
							<label>Card Number: <?php echo $_GET['cardnumber'] ?></label> <br>
							<input type="hidden" name="cardname" value="<?php echo $_GET['cardname'] ?>">
							<input type="hidden" name="cardnumber" value="<?php echo $_GET['cardnumber'] ?>">
							<input type="hidden" name="voucherfield" value="<?php echo $_GET['voucherfield'] ?>">
							<?php
								$cardName = $_GET['cardname'];
								$cardNumber = $_GET['cardnumber'];
								$voucher = $_GET['voucherfield'];
								$userId = $user['id'];
								$conn = mysqli_connect('localhost', 'root', '', 'ecomm');
								$sql = "SELECT * FROM cart WHERE user_id = '$userId'";
								$result = mysqli_query($conn, $sql);

								while ($row = mysqli_fetch_assoc($result)) {
									$productId = $row['product_id'];
									$quantity = $row['quantity'];
									
								}
								mysqli_close($conn);
								$conn = mysqli_connect('localhost', 'root', '', 'ecomm');
								$sql = "SELECT * FROM products WHERE id = '$productId'";
								$result = mysqli_query($conn, $sql);
								// $f = printf(result1);

								while ($row = mysqli_fetch_assoc($result)) {
									$price = $row['price'];
									$pname = $row['name'];
									
								}
								$total = $price * $quantity;
								$discount = 0;
				                $vat = 0;

				                if ($total >= 1000 && $total < 3000) {
				                  $discount = $total * 0.05;
				                  $total = $total - $discount;

				                  if ($voucher == "PET05") {
				                    $discount = $total * 0.05;
				                    $total = $total - $discount;
				                  }
				                  
				                }
				                elseif ($total >= 3000 && $total < 5000) {
				                  $discount = $total * 0.1;
				                  $total = $total - $discount;

				                  if ($voucher == "PET10") {
				                    $discount = $total * 0.10;
				                    $total = $total - $discount;
				                    // $voucher = "pass";
				                  }

				                }
				                elseif ($total >= 5000 && $total < 10000) {
				                  $discount = $total * 0.15;
				                  $total = $total - $discount;

				                  if ($voucher == "PET15") {
				                    $discount = $total * 0.15;
				                    $total = $total - $discount;
				                  }

				                }
				                elseif ($total >= 10000) {
				                  $discount = $total * 0.2;
				                  $total = $total - $discount;

				                  if ($voucher == "PET20") {
				                    $discount = $total * 0.2;
				                    $total = $total - $discount;
				                  }

				                }
				                $vat = $total * 0.015;
				                $totalPrice = $total + $vat;

							?>
							<label>Product Name: <?php echo $pname ?></label> <br>
							<label>Quantity: <?php echo $quantity ?></label> <br>
							<label>Total Price: <?php echo $totalPrice ?></label> <br>

						  	<br>
							<button class="btn btn-success" type = "submit" style = "padding:10px 50px;" hover="Order Confirmed" name="payit"> Pay </button>
						
						</div>
					</form>
	        		
	        </div>
	      </section>
	     
	    </div>
	  </div>
  	<?php $pdo->close(); ?>
  	<?php include 'includes/footer.php'; ?>
</div>

<?php include 'includes/scripts.php'; ?>

<!-- Paypal Express -->

</body>
</html>
