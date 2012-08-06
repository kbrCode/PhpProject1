<?php

class Application_Form_SeoManagement extends Zend_Form
{

    public function init()
    {
        /* Form Elements & Other Definitions Here ... */
        $auth = Zend_Auth::getInstance();
        if ($auth->hasIdentity()) {
            $this->view->identity = $auth->getIdentity();
        }
        $namespace = new Zend_Session_Namespace();
        $this->view->acl = $namespace->acl;
    }


}

