<?php
    $User = "root";
    $Password = "";
    $dbName = "subscribers";
    $server = "localhost";

    $connection = mysqli_connect($server,$User,$Password,$dbName);

    if($connection)
    {
        //echo " Connection has been established successfully !!! ";
    }
    else
    {
        echo " Error Occured ";
    }

?>