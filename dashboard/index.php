<!doctype html>
<html lang="en">

<head>


    <!-- Bootstrap CSS -->
   
    <title>Tasty dashboard</title>
    <link href="../css/styleDashboard.css" rel="stylesheet" />
</head>


<body>

        <!--Navbar-->
        <div class="navvv">
            <nav class="bg-mynav" id="navv">
                <h2 class="logo">تايستي</h2>
                <ul class="dashboard-ul">
                    <li><a href="index.php">Produit</a></li>
                    <li><a href="contact.php">Contact</a></li>
                </ul>
            </nav>
        </div>


        <div>
            <div>
                <h2>Produits
            </div>
            <div>
                <a href="ajouter_produit.php" class="button-add">Ajouter un produit</a>
            </div>
        </div>
        <div class="table-responsive">

            <?php
            include "config.php";
            $req = "SELECT * FROM produit";

            if ($result = mysqli_query($con, $req)) {
                if (mysqli_num_rows($result) > 0) {
                    echo '<table class="table" style="width:85%" border="1">';
                    echo '<thead>';
                    echo '<tr>';
                    echo '<th scope="col">id</th>';
                    echo '<th scope="col">Nom de produit</th>';
                    echo '<th scope="col">Descritpion</th>';
                    echo '<th scope="col">Prix</th>';
                    echo '<th scope="col">Action</th>';
                    echo '</tr>';
                    echo '</thead>';
                    echo '<tbody id="mytable">';
                    while ($row = mysqli_fetch_array($result)) {
                        echo '<tr>';
                        echo '<td>' . $row['id'] . '</td>';
                        echo '<td>' . $row['nomproduit'] . '</td>';
                        echo '<td>' . $row['description'] . '</td>';
                        echo '<td>' . $row['prix'] . '</td>';
                        echo '<td><a href="edit.php?id=' . $row['id'] . '"  class="button-update">Modifier</a>';
                        echo ' <a href="delete.php?id=' . $row['id'] . '"  class="button-delete">Supprimer</a>';
                        echo '</td>';
                        echo '</tr>';
                    }
                    echo '</tbody>';
                    echo '</table>';
                    mysqli_free_result($result);
                } else {
                    echo '<div><em>Pas d\'enregistrement</em></div>';
                }
            } else {
                echo "Oops! Une erreur est survenue";
            }
            mysqli_close($con);
            ?>
        </div>
</body>

</html>