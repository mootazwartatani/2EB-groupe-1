<!DOCTYPE html>
<html>

<head>
  <title>تايستي</title>
  <link href="../css/style.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
  <script src="../js/control.js"></script>
</head>


<body>
  <div class="whole-page">
    <!--Navbar-->
    <div class="navv">
      <nav class="navbar" id="nav">
        <h2 class="logo">تايستي</h2>
        <ul>
          <li><a href="index.php">ACCUEIL</a></li>
          <li><a href="produit.php">PRODUIT</a></li>
          <li><a href="contact.php">CONTACT</a></li>
        </ul>
      </nav>
    </div>
    <!--Slider-->
    <div class="slider" id="up">
      <div class="slider-content">
        <img src="../img/contact.jpg" />
      </div>
    </div>

    <!--contact form-->
    <div class="contact-container">
      <form name="contact"  method="POST" onsubmit="verif()" action="contactForm.php" >



        <label for="fname">Cin</label>
        <input type="text" id="lcin" name="T1" placeholder="taper votre CIN.........">

        <label for="fname">Nom</label>
        <input type="text" id="lnom" name="T2"  placeholder="taper votre Nom.........">
          <p id="nom"></p>
        <label for="lname">Prenom</label>
        <input type="text" id="lpren" name="T3" placeholder="taper votre Prenom........">

        <label for="lname">Telephone</label>
        <input type="text" id="ltel" name="T4" placeholder="taper votre numero telephone......">


        </label> sexe</label><br><br>
        <input type="radio" name="sexe" value="Homme">Homme<br><br>
        <input type="radio" name="sexe" value="Femme">Femme<br><br>
        <input type="radio" name="sexe" value="Autre">Autre<br><br>

        <label for="country">Gouvernement </label>
        <select id="country" name="D1">
          <option value="Tunisia">Tunisia</option>
          <option value="Nabeul">Nabeul</option>
          <option value="bizerte">bizerte</option>
          <option value="sousse">sousse</option>
        </select>
        <label for="subject">SUJET</label>
        <textarea id="subject" name="T5" placeholder="Ecrire.." style="height:100px"></textarea>
        <input type="submit" name="submit"  value="valide">
      </form>
    </div>


    <!--FOOTER-->
    <footer>
      <h3>Construit et conçu par mootaz wartatani. Tous droits réservés. ©</h3>
    </footer>
  </div>

</body>


</html>