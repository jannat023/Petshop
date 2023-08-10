<style type="text/css">
    .row {
  display: -ms-flexbox; /* IE10 */
  display: flex;
  -ms-flex-wrap: wrap; /* IE10 */
  flex-wrap: wrap;
  margin: 0 -16px;
}

.col-25 {
  -ms-flex: 25%; /* IE10 */
  flex: 25%;
}

.col-50 {
  -ms-flex: 50%; /* IE10 */
  flex: 50%;
}

.col-75 {
  -ms-flex: 75%; /* IE10 */
  flex: 75%;
}

.col-25,
.col-50,
.col-75 {
  padding: 0 16px;
}

.bcontainer {
  background-color: #f2f2f2;
  padding: 5px 20px 15px 20px;
  border: 1px solid lightgrey;
  border-radius: 3px;
}

input[type=text] {
  width: 100%;
  margin-bottom: 20px;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 3px;
}

label {
  margin-bottom: 10px;
  display: block;
}

.icon-container {
  margin-bottom: 20px;
  padding: 7px 0;
  font-size: 24px;
}

.btn {
  background-color: #04AA6D;
  color: white;
  padding: 12px;
  margin: 10px 0;
  border: none;
  width: 100%;
  border-radius: 3px;
  cursor: pointer;
  font-size: 17px;
}

.btn:hover {
  background-color: #45a049;
}

span.price {
  float: right;
  color: grey;
}

/* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other (and change the direction - make the "cart" column go on top) */
@media (max-width: 800px) {
  .row {
    flex-direction: column-reverse;
  }
  .col-25 {
    margin-bottom: 20px;
  }
}
</style>

<?php include 'includes/session.php'; 
  if(isset($_POST['paypop'])){
    $cardname = $_POST['cardname'];
  }
?>
<?php include 'includes/header.php'; ?>
<body class="hold-transition skin-blue layout-top-nav">
  <script language="JavaScript">
        // document.getElementById('display').innerHTML = document.getElementById("voucherfield").value;
        var x = document.getElementById("voucherfield").value;
  </script>
<div class="wrapper">

  <?php include 'includes/navbar.php'; ?>
   
    <div class="content-wrapper">
      <div class="bcontainer">

        <!-- Main content -->
        <section class="content">
          <div class="row">
            
      <form action="confirmation.php" method="GET">

        <div class="row">
          <div class="col-50">
            <h3>Billing Address</h3>
                <div class="form-group">
                    <label for="firstname" class="col-sm-3 control-label">Firstname</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="firstname" name="firstname" value="<?php echo $user['firstname']; ?>" disabled>
                    </div>
                </div>
                <div class="form-group">
                    <label for="lastname" class="col-sm-3 control-label">Lastname</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="lastname" name="lastname" value="<?php echo $user['lastname']; ?>" disabled>
                    </div>
                </div>
                <div class="form-group">
                    <label for="email" class="col-sm-3 control-label">Email</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="email" name="email" value="<?php echo $user['email']; ?>" disabled>
                    </div>
                </div>
                    
                <div class="form-group">
                    <label for="contact" class="col-sm-3 control-label">Contact Info</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="contact" name="contact" value="<?php echo $user['contact_info']; ?>" disabled>
                    </div>
                </div>
                <hr>

          <div class="col-50">
            <h3>Payment</h3>
            <label for="fname">Accepted Cards</label>
            <div class="icon-container">
              <i class="fa fa-cc-visa" style="color:navy;"></i>
              <i class="fa fa-cc-amex" style="color:blue;"></i>
              <i class="fa fa-cc-mastercard" style="color:red;"></i>
              <i class="fa fa-cc-discover" style="color:orange;"></i>
            </div>
            <label for="cname">Name on Card</label>
            <input type="text" id="cname" name="cardname" placeholder="John More Doe" required>
            <label for="ccnum">Credit card number</label>
            <input type="text" id="ccnum" name="cardnumber" placeholder="1111-2222-3333-4444" minlength="16" maxlength="16" required>
            <div class="row">
              <div class="col-50">
                <label for="expmonth">Exp Month</label>
                <select style="width: 100%; height: 45px; border-style: none;" name="expmonth" id="expmonth" required>
                  <option value="January">January</option>
                  <option value="February">February</option>
                  <option value="March">March</option>
                  <option value="April">April</option>
                  <option value="May">May</option>
                  <option value="June">June</option>
                  <option value="July">July</option>
                  <option value="August">August</option>
                  <option value="September">September</option>
                  <option value="October">October</option>
                  <option value="November">November</option>
                  <option value="December">December</option>
                </select>
              </div>
              <div class="col-30">
                <label for="voucher">Apply a Voucher</label>
                <input type="text" id="voucherfield" name="voucherfield">  
              </div>
            </div>
            

            <div class="row">
              <div class="col-50">
                <label for="expyear">Exp Year</label>
                <input type="text" id="expyear" name="expyear" placeholder="2018" minlength="4" maxlength="4" required>
              </div>
              <div class="col-50">
                <label for="cvv">CVV</label>
                <input type="text" id="cvv" name="cvv" placeholder="352" minlength="3" maxlength="3" required>
              </div>
            </div>
          </div>

        </div>
        <input type="submit" name="paypop" value="Continue to checkout" class="btn">
      </form>

      <?php
                $userId = $user['id'];
                $quantity = 0;
                // $voucher = "";
                // $voucher = $_GET['voucherfield'];
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
                  
                }
                elseif ($total >= 3000 && $total < 5000) {
                  $discount = $total * 0.1;
                  $total = $total - $discount;
                }
                elseif ($total >= 5000 && $total < 10000) {
                  $discount = $total * 0.15;
                  $total = $total - $discount;
                }
                elseif ($total >= 10000) {
                  $discount = $total * 0.2;
                  $total = $total - $discount;
                }
                $vat = $total * 0.015;
                $totalPrice = $total + $vat;



  ?>
  <div class="col-25">
    <div class="container">
      <h4>Quantity
        <span class="price" style="color:black">
          <i class="fa fa-shopping-cart"></i>
          <b id="body"><?php echo $quantity ?></b>
        </span>
      </h4>

      <h4>Price
        <span class="price" style="color:black">
          <i class="fa fa-money"></i>
          <b id="body"><?php echo $ptotal ?></b>
        </span>
      </h4>
      
      <h4>Discount
        <span class="price" style="color:black">
          <i class="fa fa-money"></i>
          <b id="body"><?php echo $discount ?></b>
        </span>
      </h4>

      <h4>VAT(+1.5%)
        <span class="price" style="color:black">
          <i class="fa fa-money"></i>
          <b id="body"><?php echo $vat ?></b>
        </span>
      </h4>
      <hr>
      <h4>Toatl Price
        <span class="price" style="color:black">
          <i class="fa fa-money"></i>
          <b id="body"><?php echo $totalPrice ?></b>
        </span>
      </h4>

      <hr>
    
    </div>
  </div>

              
          </div>
        </section>
       
      </div>
    </div>
    <?php $pdo->close(); ?>
    <?php include 'includes/footer.php'; ?>
</div>

<?php include 'includes/scripts.php'; ?>

</body>
</html>
