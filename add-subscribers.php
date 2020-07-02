<?php
    include 'connection.php';
/***** Getting values using post Method *******/

    $subscriber_Name = $_POST['user-name'];
    $subscriber_Age = $_POST['user-age'];
    $subscriber_Email = $_POST['user-email'];
    $subscriber_Password = $_POST['user-password'];
    $subscriber_Confirm = $_POST['user-confirm-password'];
    $subscriber_City = $_POST['user-city'];
    $subscriber_Zipcode = $_POST['zip'];
    $subscriber_Province = $_POST['select'];
    
    //echo ($subscriber_Name . $subscriber_Age . $subscriber_Email . $subscriber_Password . $subscriber_Confirm . $subscriber_City . $subscriber_Province . $subscriber_Zipcode);

    /************ Query of inserting values in database *******/

    $insert = "INSERT INTO registeredCustomer(userName,age,email,paswd,cPaswd,city,province,zipCode) values ('$subscriber_Name','$subscriber_Age',
                '$subscriber_Email','$subscriber_Password','$subscriber_Confirm','$subscriber_City','$subscriber_Province','$subscriber_Zipcode')";


    /***** Checking either query has been executed or not *****/

    if(mysqli_query($connection,$insert))
    {
        //echo "Data is inserted successfully";
    }
    else
    {
        echo "An Error Occured";
    }
    header("location:success.php")

?>