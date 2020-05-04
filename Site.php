<?php

class Site {
  protected $_id;
  protected $_idSite;
  protected $_name;
  protected $_location;
  protected $_description;
  protected $_latitude;
  protected $_longitude;
  protected $_picture;
  protected $_favourableWinds;
  protected $_unfavourableWinds;
  protected $_pseudo;
  // Liste des getters pour Site decollage 
  public function getIdSite()
  {
    return $this->_idSite;
  }
  public function getName()
  {
    return $this->_name;
  }
  public function getLocation()
  {
    return $this->_location;
  }
  public function getPicture()
  {
    return $this->_picture;
  }
  public function getDescription()
  {
    return $this->_description;
  }
  public function getLatitude()
  {
    return $this->_latitude;
  }
  public function getLongitude()
  {
    return $this->_longitude;
  }
  public function getFavourableWinds()
  {
    return $this->_favourableWinds;
  }
  public function getUnfavourableWinds()
  {
    return $this->_unfavourableWinds;
  }
  public function getPseudo()
  {
    return $this->_pseudo;
  }

  // Liste des setters
  public function setIdSite($_idSite)
  {
    $_id = (int) $_id;
    if ($_id > 0)
    {
      $this->_id = $_id;
    }
  }
  public function setName($_name)
  {
    if (is_string($_name))
    {
      $this->_name = $_name;
    }
  }
  public function setLocation($_location)
  {
    if (is_string($_location))
    {
      $this->_location = $_location;
    }
  }
  public function setDescription($_description)
  {
    if (is_string($_description))
    {
      $this->_description = $_description;
    }
  }
  public function setLatitude($_latitude)
  {
    $_latitude = (float) $_latitude;
    if ($_latitude > 0)
    {
      $this->_latitude = $_latitude;
    }
  }
  public function setLongitude($_longitude)
  {
    $_longitude = (float) $_longitude;
    $this->_longitude = $_longitude;
  }
  public function setPicture($_picture)
  {
    if (is_string($_picture))
    {
      $this->_picture = $_picture;
    }
  }
  public function setFavourableWinds($_favourableWinds)
  {
    if (is_string($_favourableWinds))
    {
      $this->_favourableWinds = $_favourableWinds;
    }
  }
  public function setUnfavourableWinds($_unfavourableWinds)
  {
    if (is_string($_unfavourableWinds))
    {
      $this->_unfavourableWinds = $_unfavourableWinds;
    }
  }
  public function setPseudo($_pseudo)
  {
    if (is_string($_pseudo))
    {
      $this->_pseudo = $_pseudo;
    }
  }
}  