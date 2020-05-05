<?php 
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
    <?php include("header.php"); ?>
    <body>
        <a href="SiteDeco.php"> Retour </a>
        <?php
            $id=$_GET['site'];
            require_once('GestionSite.php');
            $sites = new GestionSite();
            $data = $sites->displaySite("SELECT * FROM site WHERE id_site = $id"); 
            foreach($data as $site) { 
            ?>
                <section id="displayDescriptionSite">
                    <div>
                        <?php 
                        echo '<img src="'. $site->getPicture() . '"/>';
                        ?>
                    </div>
                    <div id="featuresSite">
                        <h1><?php echo ucfirst($site->getName()); ?> - 
                        <?php echo ucfirst($site->getLocation()); ?></h1> 
                        <?php echo utf8_encode($site->getDescription());
                         echo '<p> Altitude :'.$site->getAltitude().' </p> ';
                         echo '<p> Latitude :'.$site->getLatitude().' </p> ';
                         echo '<p> Longitude :'.$site->getLongitude().' </p> ';
                         echo '<p> Vents favorables :'. $site->getFavourableWinds().'</p>';
                         echo '<p> Vents défavorables: '. $site->getUnfavourableWinds().'</p>';
                        ?>
                    </div>
            <?php
            }
            ?>
                </section>
            <?php
                $sites = new GestionSite();
                $data = $sites->displayLandingSite("SELECT * FROM site_landing WHERE id_site = $id"); 
                foreach($data as $site) { 
            ?>
            <div id="descriptionLandingSite">
                <h2>Piste d'atterrissage  <?php echo ucfirst($site->getName()); ?></h2> 
                <?=utf8_encode($site->getDescription());
                }
                ?>
            </div>
        </section>
        <h3> Les Expériences partagés </h3>
        <h4 id="shareExperience"> Partager une expérience </h4>
        <form action="upload.php" method="POST" enctype="multipart/form-data">
            <input type="text" name="pseudo" placeholder="pseudo">
            <input type="hidden" name="site" value="<?php echo $id;?>">
            <textarea name="content" placeholder="votre expérience"> </textarea>
            <input type="file" name="file" id="file">
            <button id="submit-button" class="btn btn-primary" onclick="upload()">Upload</button>
        </form>
    <body>
<html>
      