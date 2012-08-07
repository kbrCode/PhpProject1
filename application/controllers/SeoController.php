<?php

class SeoController extends Zend_Controller_Action
{

    public function init()
    {
        /* Initialize action controller here */
        $auth = Zend_Auth::getInstance();
        if ($auth->hasIdentity()) {
            $this->view->identity = $auth->getIdentity();
        }
        $namespace = new Zend_Session_Namespace();
        $this->view->acl = $namespace->acl;
        
        $seo = new Application_Model_SeoMapper();
        $this->view->entries = $seo->fetchAll();
    }

    public function indexAction()
    {
        // action body
    }

    public function returnAction()
    {
        // action body
    }


}



