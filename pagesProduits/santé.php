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
    window.location.href = "santé.php";
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
                <img src="../produits/san1.jpg" alt="Product 1">
                <h3>STC NUTRITION </h3>
                <p>Carnitine Complex - Spécial Séchage</p>
                <span>89.00 TND</span> <br><br><center><button onclick="ajout()" class="ajouter"> ajouter au panier</button> </center>
              </div>
              
              <div class="product">
                <img src="../produits/san2.jpg" alt="Product 2">
                <h3>Rape Pieds Électrique </h3>
                <p>anti callosités - avec 60 recharges</p>
                <span>130.50 TND</span><br><br> <center><button onclick="ajout()" class="ajouter"> ajouter au panier</button> </center>
              </div>
              <div class="product">
                <img src="../produits/san3.jpg" alt="Product 2">
                <h3>Coussin de massage</h3>
                <p>pour voiture et maison -</p>
                <span>65.00 TND</span> <br><br><center><button onclick="ajout()" class="ajouter"> ajouter au panier</button> </center>
              </div>
              <div class="product">
                <img src="../produits/san4.jpg" alt="Product 2">
                <h3>Bayer Insecticide </h3>
                <p>Decis ec 25 - 250ml</p>
                <span>45.00 TND</span><br><br> <center><button onclick="ajout()" class="ajouter"> ajouter au panier</button> </center>
              </div>
              <div class="product">
                <img src="../produits/san5.jpg" alt="Product 2">
                <h3>Calinou Spray pour animaux </h3>
                <p>- 4en1</p>
                <span>10.32 TND</span> <br><br><center><button onclick="ajout()" class="ajouter"> ajouter au panier</button> </center>
              </div>
              
              <div class="product">
                <img src="../produits/san6.jpg" alt="Product 2">
                <h3>Bayer Insecticide </h3>
                <p> Decis ec 25 - 1L</p>
                <span>120.00 TND</span><br><br> <center><button onclick="ajout()" class="ajouter"> ajouter au panier</button> </center>
              </div>
              <div class="product">
                <img src="../produits/san7.jpg" alt="Product 2">
                <h3>NEJIA Coffret de luxe en bois Nejia,</h3>
                <p>6 bouteilles d'eaux flroales 250ml</p>
                <span>78.00 TND</span><br><br>
                <center><button onclick="ajout()" class="ajouter"> ajouter au panier</button> </center>
              </div>
              <div class="product">
                <img src="../produits/san8.jpg" alt="Product 2">
                <h3>Bionime Coffret glucomètre </h3>
                <p>Avec 100 bandelettes -</p>
                <span>91.00 TND</span><br><br> <center><button onclick="ajout()" class="ajouter"> ajouter au panier</button> </center>
              </div>
              <div class="product">
                <img src="../produits/san9.jpg" alt="Product 2">
                <h3>Beurer Tensiometre electronique au bras</h3>
                <p></p>
                <span>94.90 TND</span><br><br> <center><button onclick="ajout()" class="ajouter"> ajouter au panier</button> </center>
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