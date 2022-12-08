<!DOCTYPE html>
<html>

<head>
    <link href="../css/style.css" rel="stylesheet" />
    <script src="../js/control.js"></script>

</head>

<body>
    <div class="whole-page">
        <div class="navv">
            <nav class="navbar" id="nav">
                <h2 class="logo">تايستي</h2>
                <ul>
                    <li><a href="index.php">ACCUEIL</a></li>
                    <li><a href="produit.php">PRODUIT</a></li>
                    <li><a href="contact.php">CONTACT </a></li>
                </ul>
            </nav>
        </div>

        <!--Slider-->
        <div class="slider" id="up">
            <div class="slider-content">
                <img src="../img/produit.jpg" />
            </div>
        </div>


        <?php
            include "configuration.php";
            $sql = "SELECT * FROM produit";

            if ($result = mysqli_query($con, $sql)) {
                if (mysqli_num_rows($result) > 0) {
                    echo '<div class="product">';
                    while ($row = mysqli_fetch_array($result)) {
                        echo '<div class="card">';
                        echo '<img src="../img/cake2.jpg"
                    alt="gateau" style="width:100%">';
                        echo '<h3>' . $row['nomproduit'] . '</h3>';
                        echo '<p class="price">' . $row['prix'] . '</p>';
                        echo '<a href="detail.php?id=' . $row['id'] . '"><p><button>VOIR LE PRODUIT</button></p> </a>';
                        echo '</div>';
                    }
                    echo '</div>';
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


        <!--FOOTER-->
        <footer>
            <h3>Construit et conçu par mootaz wartatani. Tous droits réservés. ©</h3>
        </footer>
    </div>


</body>


</html>