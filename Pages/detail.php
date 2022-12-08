<!DOCTYPE html>
<html>

<head>
    <link href="../css/style.css" rel="stylesheet" />

</head>

<body>
    <?php
    include('configuration.php');
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
    <div class="whole-page">
        <!--Navbar-->
        <div class="navv content">
            <nav class="navbar" id="nav">
                <h2 class="logo">تايستي</h2>
                <ul>
                    <li><a href="index.php">ACCUEIL</a></li>
                    <li><a href="produit.php">PRODUIT</a></li>
                    <li><a href="contact.php">CONTACT</a></li>
                </ul>
            </nav>
        </div>

    </div>


    <!--splited screen-->
    <div class="tasty-content2">
        <div class="split-screen2">
            <!-- Left content -->
            <div class="split-screen__half2">
                <img src="../img/cake2.jpg" />
            </div>
            <!-- Right content -->

            <div class="split-screen__half2"><b><?php echo $NomProduit;?></b><br><br><?php echo $Description;?> <br> <br>
                <b>PRIX :<br><?php echo $Prix;?> </b>
            </div>
        </div>
    </div>

</body>

</html>