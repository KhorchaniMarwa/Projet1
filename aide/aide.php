<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="aide.css">
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
  else if(searchValue=null) {
    window.location.href = "aide.php";
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
          <div class="text2"> <h1> Centre d'assistance :</h1>
             <h2>Salut, comment pouvons-nous vous aider?</h2></div>
        <div class="container2">
               
             <div id="box1"><a href=""></a>Paiment</div>
             <div id="box2"><a href=""></a>Passer une commande</div>
             <div id="box3"><a href=""></a>Annuler Des Commandes</div>
             <div id="box4"><a href=""></a>Faire Un Retour</div>
        </div>
       
    
       <div class="container1">
        <div id="myDIV">
          <h5 color="purple"> * Le paiement: </h5> se fait au moment de la réception de votre commande.
            </div>
            <div class="container1">
        <div id="myDIV1">
       
          <h5 >  * Passez une commande en quelques étapes :</h5>
             <ol>
              <li type="1">Parcourez et choisissez votre produit</li>
              <li>Ajouter le produit au panier</li>
             </ol>
            </div>
        </div>
            <div class="container1">
        <div id="myDIV2">
          <h5 color="purple">* Annulation des commandes: </h5> se fait par envoyer un email vers 'bensalemtaha20@gmail.com' contenant votre username.
            </div>
       </div>
       <div id="myDIV3">
        <h5 color="purple">* Faire un retour : </h5> se fait a la main de livreur.
          </div>
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