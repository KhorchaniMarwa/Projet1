<?php
session_start();
include('../inc/connections.php');
if(isset($_SESSION['id']) && isset($_SESSION['username'])){
    $id = $_SESSION['id'] ;
    $user = $_SESSION['username'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="telephone.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <script>   function searchButtonClicked() {
  var searchValue = document.getElementById("in").value;
  var list1 = ["beaute", "beaute", "parfum","gel","gel nettoyant","gel moussant","topface","skin editor","skin"]; // Replace with your own list
  var list2 = ["sport","bicyclette","barre fixe","tenue","entrainement","trotinette","maillot"] ;
  var list3 = ["telephone téléphone","watch","montre","montre","casque","ecouteurs","écouteurs"];
  var list4 = ["mode","vetements","vêtements","boots","sac","sweat","tshirt","t-shirt","basket","shoes","jeans"];
  var list5 = ["maison","cuilleres","salon","etagere à chaussures","batterie","cook","vaisselle","machine a laver","robot"];
  var list6 = ["santé","sante","nutrition","massage","coffre","tensiommetre"];
  if (list1.includes(searchValue.toLowerCase())) {
    window.location.href = "beauté2.php";
  } else if(list2.includes(searchValue.toLowerCase())) {
    window.location.href = "sport2.php";
  }
  else if(list3.includes(searchValue.toLowerCase())) {
    window.location.href = "téléphone2.php";
  }
  else if(list4.includes(searchValue.toLowerCase())) {
    window.location.href = "mode2.php";
  }
  else if(list5.includes(searchValue.toLowerCase())) {
    window.location.href = "maison2.php";
  }
  else if(list6.includes(searchValue.toLowerCase())) {
    window.location.href = "santé2.php";
  }
  else if(searchValue=null) {
    window.location.href = "téléphone2.php";
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
        <div class="main-content">
            <aside class="sidebar">
              <ul>
                <br><br><li><a href="beauté.php">beauté</a></li><br><br>
                <li><a href="sport.php">sport</a></li><br><br>
                <li><a href="téléphone.php">telephones et tablettes</a></li><br><br>
                <li><a href="mode.php">mode</a></li><br><br>
                <li><a href="maison.php">maison et decore</a></li><br><br>
                <li><a href="santé.php">santé</a></li><br><br>
            </ul>
            </aside>
            
            <section class="products">
              <!-- Product divs -->
              <div class="product">
                <img src="../produits/prd1.jpg" alt="Product 1">
                <h3>Tecno</h3>
                <p>4Gb Ram -64Go+CARTE Mémoire 65gb-Violet</p>
                <span>330.000 TND</span> <br><br><center><button class="ajouter"> ajouter au panier</button> </center>
              </div>
              
              <div class="product">
                <img src="../produits/prd2.jpg" alt="Product 2">
                <h3>Infinix Note 30</h3>
                <p>8Gb RAM + 256Gb - Gold </p>
                <span>669.00 TND</span><br><br> <center><button class="ajouter"> ajouter au panier</button> </center>
              </div>
              <div class="product">
                <img src="../produits/prd3.jpg" alt="Product 2">
                <h3>Infinix Hot 30i</h3>
                <p>8Gb Ram + 128GO Rom</p>
                <span>455.00 TND</span> <br><br><center><button class="ajouter"> ajouter au panier</button> </center>
              </div>
              <div class="product">
                <img src="../produits/prd4.jpg" alt="Product 2">
                <h3>Generic Smart Watch</h3>
                <p>T800 Ultra Smart </p>
                <span>39.90 TND</span><br><br> <center><button class="ajouter"> ajouter au panier</button> </center>
              </div>
              <div class="product">
                <img src="../produits/prd5.jpg" alt="Product 2">
                <h3>Haino Teko Smart Watch Femme</h3>
                <p>G8 mini - 2024 - Avec 2 braclets ROSE GOLD EDITION</p>
                <span>60.00 TND</span> <br><br><center><button class="ajouter"> ajouter au panier</button> </center>
              </div>
              
              <div class="product">
                <img src="../produits/prd6.jpg" alt="Product 2">
                <h3>HW7 Max Montre Intelligente </h3>
                <p>1.99 pouces Moniteur de Glycémie - Noir </p>
                <span>89.00 TND</span><br><br> <center><button class="ajouter"> ajouter au panier</button> </center>
              </div>
              <div class="product">
                <img src="../produits/prd7.jpg" alt="Product 2">
                <h3>Anker A3033H11</h3>
                <p>Soundcore Life 2 Bt Headphone - Black.</p>
                <span>329.00 TND</span><br><br>
                <center><button class="ajouter"> ajouter au panier</button> </center>
              </div>
              <div class="product">
                <img src="../produits/prd8.jpg" alt="Product 2">
                <h3>Récepteur Adaptateur</h3>
                <p>Audio Bluetooth - USB - AUX - Car Jack</p>
                <span>13.80 TND</span><br><br> <center><button class="ajouter"> ajouter au panier</button> </center>
              </div>
              <div class="product">
                <img src="../produits/prd9.jpg" alt="Product 2">
                <h3>Generic Casque </h3>
                <p>Bluetooth - MP3 - P47 – Blanc</p>
                <span>16.10 TND</span><br><br> <center><button class="ajouter"> ajouter au panier</button> </center>
              </div>
        
              
            </section>
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