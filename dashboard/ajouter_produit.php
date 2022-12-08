<!DOCTYPE html>
<html>

<head>
    <title>Ajouter produit</title>
    <link href="../css/styleDashboard.css" rel="stylesheet" />
</head>

<body>
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
        <form name="produit" method="POST" action="AjouterProduit.php">
            <label for="fname">Nom de produit</label>
            <input type="text" id="nomproduit" name="nomproduit" placeholder="Nom proudit.........">
            <label for="subject">Description</label>
            <textarea id="description" name="description" placeholder="Ecrire.." style="height:100px"></textarea>
            <label for="lname">Prix</label>
            <input type="text" id="prix" name="prix" placeholder="Prix........">
            <input type="submit" name="add" value="valide">
        </form>
    </div>
</body>

</html>