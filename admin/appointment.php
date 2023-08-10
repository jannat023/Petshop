<?php include 'includes/session.php'; ?>
<?php include 'includes/header.php'; ?>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <?php include 'includes/navbar.php'; ?>
  <?php include 'includes/menubar.php'; ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Appointment
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Appointment</li>
      </ol>
    </section>

    <!-- Main content -->
    		<form action="action.php" method="GET">
                <div class="box-body">

                <?php
             
                  $conn = mysqli_connect('localhost', 'root', '', 'ecomm');
                  $sql = "SELECT * FROM appointment";
                  $result = mysqli_query($conn, $sql);

                  echo "<table class='table table-bordered' style='font-family:cursive; font-size: 15px'>
                        <thead>
                          <tr>
                            <th>Appointment Date</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Groomers Name</th>
                            <th>Status</th>
                            <th>Action</th>
                            <th>Booking Date</th>
                          </tr>
                        </thead>
                        <tbody>";

                  while ($row = mysqli_fetch_assoc($result)) {
                    $id = $row['id'];
                    $firstname = $row['firstname'];
                    $lastname = $row['lastname'];
                    $email = $row['email'];
                    $gname = $row['gname'];
                    $appdate = $row['appdate'];
                    $status = $row['status'];
                    $currdate = $row['currdate'];

                    if ($status == 0) {
                      $status = "Pending";
                    }
                    elseif ($status == 1) {
                      $status = "Approved";
                    }
                    else{
                      $status = "Cancel";
                    }
                    echo "<tr>
                            <td>".$appdate."</td>
                            <td>".$firstname." ".$lastname."</td>
                            <td>".$email."</td>
                            <td>".$gname."</td>
                            <td><span class='btn btn btn-info'>".$status."</span></td>
                            <td><button type='submit' class='btn btn-success fa fa-check' name='approve' id='approve' value='$id'></button>
                            	<button type='submit' class='btn btn-danger fa fa-close' name='Cancel' id='Cancel' value='$id'></button></td>
                            <td>".$currdate."</td>
                          </tr>";
                    
                  }
                  echo "</tbody>
                        </table>";
                ?>
                </div>
              </form>
     
  </div>
  	<?php include 'includes/footer.php'; ?>
    <?php include 'includes/groomers_modal.php'; ?>

</div>
<!-- ./wrapper -->

<?php include 'includes/scripts.php'; ?>

</body>
</html>
