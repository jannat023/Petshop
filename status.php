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
            
              <form action="appdownload.php" method="GET">
                <div class="box-body">

                <?php
                
                
                  $user = $user['id'];
                  $conn = mysqli_connect('localhost', 'root', '', 'ecomm');
                  $sql = "SELECT * FROM appointment WHERE uid = '$user'";
                  $result = mysqli_query($conn, $sql);

                  echo "<table class='table table-bordered' style='font-family:cursive; font-size: 15px'>
                        <thead>
                          <tr>
                            <th>Appointment Date</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Groomers Name</th>
                            <th>Status</th>
                            <th>Booked Date</th>
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
                            <td><button type='submit' id='button' class='btn btn btn-info' name='button' value='$id'>".$status."</button></td>
                            <td>".$currdate."</td>
                          </tr>";
                    
                  }
                  echo "</tbody>
                        </table>";
                
                ?>
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
