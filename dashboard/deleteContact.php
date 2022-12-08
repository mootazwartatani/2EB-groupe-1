<?php
include("config.php");
$id = $_GET['cin'];
$req="DELETE FROM contact WHERE cin=$id";
$result = mysqli_query($con, $req);
header("Location:contact.php");
?>