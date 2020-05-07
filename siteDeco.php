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
            <h3> Filtrer par:</h3>
            <ul>
                <li id="region"> Régions: </li>
            </ul>
            <button class="btn btn-default filter-button regionButton" data-filter="all">All</button>
            <button class="btn btn-default filter-button regionButton" data-filter="Bretagne">Bretagne</button>
            <button class="btn btn-default filter-button regionButton" data-filter="Normandie">Normandie</button>
            <button class="btn btn-default filter-button regionButton" data-filter="Loire">Pays de la Loire</button>
            <button class="btn btn-default filter-button regionButton" data-filter="Est">Grand Est </button>
            <button class="btn btn-default filter-button regionButton" data-filter="Occitanie">Occitanie</button>
            <button class="btn btn-default filter-button regionButton" data-filter="Aquitaine"> Nouvelle Aquitaine </button>
            <button class="btn btn-default filter-button regionButton" data-filter="Hauts-de-France">Hauts-de-France</button>
            <button class="btn btn-default filter-button regionButton" data-filter="Centre">Centre-Val de Loire </button>
            <button class="btn btn-default filter-button regionButton" data-filter="Bourgogne">Bourgogne-Franche-Comté</button>
            <button class="btn btn-default filter-button regionButton" data-filter="Auvergne">Auvergne-Rhône-Alpes</button>
            <button class="btn btn-default filter-button regionButton" data-filter="Paca">Provence-Alpes-Côte d'Azur </button>
            <ul>
                <li id="filtreAltitude"> Altitude: </li>
            </ul>
            <button class="btn btn-default filter-button altitudeButton" data-filter="all">All</button>
            <button class="btn btn-default filter-button altitudeButton" data-filter="0-500"> 0-500</button>
            <button class="btn btn-default filter-button altitudeButton" data-filter="500-1000">500-1000</button>
            <button class="btn btn-default filter-button altitudeButton" data-filter="1000-1500">1000-1500</button>
            <button class="btn btn-default filter-button altitudeButton" data-filter="1500-2000">1500-2000 </button>
            <button class="btn btn-default filter-button altitudeButton" data-filter="2000-2500">2000-2500</button>
        </div>
        <script src="js/script.js"></script>
        <?php
            require_once('class/GestionSite.php');
            $sites = new GestionSite();
            $data = $sites->displaySite('SELECT * FROM site'); 
            foreach($data as $site) { 
                ?>
                <div class="col-md-4">
                    <div class="thumbnail filter <?php echo $site->getRegion();?> filter <?php echo $site->getFiltreAltitude();?>">
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