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
    window.location.href = "beauté.php";
  } else if(list2.includes(searchValue.toLowerCase())) {
    window.location.href = "sport.php";
  }
  else if(list3.includes(searchValue.toLowerCase())) {
    window.location.href = "téléphone.php";
  }
  else if(list4.includes(searchValue.toLowerCase())) {
    window.location.href = "mode.php";
  }
  else if(list5.includes(searchValue.toLowerCase())) {
    window.location.href = "maison.php";
  }
  else if(list6.includes(searchValue.toLowerCase())) {
    window.location.href = "santé.php";
  }
  else if(searchValue=null) {
    window.location.href = "sport.php";
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
                <li><a href="../home et welcome/welcome.php">COMPRASS</a></li>
            </ul>
            <ul>
                <li><input type="search" id="in" placeholder="chercher un produit,une marque ou une catégorie" ><button onclick="searchButtonClicked()" style="background-color: blueviolet;" id="but">RECHERCHER</button></li>
            </ul>    
            <ul>
                <li><a href="../loginRegisterLogout/index.php">Se connecter</a></li>
            </ul>
            <ul>
                <li><a href="../aide/aide.php">Aide</a></li>
            </ul>
            <ul>
                <li><a href="../panier/panier.php">Panier</a></li>
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
                <img src="../produits/pd1.jpg" alt="Product 1">
                <h3>Bicyclette Pour Enfants </h3>
                <p>12'' - Rouge - (2-4 Ans) - JIEXIKA</p>
                <span>189.00 TND</span> <br><br><center><button onclick="ajout()" class="ajouter"> ajouter au panier</button> </center>
              </div>
              
              <div class="product">
                <img src="../produits/pd2.jpg" alt="Product 2">
                <h3>Generic Câble </h3>
                <p>Antivol Vélo et Moto 1m - Avec Protection Contre l'Humidité - Noir</p>
                <span>14.99 TND</span><br><br> <center><button onclick="ajout()" class="ajouter"> ajouter au panier</button> </center>
              </div>
              <div class="product">
                <img src="../produits/pd3.jpg" alt="Product 2">
                <h3>Barre fixe murale </h3>
                <p>Poignet noir/jaune</p>
                <span>69.90 TND</span> <br><br><center><button onclick="ajout()" class="ajouter"> ajouter au panier</button> </center>
              </div>
              <div class="product">
                <img src="../produits/pd4.jpg" alt="Product 2">
                <h3>Hummel Tenue d'entrainement enfant </h3>
                <p>T96100 JR-2002- Noir&Gris</p>
                <span>59.90 TND</span><br><br> <center><button onclick="ajout()" class="ajouter"> ajouter au panier</button> </center>
              </div>
              <div class="product">
                <img src="../produits/pd5.jpg" alt="Product 2">
                <h3>Hummel Tenue Promo Jaune</h3>
                <p>t96100-7000 Gris</p>
                <span>49.90 TND</span> <br><br><center><button onclick="ajout()" class="ajouter"> ajouter au panier</button> </center>
              </div>
              
              <div class="product">
                <img src="../produits/pd6.jpg" alt="Product 2">
                <h3>Trottinette pliable </h3>
                <p>3 en 1 - Musicale - Lumineuse - Hauteur réglable</p>
                <span>199.00 TND</span><br><br> <center><button onclick="ajout()" class="ajouter"> ajouter au panier</button> </center>
              </div>
              <div class="product">
                <img src="../produits/pd7.jpg" alt="Product 2">
                <h3>Product 2</h3>
                <p>Description of Product 2</p>
                <span>$24.99</span><br><br>
                <center><button onclick="ajout()" class="ajouter"> ajouter au panier</button> </center>
              </div>
              <div class="product">
                <img src="../produits/pd8.jpg" alt="Product 2">
                <h3>Kappa Maillot officiel de l'équipe nationale </h3>
                <p>Tunisie Foot CAN 24</p>
                <span>99.00 TND</span><br><br> <center><button onclick="ajout()" class="ajouter"> ajouter au panier</button> </center>
              </div>
              <div class="product">
                <img src="../produits/pd9.jpg" alt="Product 2">
                <h3>Trottinette pliable 3 en 1 </h3>
                <p>Musicale - Lumineuse - Hauteur réglable</p>
                <span>199.00 TND</span><br><br> <center><button onclick="ajout()" class="ajouter"> ajouter au panier</button> </center>
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