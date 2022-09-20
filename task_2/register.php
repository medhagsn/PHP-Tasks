<!-- # Create user registration form with below fields:
    # Userid should unique.
    # Name
    # Password
    # Email
    # Mobile No
    # Status -->
<?php  include "create_table.php";

    if(isset($_POST['submit'])){
        $id = $_POST['id'];
        $name = $_POST['name'];
        $password = $_POST['password'];
        $email = $_POST['email'];
        $mobile_no = $_POST['mobile_no'];
        $status = $_POST['status'];
    
        $query = "INSERT INTO users (id,name,password,email,mobile_no,status) VALUES ('$id','$name','$password','$email','$mobile_no','$status')";
        $result = mysqli_query($connection,$query);
            if(!$result){
                die("Query failed.");
            } else {
                echo "<br> Registered.";
            }         
        }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Registration Form</title>
    <!-- <link rel= "stylesheet" href="style.css"> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</head>
<body>
<div class="container">
        <div class="col-sm-3">
            <form  action="register.php" method="post" >
                <br>
                <h1>REGISTER</h1>
                <div class="form-group"><br>
                    <label for="id">User ID</label>
                    <input type="text" name="id" class="form-control">
                </div>
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" name="name" class="form-control">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="text" name="password" class="form-control">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" name="email" class="form-control">
                </div>
                <div class="form-group">
                    <label for="mobile_no">Mobile No.</label>
                    <input type="text" name="mobile_no" class="form-control">
                </div>
                <br>
                <div class="form-group">
                    <label for="status">Status</label>
                    <select name="status" id="status">
                        <option value="active">Active</option>
                        <option value="inactive">Inactive</option>
                    </select>
                </div>
                <br>
                <input class="btn btn-primary" type="submit" name="submit" value="Register">
                <a href="login.php">Registered user? Click here</a>
            </form>       
</body>
</html>
