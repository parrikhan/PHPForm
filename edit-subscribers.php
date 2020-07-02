<?php
    include 'view/header.php';
    include 'connection.php';

    $getName = $_REQUEST['user-name'];
    
    $update = "SELECT * FROM registeredCustomer WHERE userName = '$getName' ";

    $Result = mysqli_query($connection,$update);
    $getRow = mysqli_fetch_assoc($Result);

    if(isset($_POST['edit']))
    {
        
        $subscriber_Name = $_POST['user-name'];
        $subscriber_Age = $_POST['user-age'];
        $subscriber_Email = $_POST['user-email'];
        $subscriber_Password = $_POST['user-password'];
        $subscriber_Confirm = $_POST['user-confirm-password'];
        $subscriber_City = $_POST['user-city'];
        $subscriber_Zipcode = $_POST['zip'];
        $subscriber_Province = $_POST['select'];

        $update = "INSERT INTO registeredCustomer(userName,age,email,paswd,cPaswd,city,province,zipCode) values ('$subscriber_Name','$subscriber_Age',
                '$subscriber_Email','$subscriber_Password','$subscriber_Confirm','$subscriber_City','$subscriber_Province','$subscriber_Zipcode')";
        
        mysqli_query($connection,$update);    
    }
?>
    <div class="container mt-4">
        <form method="post">
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="userName">Enter UserName :</label>
                    <input type="text" class="form-control" id="userName"  name="user-name" value="<?php echo $getRow['userName'] ?>">
                </div>
                <div class="form-group col-md-6">
                    <label for="age">Enter Age :</label>
                    <input type="number" class="form-control" name="user-age" id="age" value="<?php echo $getRow['age']?>">
                </div>
            </div>
            <div class="form-group">
                <label for="email">Enter Email</label>
                <input type="text" class="form-control" id="email" name="user-email" value="<?php echo $getRow['email']?>">
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="password">Enter Password</label>
                    <input type="text" class="form-control" id="password" name="user-password" value="<?php echo $getRow['paswd']?>">
                </div>
                <div class="form-group col-md-6">
                    <label for="confirm-password">Confirm Password</label>
                    <input type="text" class="form-control" id="confirm-password" name="user-confirm-password" value="<?php echo $getRow['cPaswd']?>">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputCity">City</label>
                    <input type="text" class="form-control" id="inputCity" name="user-city" value="<?php echo $getRow['city']?>">
                </div>
                <div class="form-group col-md-4">
                    <label for="inputProvince">Province</label>
                    <select id="inputProvince" name="select" class="form-control" value="<?php echo $getRow['province']?>">
                    <option selected>Choose...</option>
                    <option value="punjab">Punjab</option>
                    <option value="sindh">Sindh</option>
                    <option value="Khyber-Paktounkhwa">Khyber-Paktounkhwa</option>
                    </select>
                </div>
                <div class="form-group col-md-2">
                    <label for="inputZip">Zip</label>
                    <input type="text" class="form-control" name="zip" id="inputZip" value="<?php echo $getRow['zipCode'] ?>">
                </div>
            </div>
            <button type="submit" class="btn btn-primary" name="edit">Edit</button>
        </form>
    </div>
<?php
    include 'view/footer.php';
?>