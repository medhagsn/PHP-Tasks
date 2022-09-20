<?php include "database.php"; include "create_table.php"; ?>
<?php session_start(); ?>

<?php
    echo "User: " . $_SESSION['Name'];
    echo "<br>" . "Status: ". $_SESSION['Status'];
    echo "<br>" . "No of active users:" . $_SESSION['active_status'];
    echo "<br>" . "No of inactive users:" . $_SESSION['inactive_status'];
    echo "<br>" . "No of users: " . $_SESSION['total_users'];

?>