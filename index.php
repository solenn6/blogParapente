<!DOCTYPE html>
<html lang="fr">
  <?php include('header.php');?>
  <body>
    <header>
        <section id="titleWebsite">
            <div>
                <img src="img/parapente.png" alt="logoParapente">
                <h1> Le Blog du Parapente </h1>
            </div>
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
        require_once('class/GestionSite.php');
        $sites = new GestionSite();
        $data = $sites->displaySite('SELECT * FROM site LIMIT 3'); 
        foreach($data as $site) { 
            ?>
        <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6" id="pictureSite">
        <?php 
            echo '<a href="descriptionSite.php?site='. $site->getIdSite().'"><img src="'. $site->getPicture() . '"class="img-responsive"/></a>';
        ?>
            <div class="caption">
                <h4><?php echo ucfirst($site->getName()); ?> - 
                <?php echo ucfirst( $site->getLocation()); ?></h4>
            </div> 
        </div>
        <?php
    }
    ?>      
    <a href="siteDeco.php"> Voir plus </a>
  </body>
</html>
