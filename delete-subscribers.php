<?php
    include 'view/header.php';
    include 'connection.php';

    $get_name = $_REQUEST['zip'];
    echo $get_name;

    //Query to delete Data //
    $query = " DELETE FROM registeredCustomer WHERE zipCode = '$get_name' ";
    $result = mysqli_query($connection,$query);
    printf($result); 

    header("location:all-subscribers.php");
    include 'view/footer.php';
?>