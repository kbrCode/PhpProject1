<?php

class Application_Model_Seo
{

  public function __construct(array $options = null)
    {
        if (is_array($options)) {
            $this->setOptions($options);
        }
    }
 
    public function __set($name, $value)
    {
        $method = 'set' . $name;
        if (('mapper' == $name) || !method_exists($this, $method)) {
            throw new Exception('Invalid guestbook property');
        }
        $this->$method($value);
    }
 
    public function __get($name)
    {
        $method = 'get' . $name;
        if (('mapper' == $name) || !method_exists($this, $method)) {
            throw new Exception('Invalid guestbook property');
        }
        return $this->$method();
    }
 
    public function setOptions(array $options)
    {
        $methods = get_class_methods($this);
        foreach ($options as $key => $value) {
            $method = 'set' . ucfirst($key);
            if (in_array($method, $methods)) {
                $this->$method($value);
            }
        }
        return $this;
    }
    
    
  protected $id;
  public function getId() {
      return $this->id;
  }

  public function setId($id) {
      $this->id = $id;
  }

  public function getJezyk_kod() {
      return $this->jezyk_kod;
  }

  public function setJezyk_kod($jezyk_kod) {
      $this->jezyk_kod = $jezyk_kod;
  }

  public function getSeourl() {
      return $this->seourl;
  }

  public function setSeourl($seourl) {
      $this->seourl = $seourl;
  }

  public function getZendurl() {
      return $this->zendurl;
  }

  public function setZendurl($zendurl) {
      $this->zendurl = $zendurl;
  }

  public function getAnchor() {
      return $this->anchor;
  }

  public function setAnchor($anchor) {
      $this->anchor = $anchor;
  }

  public function getAktywny() {
      return $this->aktywny;
  }

  public function setAktywny($aktywny) {
      $this->aktywny = $aktywny;
  }

  public function getRouter() {
      return $this->router;
  }

  public function setRouter($router) {
      $this->router = $router;
  }

  public function getLabel() {
      return $this->label;
  }

  public function setLabel($label) {
      $this->label = $label;
  }

    protected $jezyk_kod;
  protected $seourl;
  protected $zendurl;
  protected $anchor;
  protected $aktywny;
  protected $router;
  protected $label;


}

