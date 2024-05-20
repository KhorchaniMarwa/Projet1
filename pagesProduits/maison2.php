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
    window.location.href = "maison2.php";
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
                <img src="../produits/mai9.jpg" alt="Product 1">
                <h3>Chin Hua 4 Cuillères </h3>
                <p>Antiadhésifs - Bois bambou naturel</p>
                <span>9.90 TND</span> <br><br><center><button class="ajouter"> ajouter au panier</button> </center>
              </div>
              
              <div class="product">
                <img src="../produits/mai1.jpg" alt="Product 2">
                <h3>Yves de Fabergé</h3>
                <p>Lot de 4 Oreillers - 50 x 70 cm - Blanc</p>
                <span>29.90 TND</span><br><br> <center><button class="ajouter"> ajouter au panier</button> </center>
              </div>
              <div class="product">
                <img src="../produits/mai2.jpg" alt="Product 2">
                <h3>Étagère à chaussures en plastique</h3>
                <p>4 niveaux - Noir</p>
                <span>14.50 TND</span> <br><br><center><button class="ajouter"> ajouter au panier</button> </center>
              </div>
              <div class="product">
                <img src="../produits/mai3.jpg" alt="Product 2">
                <h3>Batterie 9 pieces </h3>
                <p>El Gusto</p>
                <span>99.00 TND</span><br><br> <center><button class="ajouter"> ajouter au panier</button> </center>
              </div>
              <div class="product">
                <img src="../produits/mai4.jpg" alt="Product 2">
                <h3>Cookart Poêle</h3>
                <p>30 cm - Antiadhésive - El Gusto - Granite - Noir moucheté Blanc</p>
                <span>17.99 TND</span> <br><br><center><button class="ajouter"> ajouter au panier</button> </center>
              </div>
              
              <div class="product">
                <img src="../produits/mai5.jpg" alt="Product 2">
                <h3>Tefal Batterie de cuisine Tefal</h3>
                <p>5 pièces - Tous feux sauf induction -</p>
                <span>208.00 TND</span><br><br> <center><button class="ajouter"> ajouter au panier</button> </center>
              </div>
              <div class="product">
                <img src="../produits/mai6.jpg" alt="Product 2">
                <h3>Magic house Robot Pétrin</h3>
                <p>Multifonctions professionnel-8.5Litres-1500W-Rouge-Garantie 1 an</p>
                <span>399.00 TND</span><br><br>
                <center><button class="ajouter"> ajouter au panier</button> </center>
              </div>
              <div class="product">
                <img src="../produits/mai7.jpg" alt="Product 2">
                <h3>Whirlpool Lave Vaisselle </h3>
                <p>14 Couverts - Inox - 3C26PX - Garantie 2 Ans</p>
                <span>2,475.00 TND</span><br><br> <center><button class="ajouter"> ajouter au panier</button> </center>
              </div>
              <div class="product">
                <img src="../produits/mai8.jpg" alt="Product 2">
                <h3>Cookart Poêle </h3>
                <p>26cm - Antiadhésive - Noir</p>
                <span>15.98 TND</span><br><br> <center><button class="ajouter"> ajouter au panier</button> </center>
              </div>
        
              <!-- Add more product divs here -->
            </section>
          </div>
    </main>
    <footer>
      
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