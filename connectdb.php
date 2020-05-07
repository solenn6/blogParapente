<?php
    try
    {
        include('conf.php');
        
        $db = new PDO("$techno:$location;dbname=$dbname;", $user, $password);
    }
    catch(Exception $e)
    {
            die('Erreur : '.$e->getMessage());
    }
    ?>