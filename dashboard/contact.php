<!doctype html>
<html lang="en">

<head>

<link href="../css/styleDashboard.css" rel="stylesheet" />
    <title>Tasty dashboard</title>
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




        <div class="d-flex bd-highlight mb-3">
            <div class="me-auto p-2 bd-highlight">
                <h2>Contact
            </div>
        </div>

        <div class="table-responsive">

            <?php
            require_once "config.php";
            $sql = "SELECT * FROM contact";

            if ($result = mysqli_query($con, $sql)) {
                if (mysqli_num_rows($result) > 0) {
                    echo '<table class="table" border="1">';
                    echo '<thead>';
                    echo '<tr>';
                    echo '<th scope="col">Cin</th>';
                    echo '<th scope="col">Nom</th>';
                    echo '<th scope="col">Prenom</th>';
                    echo '<th scope="col">Telephone</th>';
                    echo '<th scope="col">Sexe</th>';
                    echo '<th scope="col">Pays</th>';
                    echo '<th scope="col">Sujet</th>';
                    echo '<th scope="col">Action</th>';
                    echo '</tr>';
                    echo '</thead>';
                    echo '<tbody id="mytable">';
                    while ($row = mysqli_fetch_array($result)) {
                        echo '<tr>';
                        echo '<td>' . $row['cin'] . '</td>';
                        echo '<td>' . $row['nom'] . '</td>';
                        echo '<td>' . $row['prenom'] . '</td>';
                        echo '<td>' . $row['tel'] . '</td>';
                        echo '<td>' . $row['sexe'] . '</td>';
                        echo '<td>' . $row['pays'] . '</td>';
                        echo '<td>' . $row['sujet'] . '</td>';
                        echo  '<td><a href="deleteContact.php?cin=' . $row['cin'] . '"  class="button-delete">Supprimer</a></td>';
                        echo '</tr>';
                    }
                    echo '</tbody>';
                    echo '</table>';
                    /* Free result set */
                    mysqli_free_result($result);
                } else {
                    echo '<div class="alert alert-danger"><em>Pas d\'enregistrement</em></div>';
                }
            } else {
                echo "Oops! Une erreur est survenue";
            }

            /* Fermer connection */
            mysqli_close($con);
            ?>
        </div>


</body>

</html>