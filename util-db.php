<?php
function get_db_connection(){
    // Create connection
    $conn = new mysqli('159.89.47.44', 'paytonra_hw3user', 'p@y10iscool', 'paytonra_homework3');

    
    // Check connection
    if ($conn->connect_error) {
      return false;
    }
    return $conn;
}
?>
