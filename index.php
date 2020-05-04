<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <title>Blog de Parapente</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link rel="stylesheet" media="screen" href="css/style.css"> 
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Suez+One|Vidaloka&display=swap" rel="stylesheet">
  </head>
  <body>
    <header>
        <section id="titleWebsite">
            <div>
                <img src="img/parapente.png" alt="logoParapente">
                <h1> Le Blog du Parapente </h1>
            </div>
            <a href="pagetest.php"> Page Test </a>
        </section>
    </header>
    <section id="carousel">
       <!-- display picture competition and view of different site -->
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="item active">
                    <img src="img/actu.jpg" alt="flyer competition">
                </div>

                <div class="item">
                    <img src="img/actu2.jpg" alt="view Annecy's lake">
                </div>
                <div class="item">
                    <img src="img/actu3.jpg" alt="view Dune of Pila">
                </div>
                <div class="item">
                    <img src="img/actu4.jpg" alt="flyer competition">
                </div>
                <div class="item">
                    <img src="img/actu5.jpg" alt="Paragliding">
                </div>
            </div>
            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </section>
    <h2> Les différents sites de décollage </h2>
    <?php
        //display picture, name, location for three site for more site click on see more
        include('connectdb.php');
        $sql = "SELECT id_site, site_name, site_location, site_picture FROM site LIMIT 3";
        $requete = $db->prepare($sql);            
        $status = $requete->execute();
        if (!$status) {
            print_r($requete->errorInfo());
            }
        while ($donnees = $requete->fetch()) {
        ?>
        <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6" id="pictureSite">
          <?php 
            $variable=$donnees["id_site"];
            echo '<a href="descriptionSite.php?site='. $donnees['id_site'].'"><img src="'. $donnees["site_picture"] . '"class="img-responsive"/></a>';
          ?>
          <div class="caption">
            <h4><?php echo ucfirst($donnees["site_name"]); ?> - 
            <?php echo ucfirst($donnees["site_location"]); ?></h4>
          </div> 
        </div>
        <?php
        } 
        $requete->closeCursor();
    ?>
    <a href="siteDeco.php"> Voir plus </a>
  </body>
</html>
