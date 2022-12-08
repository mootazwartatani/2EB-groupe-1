<?php
include("config.php");
$id = $_GET['id'];
$req="DELETE FROM produit WHERE id=$id";
$result = mysqli_query($con, $req);
header("Location:index.php");
?>  