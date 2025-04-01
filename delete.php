<?php
include 'connet.php';

if (isset($_GET['deleteid'])) {
    $id = $_GET['deleteid'];
    $sql = "DELETE FROM production WHERE id = '$id'";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        header("Location: production.php");
    } else {
        echo "Data not deleted";
    }
}

?>