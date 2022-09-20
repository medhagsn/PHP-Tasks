<?php include "database.php"; include "create_table.php"; ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
<title>Login</title>
</head>
<body>
        <form action="index.php" method="POST">
            <div class="input-group">
                <h2>LOGIN</h2>
                <input type="text" name="name" class="form-control" placeholder="Enter name"> <br> 
            </div>
            <div class="input-group">
                <input type="password" name="password" class="form-control" placeholder="Enter password">
            </div> <br>
            <input class="btn btn-primary" type="submit" name="submit" value="Submit">
            <input class="btn btn-primary" type="reset" name="reset" value="Reset">
            <br><a href="register.php">New user? click here</a>
        </form>
    </div>
</div>
</body>
</html>



