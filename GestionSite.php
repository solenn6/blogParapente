<?php
require_once('Site.php');
require_once('connectdb.php');
class GestionSite extends Site{
    public static $db;
    private $_sql;
   
    public function __construct(){
        try
        {
            include('identifiant.php');
            
            self::$db = new PDO("$techno:$location;dbname=$dbname;", $user, $password);
        }
        catch(Exception $e)
        {
                die('Erreur : '.$e->getMessage());
        }
    }
    public function setSql($_sql)
    {
      if (is_string($_sql))
      {
        $this->_sql = $_sql;
        }
    }
    public function getSql(){
        return $this->_sql;
    }
    public function displaySite($_sql){
        $data = array();
        $req = self::$db->prepare($_sql);
        $status = $req->execute();
        if (!$status) {
            print_r($req->errorInfo());
        }
        while ($site = $req->fetch()) {
            $sites = new Site();
            $sites->setName($site["site_name"]);
            $sites->setLocation($site["site_location"]);
            $sites->setIdSite($site["id_site"]);
            $sites->setPicture($site["site_picture"]);
            $sites->setDescription($site["site_description"]);
            $sites->setLatitude($site["site_latitude"]);
            $sites->setLongitude($site["site_longitude"]);
            $sites->setFavourableWinds($site["site_favourable_winds"]);
            $sites->setUnfavourableWinds($site["site_unfavourable_winds"]);
            array_push($data,$sites);

        }
            $req->closeCursor();
            return $data;
    }
    public function displayLandingSite(){
        $req = self::$db->prepare('SELECT * FROM site');
        $status = $req->execute();
        if (!$status) {
            print_r($req->errorInfo());
        }
        while ($site = $req->fetch()) {
            $sites = new Site();
            $sites->setName($site["site_landing_name"]);
            $sites->setId($site["id_site"]);
            $sites->setId($site["id_site_landing"]);

            $sites->setDescription($site["site_landing_description"]);
        }
            $req->closeCursor();
    
    }

}
?>
