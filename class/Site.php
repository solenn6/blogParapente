<?php

class Site {
  protected $_id;
  protected $_idSite;
  protected $_name;
  protected $_location;
  protected $_region;
  protected $_description;
  protected $_altitude;
  protected $_latitude;
  protected $_filtreAltitude;
  protected $_longitude;
  protected $_picture;
  protected $_favourableWinds;
  protected $_unfavourableWinds;
  protected $_date;
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
  public function getRegion()
  {
      return $this->_region;
  }
  public function getPicture()
  {
    return $this->_picture;
  }
  public function getDescription()
  {
    return $this->_description;
  }
  public function getFiltreAltitude()
  {
      return $this->_filtreAltitude;
  }
  public function getAltitude()
  {
    return $this->_altitude;
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
  public function getDate()
  {
        return $this->_date;
  }

  // Liste des setters
  public function setId($_id)
  {
    $_id = (int) $_id;
    if ($_id > 0)
    {
      $this->_id = $_id;
    }
  }
  public function setIdSite($_idSite)
  {
    $_idSite = (int) $_idSite;
    if ($_idSite > 0)
    {
      $this->_idSite = $_idSite;
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
    public function setRegion($_region)
    {
        if (is_string($_region))
        {
            $this->_region = $_region;
        }
    }
  public function setDescription($_description)
  {
    if (is_string($_description))
    {
      $this->_description = $_description;
    }
  }
  public function setAltitude($_altitude)
  {
    $_altitude = (float) $_altitude;
    if ($_altitude > 0)
    {
      $this->_altitude = $_altitude;
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
    public function setDate($_date)
    {
        $this->_date = $_date;
    }
    public function setFiltreAltitude($_filtreAltitude)
    {
        $this->_filtreAltitude = $_filtreAltitude;
    }
}  