<?php 
    include('connection.php');

    /***************** Query for creating a table in connected database ************/

    $table = "CREATE TABLE registeredCustomer(
        userName VARCHAR(20) NOT NULL,
        age  INT,
        email VARCHAR(40),
        paswd VARCHAR(20),
        cPaswd VARCHAR(20),
        city VARCHAR(20),
        province VARCHAR(20),
        zipCode INT   
    )";

    /***********************Query execution **************/

    $query = mysqli_query($connection,$table);
    if($query)
    {
        echo "TABLE CREATED SUCCESSFULLY!!!!";
    }
    else
    {
        echo "AN ERROR OCCURED !!!";
    }
?>