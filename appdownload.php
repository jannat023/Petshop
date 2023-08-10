<?php
	if(isset($_GET['button'])){
		$id = $_GET['button'];
		// header('Location: status.php');
	}
?>
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
            
              <form action="status.php" method="GET">
                <div class="box-body" style="font-size: 20px; padding-left: 30%; padding-top: 5%; font-family: cursive;">
                	<div id="makepdf" >
                		<label style="font-size: 50px; font-family: monospace; color: grey;">Appointment Slip</label> <br><br>
                		<?php
                		
			                $conn = mysqli_connect('localhost', 'root', '', 'ecomm');
			                $sql = "SELECT * FROM appointment WHERE id = '$id'";
			                $result = mysqli_query($conn, $sql);

			                while ($row = mysqli_fetch_assoc($result)) {
			                    $firstname = $row['firstname'];
			                    $lastname = $row['lastname'];
			                    $email = $row['email'];
			                    $gname = $row['gname'];
			                    $appdate = $row['appdate'];
			                    $status = $row['status'];
			                    $contact = $row['contact'];

			                    if ($status == 0) {
			                      $status = "Pending";
			                    }
			                    elseif ($status == 1) {
			                      $status = "Approved";
			                    }
			                    else{
			                      $status = "Canceled";
			                    }
			                }
                		?>
                		<table style="border: transparent;">
							<tr>
								<th>Name</th>
								<td style="padding-left: 100px"><?php echo $firstname." ".$lastname; ?></td>
							</tr>
							<tr>
								<th>Email</th>
								<td style="padding-left: 100px"><?php echo $email; ?></td>
							</tr>
							<tr>
								<th>Contact </th>
								<td style="padding-left: 100px"><?php echo $contact; ?></td>
							</tr>
							<tr>
								<th>Appointment Date</th>
								<td style="padding-left: 100px"><?php echo $appdate; ?></td>
							</tr>
							<tr>
								<th>Groomers Name</th>
								<td style="padding-left: 100px"><?php echo $gname; ?></td>
							</tr>
							<tr>
								<th>Status</th>
								<td style="padding-left: 100px"><?php echo $status; ?></td>
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
