<?php
session_start();
include('../inc/connections.php');
if(isset($_SESSION['id']) && isset($_SESSION['username'])){
    $id = $_SESSION['id'] ;
    $user = $_SESSION['username'];

?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <title>panier</title>
        <link rel="stylesheet" href="panier.css">
        


        <script>   function searchButtonClicked() {
  var searchValue = document.getElementById("in").value;
  var list1 = ["beaute", "beaute", "parfum","gel","gel nettoyant","gel moussant","topface","skin editor","skin"]; // Replace with your own list
  var list2 = ["sport","bicyclette","barre fixe","tenue","entrainement","trotinette","maillot"] ;
  var list3 = ["telephone téléphone","watch","montre","montre","casque","ecouteurs","écouteurs"];
  var list4 = ["mode","vetements","vêtements","boots","sac","sweat","tshirt","t-shirt","basket","shoes","jeans"];
  var list5 = ["maison","cuilleres","salon","etagere à chaussures","batterie","cook","vaisselle","machine a laver","robot"];
  var list6 = ["santé","sante","nutrition","massage","coffre","tensiommetre"];
  if (list1.includes(searchValue.toLowerCase())) {
    window.location.href = "../pagesProduits/beauté2.php";
  } else if(list2.includes(searchValue.toLowerCase())) {
    window.location.href = "../pagesProduits/sport.php";
  }
  else if(list3.includes(searchValue.toLowerCase())) {
    window.location.href = "../pagesProduits/téléphone2.php";
  }
  else if(list4.includes(searchValue.toLowerCase())) {
    window.location.href = "../pagesProduits/mode2.php";
  }
  else if(list5.includes(searchValue.toLowerCase())) {
    window.location.href = "../pagesProduits/maison2.php";
  }
  else if(list6.includes(searchValue.toLowerCase())) {
    window.location.href = "../pagesProduits/santé2.php";
  }
  else if(searchValue=null) {
    window.location.href = "panier2.php";
  }
  else{
    window.location.href = "../inexistance.php";
  }

}
</script>
    </head>
    <body>
        <nav class="navbar">
            <ul>
                <li><a href="../home et welcome/home.php">COMPRASS</a></li>
            </ul>
            <ul>
                <li><input type="search" id="in" placeholder="chercher un produit,une marque ou une catégorie" ><button onclick="searchButtonClicked()" style="background-color: blueviolet;" id="but">RECHERCHER</button></li>
            </ul>    
            <ul>
                <li><a href="../home et welcome/home.php">Hello, <?php echo $user ?> </a></li>
            </ul>
            <ul>
                <li><a href="../aide/aide2.php">Aide</a></li>
            </ul>
            <ul>
                <li><a href="../panier/panier2.php">Panier</a></li>
            </ul>
            <ul>
                <li><a href="../loginRegisterLogout/logout.php">log out</a></li>
            </ul>
        </nav> 
        <main>
            <div class="container">
        <center><img src="../produits/logo.jpg" width="150">
       <br><h2> Votre panier est vide!</h2>
       <br><h4> Parcourez nos catégories et découvrez nos meilleures offres</h4>
       <br><br> <a href="" target="_blank">
            <button><a href="../home et welcome/home.php">commencez vos achats</a></button>
       
       </center>
    </div>
        </main>
        <footer>

     <div class="footer-dark">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-md-3 item">
                        <h3>Services</h3>
                        <ul>
                            <li><a href="#">Vente En Ligne</a></li>
                            
                        </ul>
                    </div>
                    <div class="col-sm-6 col-md-3 item">
                        <h3>About</h3>
                        <ul>
                            <li><a href="#">Company</a></li>
                            <li><a href="#">Team</a></li>
                            <li><a href="#">Careers</a></li>
                        </ul>
                    </div>
                    <div class="col-md-6 item text">
                        <h3>COMPRASS</h3>
                        <p>Comprass est un site de vente en lignes qui met à votre dispostion des divers produits avec des prix raisonnables </p>
                    </div>
                    <div class="col item social"><a href="#"><i class="icon ion-social-facebook"></i></a><a href="#"><i class="icon ion-social-twitter"></i></a><a href="#"><i class="icon ion-social-snapchat"></i></a><a href="#"><i class="icon ion-social-instagram"></i></a></div>
                </div>
                <p class="copyright">COMPRASS © 2024</p>
              </div>
        </footer>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>

</footer>

    </body>
</html>

<?php
}
else{
    header('location:../loginRegisterLogout/index.php');
    exit();
}
?>
