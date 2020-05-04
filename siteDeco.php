<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <title>Blog de Parapente</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link rel="stylesheet" media="screen" href="css/style.css"> 
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Suez+One|Vidaloka&display=swap" rel="stylesheet">
  </head>
  <body>
    <header>
        <h1> Les sites de décollages </h1>
    </header>
    <section>
        <?php
            require_once('GestionSite.php');
            GestionSite::$db = $db;
            $sites = new GestionSite();
            $data = $sites->displaySite('SELECT * FROM site'); 
            foreach($data as $site) { 
                ?>
                <div class="col-md-4">
                    <div class="thumbnail">
                    <?php 
                    echo '<a href="descriptionSite.php?site='. $site->getIdSite().'"><img src="'. $site->getPicture() . '"style="width:100%"/></a>';
                    ?>
                        <div class="caption">
                            <h4><?php echo ucfirst($site->getName()); ?> - 
                            <?php echo ucfirst( $site->getLocation()); ?></h4>
                        </div> 
                    </div>
                </div>
            <?php
            }
            ?>
    </section>