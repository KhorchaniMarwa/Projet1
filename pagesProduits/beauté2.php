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
    window.location.href = "beauté2.php";
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
                <li><a href="../panier/panier.php">Panier</a></li>
            </ul>
            <ul>
                <li><a href="../loginRegisterLogout/logout.php">log out</a></li>
            </ul>
    </nav>
    <main>
        <div class="main-content">
            <aside class="sidebar">
              <ul>
                <br><br><li><a href="beauté2.php">beauté</a></li><br><br>
                <li><a href="sport2.php">sport</a></li><br><br>
                <li><a href="téléphone2.php">telephones et tablettes</a></li><br><br>
                <li><a href="mode2.php">mode</a></li><br><br>
                <li><a href="maison2.php">maison et decore</a></li><br><br>
                <li><a href="santé2.php">santé</a></li><br><br>
            </ul>
            </aside>
            
            <section class="products">
              <!-- Product divs -->
              <div class="product">
                <img src="../produits/1 (1).jpg" alt="Product 1">
                <h3>Garnier SkinActive Eau Micellaire</h3>
                <span>9.99TND</span> <br><br><center><button class="ajouter"> ajouter au panier</button> </center>
              </div>
              
              <div class="product">
                <img src="../produits/2 (1).jpg" alt="Product 2">
                <h3>RIMITA parfume - femme</h3>
                <span>15.30TND</span><br><br> <center><button class="ajouter"> ajouter au panier</button> </center>
              </div>
              <div class="product">
                <img src="../produits/3 (1).jpg" alt="Product 2">
                <h3>SVR Topialyse Gel Lavant - 200 Ml</h3>
                <span>31TND</span> <br><br><center><button class="ajouter"> ajouter au panier</button> </center>
              </div>
              <div class="product">
                <img src="../produits/4 (1).jpg" alt="Product 2">
                <h3>Gel Moussant nettoyant</h3>
                <span>14.50TND</span><br><br> <center><button class="ajouter"> ajouter au panier</button> </center>
              </div>
              <div class="product">
                <img src="../produits/may (1).jpg" alt="Product 2">
                <h3>Topface Make-up Style Fond de Teint</h3>
                <span>16.50 TND</span> <br><br><center><button class="ajouter"> ajouter au panier</button> </center>
              </div>
              
              <div class="product">
                <img src="../produits/maybeline (1).jpg" alt="Product 2">
                <h3>Maybelline New York Instant</h3>
                <span>29.99TND</span><br><br> <center><button class="ajouter"> ajouter au panier</button> </center>
              </div>
              <div class="product">
                <img src="../produits/pd8.jpeg" alt="Product 2">
                <h3>Maybelline New York Fit Me!</h3>
                <span>28.89TND</span><br><br>
                <center><button class="ajouter"> ajouter au panier</button> </center>
              </div>
              <div class="product">
                <img src="../produits/topface (1).jpg" alt="Product 2">
                <h3>Skin Editor </h3>
                <span>25.99 TND</span><br><br> <center><button class="ajouter"> ajouter au panier</button> </center>
              </div>
              <div class="product">
                <img src="../produits/top (1).jpg" alt="Product 2">
                <h3>Skinwear Topface</h3>
                <span>28.99 TND</span><br><br> <center><button class="ajouter"> ajouter au panier</button> </center>
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