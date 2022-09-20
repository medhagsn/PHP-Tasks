<!-- # Create sample dashboard logged in user can see
    # No of active users 
    # No of inactive users
    # Total no of users. -->
<!-- # Dashboard should visible only when user get logged in (Session management) -->

<?php include "database.php"; include "create_table.php"; ?>
<?php session_start(); ?>
<?php

if (isset($_POST['submit'])){
    $name  = $_POST['name'];
    $password  = $_POST['password'];

    $name = mysqli_real_escape_string($connection, $name);
    $password = mysqli_real_escape_string($connection, $password);

    // USER DATA
    $query = "SELECT * FROM users WHERE name = '{$name}' ";
    $select_user_query = mysqli_query($connection, $query);
    if (!$select_user_query){
        die("QUERY FAILED".mysqli_error(($connection)));
    }

    //Fetching result from database.
    while ($row = mysqli_fetch_array($select_user_query)){
         $db_id = $row['ID'];
         $db_name = $row['Name'];
         $db_password = $row['Password'];
         $db_status= $row['Status'];
    }

    // No OF ACTIVE USERS
    $active_status = "SELECT * FROM users WHERE Status = 'active'";
    $select_user_active_status = mysqli_query($connection, $active_status);
    if (!$select_user_active_status){
        die("QUERY FAILED".mysqli_error(($connection)));
    } 

    // No OF INACTIVE USERS
    $inactive_status = "SELECT * FROM users WHERE Status = 'inactive'";
    $select_user_inactive_status = mysqli_query($connection, $inactive_status);
    if (!$select_user_inactive_status){
        die("QUERY FAILED".mysqli_error(($connection)));
    } 

    // TOTAL NO OF USERS
    $total_users = "SELECT * FROM users";
    $total_users_status = mysqli_query($connection, $total_users);
    if (!$total_users_status){
        die("QUERY FAILED".mysqli_error(($connection)));
    } 
    
    //Number of rows returned for active, inactive and total numberof users
    $db_active_status =  mysqli_num_rows($select_user_active_status);
    $db_inactive_status =  mysqli_num_rows($select_user_inactive_status);
    $db_total_users =  mysqli_num_rows($total_users_status);

    //User login check
    if ($name !== $db_name && $password !== $db_password){
        header("Location: /demo/mysql/task_2/login.php");
    } else if ($name == $db_name && $password == $db_password) {
        $_SESSION['Name'] = $db_name; 
        $_SESSION['Status'] = $db_status;
        $_SESSION['active_status'] = $db_active_status;
        $_SESSION['inactive_status'] = $db_inactive_status;
        $_SESSION['total_users'] = $db_total_users;
        header("Location: /demo/mysql/task_2/dashboard.php");
    } else {
        header("Location: /demo/mysql/task_2/login.php");
    }
}
?>

