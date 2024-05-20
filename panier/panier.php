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
    window.location.href = "../pagesProduits/beauté.php";
  } else if(list2.includes(searchValue.toLowerCase())) {
    window.location.href = "../pagesProduits/sport.php";
  }
  else if(list3.includes(searchValue.toLowerCase())) {
    window.location.href = "../pagesProduits/téléphone.php";
  }
  else if(list4.includes(searchValue.toLowerCase())) {
    window.location.href = "../pagesProduits/mode.php";
  }
  else if(list5.includes(searchValue.toLowerCase())) {
    window.location.href = "../pagesProduits/maison.php";
  }
  else if(list6.includes(searchValue.toLowerCase())) {
    window.location.href = "../pagesProduits/santé.php";
  }
  else if(searchValue="") {
    window.location.href = "panier.php";
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
            <div class="container">
        <center><img src="../produits/logo.jpg" width="150">
       <br><h2> Votre panier est vide!</h2>
       <br><h4> Parcourez nos catégories et découvrez nos meilleures offres</h4>
       <br><br> <a href="" target="_blank">
            <button><a href="../loginRegisterLogout/index.php">commencez vos achats</a></button>
       
       </center>
    </div>
</main>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>

    </body>
</html>
