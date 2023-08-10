<?php
    include 'includes/session.php';


    $userId = $user['id'];
    $productId = $_GET['productId'];

    $conn = mysqli_connect('localhost', 'root', '', 'ecomm');
    $sql = "DELETE FROM cart WHERE user_id = '$userId' AND product_id = '$productId'";
    $result = mysqli_query($conn, $sql);
    mysqli_close($conn);

    printf($result);

    header('location: index.php');

    echo $userId;
    echo $productId;
?>