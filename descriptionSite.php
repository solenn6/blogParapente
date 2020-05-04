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
    <a href="index.php"> Retour </a>
        <?php
            // display description on site where user have click
            $id=$_GET['site'];
            include('connectdb.php');
            $sql = "SELECT id_site, site_description, site_altitude,site_name, site_location, site_latitude, site_longitude,
            site_favourable_winds, site_unfavourable_winds, site_picture FROM site WHERE id_site = $id";
            $requete = $db->prepare($sql);            
            $status = $requete->execute();
            if (!$status) {
                print_r($requete->errorInfo());
            }
            while ($donnees = $requete->fetch()) {
        ?>
        <section id="displayDescriptionSite">
            <div>
                <?php 
                    echo '<img src="'. $donnees["site_picture"] . '"/>';
                ?>
            </div>
            <div id="featuresSite">
                <h1><?php echo ucfirst($donnees["site_name"]); ?> - 
                <?php echo ucfirst($donnees["site_location"]); ?></h1>    
                <?php echo utf8_encode($donnees["site_description"]);
                echo '<p> Altitude :'.$donnees["site_altitude"].' </p> ';
                echo '<p> Latitude :'.$donnees["site_latitude"].' </p> ';
                echo '<p> Longitude :'.$donnees["site_longitude"].' </p> ';
                echo '<p> Vents favorables :'. $donnees["site_favourable_winds"].'</p>';
                echo '<p> Vents défavorables: '. $donnees["site_unfavourable_winds"].'</p>';
            } 
                $requete->closeCursor();
                ?>
            </div>
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
      