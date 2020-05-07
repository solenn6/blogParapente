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
            require_once('class/GestionSite.php');
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
                    <div id="descriptionSite">
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
        <h4 id="shareExperience"> + Ajouter une expérience </h4>
        <form id="formExp" action="upload.php" method="POST" enctype="multipart/form-data" onsubmit="return checkForm(this)">
            <input type="text" name="pseudo" placeholder="pseudo" class="field" onfocus="checkPseudo(this)">
            <input type="hidden" name="site" value="<?php echo $id;?>">
            <textarea name="content" placeholder="votre expérience" class="field" onfocus="checkContent(this)"> </textarea>
            <input type="file" name="file" id="file" class="field">
            <button id="submit-button" class="btn btn-primary" id="buttonUpload">Upload</button>
        </form>
        <script src="js/script.js"></script>
        <?php
        $sites = new GestionSite();
        $data = $sites->displayExperience("SELECT * FROM experience_comment WHERE id_site = $id");
        foreach($data as $site) {
        ?>
        <div id="displayExperience">
            <p><?php echo ucfirst($site->getName()); ?> </p>
            <p> <?php echo $site->getDate();?> </p>
            <p> <?php echo $site->getDescription(); ?></p>
            <?php
                echo '<img src="' . $site->getPicture() . '"/>';
        }
            ?>
    <body>
<html>
      