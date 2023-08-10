<?php
    include "../CRUD/connection.php";
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $sql = " DELETE from `inventory` where id=$id";

        $conn->query($sql);
    }
    header('location:/SFP/CRUD/inventory.php');
?>