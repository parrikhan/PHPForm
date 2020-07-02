<?php

include 'view/header.php';
include 'connection.php';

    $view = "SELECT * FROM registeredCustomer";
    $get_result = mysqli_query($connection,$view);?>
<div class="container">
    <table class="table table-hover table-dark">
                <thead>
                        <tr>
                        <th scope="col">UserName</th>
                        <th scope="col">Age</th>
                        <th scope="col">Email</th>
                        <th scope="col">Password</th>
                        <th scope="col">Confirm Password</th>
                        <th scope="col">City</th>
                        <th scope="col">Province</th>
                        <th scope="col">ZipCode</th>
                        <th scope="col">Action</th>
                        </tr>
                </thead>
                <tbody>
    <?php
    if(mysqli_num_rows($get_result)>0)
    {
        while($row = mysqli_fetch_assoc($get_result))
        {?>
            
            <tr>
                <td><?php echo $row['userName']?></td>
                <td><?php echo $row['age']?></td>
                <td><?php echo $row['email']?></td>
                <td><?php echo $row['paswd']?></td>
                <td><?php echo $row['cPaswd']?></td>
                <td><?php echo $row['city']?></td>
                <td><?php echo $row['province']?></td>
                <td><?php echo $row['zipCode']?></td>
                <td><a href="edit-subscribers.php?user-name=<?php echo $row['userName']?>"><button id="edit-user" class = "btn btn-primary" name="edit">Edit</button>
                    <a href="delete-subscribers.php?zip=<?php echo $row['zipCode']?>"><button id="delete-user" class="btn btn-danger" name="delete">Delete</button>
                </td>
            </tr>
                
        <?php
        }
        ?>
        </tbody>
            </table>
</div>            
    <?php
    }

include 'view/footer.php';
?>