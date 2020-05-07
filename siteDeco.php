<!DOCTYPE html>
<html lang="fr">
   <?php include('header.php'); ?> 
  <body>
    <header>
        <a href="index.php">Accueil</a>
        <h1> Les sites de décollages </h1>
    </header>
    <section>
        <div id="filtre">
            <h3> Filtrer par Région:</h3>
            <ul>
                <li id="region"> Régions: </li>
            </ul>
            <button class="btn btn-default filter-button" data-filter="all">All</button>
            <button class="btn btn-default filter-button" data-filter="Bretagne">Bretagne</button>
            <button class="btn btn-default filter-button" data-filter="Normandie">Normandie</button>
            <button class="btn btn-default filter-button" data-filter="Loire">Pays de la Loire</button>
            <button class="btn btn-default filter-button" data-filter="Est">Grand Est </button>
            <button class="btn btn-default filter-button" data-filter="Occitanie">Occitanie</button>
            <button class="btn btn-default filter-button" data-filter="Aquitaine"> Nouvelle Aquitaine </button>
            <button class="btn btn-default filter-button" data-filter="Hauts-de-France">Hauts-de-France</button>
            <button class="btn btn-default filter-button" data-filter="Centre">Centre-Val de Loire </button>
            <button class="btn btn-default filter-button" data-filter="Bourgogne">Bourgogne-Franche-Comté</button>
            <button class="btn btn-default filter-button" data-filter="Auvergne">Auvergne-Rhône-Alpes</button>
            <button class="btn btn-default filter-button" data-filter="Paca">Provence-Alpes-Côte d'Azur </button>
        </div>
        <script src="js/script.js"></script>
        <?php
            require_once('class/GestionSite.php');
            $sites = new GestionSite();
            $data = $sites->displaySite('SELECT * FROM site'); 
            foreach($data as $site) { 
                ?>
                <div class="col-md-4">
                    <div class="thumbnail filter <?php echo $site->getRegion();?>">
                    <?php 
                    echo '<a href="descriptionSite.php?site='. $site->getIdSite().'"><img src="'. $site->getPicture() . '"style="width:100%"/></a>';
                    ?>
                        <div class="caption">
                            <h4><?php echo ucfirst($site->getName()); ?> - 
                            <?php echo ucfirst( $site->getLocation())?>
                            </h4>
                        </div> 
                    </div>
                </div>
            <?php
            }
            ?>
    </section>