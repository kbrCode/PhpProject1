<?php

class Application_Model_Seo
{
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

