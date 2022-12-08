<?php
include('configuration.php');

$cin = 0;
$nom = '';
$prenom = '';
$telphone = 0;
$sujet = '';
$result = false;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $cin = $_REQUEST['T1'];
    $nom = $_REQUEST['T2'];
    $prenom = $_REQUEST['T3'];
    $telphone = $_REQUEST['T4'];
    $sexe = $_REQUEST['sexe'];
    $pays = $_REQUEST['D1'];
    $sujet = $_REQUEST['T5'];
    $req = "INSERT INTO contact (cin, nom, prenom, tel, sexe, pays, sujet) VALUES ('$cin','$nom','$prenom','$telphone','$sexe ', '$pays','$sujet')";
    $result = mysqli_query($con, $req);
}
if ($result === true) {
    echo "inscription reussi";
    header('location:contact.php');
} else {
    echo " erreur d inscription";
}

mysqli_close($con);

?>