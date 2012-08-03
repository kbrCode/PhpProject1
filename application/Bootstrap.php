<?php

class Bootstrap extends Zend_Application_Bootstrap_Bootstrap
{
    /**
     * Layout
     */
    protected function _initDocType(){
        $this->bootstrap('view');
        $view = $this->getResource('view');
        $view->doctype('XHTML1_STRICT');
    }
/** 
 * Start session 
 */  
public function _initCoreSession()  
{  
    $this->bootstrap('db');  
    $this->bootstrap('session');  
    Zend_Session::start();  
}  

}

