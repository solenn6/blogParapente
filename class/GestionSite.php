<?php
require_once('Site.php');
class GestionSite extends Site{
    public static $db;
    private $_sql;
   
    public function __construct(){
        try
        {
            include("conf.php");
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
    //le paramètre $_sql permet de pouvoir utiliser une même fonction pour plusieurs requêtes sql
    //Ici, je l'utilise pour 3 requêtes différentes 
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
            $sites->setAltitude($site["site_altitude"]);
            $sites->setLatitude($site["site_latitude"]);
            $sites->setLongitude($site["site_longitude"]);
            $sites->setFavourableWinds($site["site_favourable_winds"]);
            $sites->setUnfavourableWinds($site["site_unfavourable_winds"]);
            $sites->setRegion($site["site_region"]);
            array_push($data,$sites);

        }
            $req->closeCursor();
            return $data;
    }
    public function displayLandingSite($_sql){
        $data = array();
        $req = self::$db->prepare($_sql);
        $status = $req->execute();
        if (!$status) {
            print_r($req->errorInfo());
        }
        while ($site = $req->fetch()) {
            $sites = new Site();
            $sites->setName($site["site_landing_name"]);
            $sites->setIdSite($site["id_site"]);
            $sites->setId($site["id_site_landing"]);
            $sites->setDescription($site["site_landing_description"]);
            array_push($data,$sites);
        }
            $req->closeCursor();
            return $data;
    }
    public function displayExperience($_sql){
        $data = array();
        $req = self::$db->prepare($_sql);
        $status = $req->execute();
        if (!$status) {
            print_r($req->errorInfo());
        }
        while ($site = $req->fetch()) {
            $sites = new Site();
            $sites->setName($site["comment_pseudo"]);
            $sites->setDate($site["comment_date"]);
            $sites->setDescription($site["comment_content"]);
            $sites->setPicture($site["comment_picture"]);
            array_push($data,$sites);
        }
        $req->closeCursor();
        return $data;
    }

}
