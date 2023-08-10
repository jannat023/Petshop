<?php include 'includes/session.php'; ?>
<?php include 'includes/header.php'; ?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.2/html2pdf.bundle.js"></script>
<body class="hold-transition skin-blue layout-top-nav">
<div class="wrapper">

	<?php include 'includes/navbar.php'; ?>
	 
	  <div class="content-wrapper">
	    <div class="container">

	      <!-- Main content -->
	      <section class="content">
	        <div class="row">
	        	
	        		<form action="downloadPDF.php" method='GET'>
						<div style="font-size: 20px; padding-left: 30%; padding-top: 5%; font-family: cursive;">
						<div id="makepdf">
							<label style="font-size: 50px; font-family: monospace; color: grey;">Payment Completed</label> <br><br>
							
							<?php
								$userId = $user['id'];
								$voucher = $_GET['voucherfield'];
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
                				$ptotal = $total;
								$discount = 0;
				                $vat = 0;

				                if ($total >= 1000 && $total < 3000) {
				                  $discount = $total * 0.05;
				                  $total = $total - $discount;
				                  
				                  if ($voucher == "PET05") {
				                    $vdiscount = $total * 0.05;
				                    $total = $total - $discount;
				                    $discount = $discount + $vdiscount;
				                  }

				                }
				                elseif ($total >= 3000 && $total < 5000) {
				                  $discount = $total * 0.1;
				                  $total = $total - $discount;

				                  if ($voucher == "PET10") {
				                    $vdiscount = $total * 0.10;
				                    $total = $total - $discount;
				                    $discount = $discount + $vdiscount;
				                  }

				                }
				                elseif ($total >= 5000 && $total < 10000) {
				                  $discount = $total * 0.15;
				                  $total = $total - $discount;

				                  if ($voucher == "PET15") {
				                    $vdiscount = $total * 0.15;
				                    $total = $total - $discount;
				                    $discount = $discount + $vdiscount;
				                  }

				                }
				                elseif ($total >= 10000) {
				                  $discount = $total * 0.2;
				                  $total = $total - $discount;

				                  if ($voucher == "PET20") {
				                    $vdiscount = $total * 0.2;
				                    $total = $total - $discount;
				                    $discount = $discount + $vdiscount;
				                  }

				                }
				                $vat = $total * 0.015;
				                $totalPrice = $total + $vat;

							?>
							<input type="hidden" name="productId" value="<?php echo $productId ?>">

							<table style="border: transparent;">
								<tr>
									<th>Card Owner</th>
									<td style="padding-left: 100px"><?php echo $_GET['cardname']; ?></td>
								</tr>
								<tr>
									<th>Card Number</th>
									<td style="padding-left: 100px"><?php echo $_GET['cardnumber']; ?></td>
								</tr>
								<tr>
									<th>Product Name</th>
									<td style="padding-left: 100px"><?php echo $pname ?></td>
								</tr>
								<tr>
									<th>Quantity</th>
									<td style="padding-left: 100px"><?php echo $quantity ?></td>
								</tr>
								<tr>
									<th>Price</th>
									<td style="padding-left: 100px"><?php echo $ptotal ?></td>
								</tr>
								<tr>
									<th>Discount</th>
									<td style="padding-left: 100px"><?php echo $discount ?></td>
								</tr>
								<tr>
									<th>VAT(+1.5%)</th>
									<td style="padding-left: 100px"><?php echo $vat ?></td>
								</tr>
								<tr>
									<th>Toatl Price</th>
									<td style="padding-left: 100px"><?php echo $totalPrice ?></td>
								</tr>
							</table>
						</div>

						  	<br>
							<button type="submit" class="btn btn-success" id="button">Print</button>
						
						</div>

					</form>
	        		
	        </div>
	      </section>
	     
	    </div>
	  </div>
  	<?php $pdo->close(); ?>
  	<?php include 'includes/footer.php'; ?>
</div>
<script>
    let button = document.getElementById("button");
    let makepdf = document.getElementById("makepdf");
 
    button.addEventListener("click", function () {
        let mywindow = window.open("", "PRINT",
                "height=400,width=600");
 
        mywindow.document.write(makepdf.innerHTML);
 
        mywindow.document.close();
        mywindow.focus();
 
        mywindow.print();
        mywindow.close();
 
        return true;
    });
</script>

<?php include 'includes/scripts.php'; ?>

</body>
</html>
