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
    window.location.href = "mode.php";
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
                <br><br><li><a href="">beauté</a></li><br><br>
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
                <img src="../produits/mod1.jpg" alt="Product 1">
                <h3>Boots LC 546 Noir </h3>
                <p>Lacet - Fermeture Zip - Pour Homme</p>
                <span>89.00 TND</span> <br><br><center><button onclick="ajout()" class="ajouter"> ajouter au panier</button> </center>
              </div>
              
              <div class="product">
                <img src="../produits/mod2.jpg" alt="Product 2">
                <h3>Sac à dos </h3>
                <p>Documents - Camping - Noir -</p>
                <span>85.00 TND</span><br><br> <center><button onclick="ajout()" class="ajouter"> ajouter au panier</button> </center>
              </div>
              <div class="product">
                <img src="../produits/mod3.jpg" alt="Product 2">
                <h3>Pack 2 sweat</h3>
                <p>à capuche noir et gris</p>
                <span>80.00 TND</span> <br><br><center><button onclick="ajout()" class="ajouter"> ajouter au panier</button> </center>
              </div>
              <div class="product">
                <img src="../produits/mod4.jpg" alt="Product 2">
                <h3>Montre En Diamant Glacé</h3>
                <p>En Acier Inoxydable - Gold Rosé + Boite de cadeaux</p>
                <span>44.00 TND</span><br><br> <center><button onclick="ajout()" class="ajouter"> ajouter au panier</button> </center>
              </div>
              <div class="product">
                <img src="../produits/mod5.jpg" alt="Product 2">
                <h3>Icshoes</h3>
                <p>Sneakers running LC H80 sans lacets pour Homme Femme - Noir - Slip On</p>
                <span>35.00 TND</span> <br><br><center><button onclick="ajout()" class="ajouter"> ajouter au panier</button> </center>
              </div>
              
              <div class="product">
                <img src="../produits/mod7.jpg" alt="Product 2">
                <h3>Icshoes</h3>
                <p>Sneakers LC M24 - Noir - Respirantes,antidérapantes,Légère - Pour Homme -</p>
                <span>38.90 TND</span><br><br> <center><button onclick="ajout()" class="ajouter"> ajouter au panier</button> </center>
              </div>
              <div class="product">
                <img src="../produits/mod6.jpg" alt="Product 2">
                <h3>Exist BASKETS </h3>
                <p>607130 - BOR</p>
                <span>79.99 TND</span><br><br>
                <center><button onclick="ajout()" class="ajouter"> ajouter au panier</button> </center>
              </div>
              <div class="product">
                <img src="../produits/mod8.jpg" alt="Product 2">
                <h3>Icshoes</h3>
                <p>Sneakers LC B20 Noir et Vert - Simili cuir - Nubuck - Lacets .</p>
                <span>74.00 TND</span><br><br> <center><button onclick="ajout()" class="ajouter"> ajouter au panier</button> </center>
              </div>
              <div class="product">
                <img src="../produits/mod9.jpg" alt="Product 2">
                <h3>Struggle Jeans</h3>
                <p>Sac d'école 3D voiture de course pour enfants étanche</p>
                <span>48.75 TND</span><br><br> <center><button onclick="ajout()" class="ajouter"> ajouter au panier</button> </center>
              </div>
        
              <!-- Add more product divs here -->
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