<?php
@include("./connection.php");
if (isset($_GET['id'])) {
    $id = intval($_GET['id']);
    
    $sql = "DELETE FROM users WHERE id=$id";

    if (mysqli_query($conn, $sql)) {
        echo "DELETED SUCCESSFULLY.........";
    } else {
        "ERROR.............";
    }
}
mysqli_close($conn);