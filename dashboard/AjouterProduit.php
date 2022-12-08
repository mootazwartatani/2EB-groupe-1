<?php
include('config.php');
$NomProduit = "";
$Description = '';
$Prix = 0;
$result = false;
if (isset($_POST['add'])) {
    $NomProduit = $_REQUEST['nomproduit'];
    $Description = $_REQUEST['description'];
    $Prix = $_REQUEST['prix'];
    $req = "INSERT INTO produit(nomproduit, description ,prix) VALUES ('$NomProduit','$Description','$Prix')";
    $result = mysqli_query($con, $req);
}
if ($result === true) {
    header('location:index.php');
} 
else {
    echo " Erreur d'ajout";
}

mysqli_close($con);

?>