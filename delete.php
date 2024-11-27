<?php 
    include "connect.php";
    $id = $_GET['this_ID'];
    $query = "DELETE FROM Product WHERE ID = '$id'";
    mysqLi_query($conn, $query);
    header("location: index.php");
?>