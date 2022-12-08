<!DOCTYPE html>
<html>

<head>
    <title>Modifier produit</title>
    
    <link href="../css/styleDashboard.css" rel="stylesheet" />
</head>

<body>


    <?php
    include("config.php");
    if (isset($_POST['update'])) {
        $id = $_POST['id'];
        $NomProduit = $_REQUEST['nomproduit'];
        $Description = $_REQUEST['description'];
        $Prix = $_REQUEST['prix'];
        $req = "UPDATE produit SET nomproduit='$NomProduit',description='$Description',prix='$Prix' WHERE id=$id";
        $result = mysqli_query($con, $req);
        header("Location: index.php");
    }
    ?>

    <?php
    $id1 = $_GET['id'];
    $req = "SELECT * FROM produit WHERE id=$id1";
    $result = mysqli_query($con, $req);
    while ($produit = mysqli_fetch_array($result)) {
        $id = $produit['id'];
        $NomProduit = $produit['nomproduit'];
        $Description = $produit['description'];
        $Prix = $produit['prix'];
    }
    ?>

<div class="navvv">
            <nav class="bg-mynav" id="navv">
                <h2 class="logo">تايستي</h2>
                <ul class="dashboard-ul">
                    <li><a href="index.php">Produit</a></li>
                    <li><a href="contact.php">Contact</a></li>
                </ul>
            </nav>
        </div>
    <!--Produt form-->
    <div class="contact-container">
        <form name="produit" method="POST" action="edit.php">
            <label for="fname">Nom de produit</label>
            <input type="text" id="nomproduit" name="nomproduit" value=<?php echo $NomProduit;?>>
            <label for="subject">Description</label>
            <input type="text" id="description" name="description" style="height:100px" value=<?php echo $Description;?>>
            <label for="lname">Prix</label>
            <input type="text" id="prix" name="prix" value=<?php echo $Prix;?>>
            <input type="hidden" id="prix" name="id" value=<?php echo $id;?>>
            <input type="submit" name="update" value="valide">
        </form>
    </div>
</body>

</html>