<?php 
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Blog de Parapente</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link rel="stylesheet" media="screen" href="css/style.css"> 
    <link href="https://fonts.googleapis.com/css?family=Suez+One|Vidaloka&display=swap" rel="stylesheet">
  </head>
  <body>
    <a href="SiteDeco.php"> Retour </a>
        <?php
            $id=$_GET['site'];
            require_once('GestionSite.php');
            GestionSite::$db = $db;
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
                include('connectdb.php');
                $sql = "SELECT id_site, id_site_landing, site_landing_name, site_landing_description
                FROM site_landing WHERE id_site = $id";
                $requete = $db->prepare($sql);            
                $status = $requete->execute();
                if (!$status) {
                    print_r($requete->errorInfo());
                }
                while ($donnees = $requete->fetch()) {
            ?>
            <div id="descriptionLandingSite">
                <h2>Piste d'atterrissage  <?php echo ucfirst($donnees["site_landing_name"]); ?></h2> 
                <?=utf8_encode($donnees["site_landing_description"]);
                ?>
            </div>
            <?php
                }
                $requete->closeCursor();
            ?>
        </section>
        <h3 id="shareExperience"> Partager une expérience </h3>
        <form id="uploadExperienceForm" action="upload.php?site=<?php echo $id; ?>" method="post" enctype="multipart/form-data" target="result_frame">
            <input type='text' name='pseudo' placeholder="pseudo">
            <textarea name="content" placeholder="votre expérience"> </textarea>
            <input type="file" name="file" id="file">
            <button id="submit-button" class="btn btn-primary" onclick="upload()">Upload</button>
        </form>
    <body>
<html>
      