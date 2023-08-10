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
	        	
	        		<form action="appointmentCheck.php" method='POST'>
	        			<h2 align="center">APPOINTMENT</h2><hr>
	        			<div class="form-group" style="width: 1000px;">
			                <div class="row">
				              <div class="col-50">
				                <label for="firstname">First Name</label>
				                <input class="form-control" type="text" id="firstname" name="firstname" required>
				              </div>
				              <div class="col-50">
				                <label for="lastname">Last Name</label>
				                <input class="form-control" type="text" id="lastname" name="lastname" required>
				              </div>
				            </div>
				            <div class="row">
				              <div class="col-50">
				                <label for="email">Email</label>
				                <input class="form-control" type="email" id="email" name="email" required>
				              </div>
				              <div class="col-50">
				                <label for="contact">Contact</label>
				                <input class="form-control" type="text" id="contact" name="contact" required>
				              </div>
				            </div>
				            <div class="row">
				              <div class="col-50">
				                <label for="address">Address</label>
				                <input class="form-control" type="text" id="address" name="address" required>
				              </div>
				            </div>
				            <div class="row">
				            	<div class="col-50">
					            	<label for="date">Appointment Date</label>
					                <input class="form-control" type="date" id="date" name="date" required>
					            </div>
				              <div class="col-50">
				                <label for="gname">Groomers</label>
				                <?php
									$conn = mysqli_connect('localhost', 'root', '', 'ecomm');
									$sql = "SELECT * FROM groomers";
									$result = mysqli_query($conn, $sql);

									echo "<select style='width: 100%; height: 45px; border-style: none;' name='gname' id='gname'>";

									while ($row = mysqli_fetch_assoc($result)) {
										$firstname = $row['firstname'];
										$lastname = $row['lastname'];
										echo "<option>$firstname"." "."$lastname</option>";
										
									}
									echo "</select>";
								?>
				              </div>
				            </div>
				            <div class="row">
				              <div class="col-50">
				                <label for="services">What services are you interested in?</label>
				                <textarea class="form-control" name="services" id="services"> </textarea>
				              </div>
				            </div>
				            <hr>
				            <input class="form-control btn btn-success" type="submit" name="submit" value="submit">
			            </div>
	        			
						
					</form>
	        		
	        </div>
	      </section>
	     
	    </div>
	  </div>
  	<?php include 'includes/footer.php'; ?>
</div>

<?php include 'includes/scripts.php'; ?>

</body>
</html>
