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
    window.location.href = "beauté.php";
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
                <img src="../produits/1 (1).jpg" alt="Product 1">
                <h3>Garnier SkinActive Eau Micellaire</h3>
                <span>9.99TND</span> <br><br><center><button onclick="ajout()" class="ajouter"> ajouter au panier</button> </center>
              </div>
              
              <div class="product">
                <img src="../produits/2 (1).jpg" alt="Product 2">
                <h3>RIMITA parfume - femme</h3>
                <span>15.30TND</span><br><br> <center><button  onclick="ajout()" class="ajouter"> ajouter au panier</button> </center>
              </div>
              <div class="product">
                <img src="../produits/3 (1).jpg" alt="Product 2">
                <h3>SVR Topialyse Gel Lavant - 200 Ml</h3>
                <span>31TND</span> <br><br><center><button onclick="ajout()" class="ajouter"> ajouter au panier</button> </center>
              </div>
              <div class="product">
                <img src="../produits/4 (1).jpg" alt="Product 2">
                <h3>Gel Moussant nettoyant</h3>
                <span>14.50TND</span><br><br> <center><button onclick="ajout()" class="ajouter"> ajouter au panier</button> </center>
              </div>
              <div class="product">
                <img src="../produits/may (1).jpg" alt="Product 2">
                <h3>Topface Make-up Style Fond de Teint</h3>
                <span>16.50 TND</span> <br><br><center><button onclick="ajout()" class="ajouter"> ajouter au panier</button> </center>
              </div>
              
              <div class="product">
                <img src="../produits/maybeline (1).jpg" alt="Product 2">
                <h3>Maybelline New York Instant</h3>
                <span>29.99TND</span><br><br> <center><button onclick="ajout()" class="ajouter"> ajouter au panier</button> </center>
              </div>
              <div class="product">
                <img src="../produits/pd8.jpeg" alt="Product 2">
                <h3>Maybelline New York Fit Me!</h3>
                <span>28.89TND</span><br><br>
                <center><button onclick="ajout()" class="ajouter"> ajouter au panier</button> </center>
              </div>
              <div class="product">
                <img src="../produits/topface (1).jpg" alt="Product 2">
                <h3>Skin Editor </h3>
                <span>25.99 TND</span><br><br> <center><button onclick="ajout()" class="ajouter"> ajouter au panier</button> </center>
              </div>
              <div class="product">
                <img src="../produits/top (1).jpg" alt="Product 2">
                <h3>Skinwear Topface</h3>
                <span>28.99 TND</span><br><br> <center><button onclick="ajout()"  class="ajouter"> ajouter au panier</button> </center>
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