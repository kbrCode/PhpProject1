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

    public function addAction()
    {
        // action body
        $request = $this->getRequest();

        $form = new Application_Form_SeoManagement();

        if ($this->getRequest()->isPost()) {
            if ($form->isValid($request->getPost())) {

                $seo = new Application_Model_Seo($form->getValues());
                //print_r($seo);
                $mapper = new Application_Model_SeoMapper();
//                echo '<pre>';
//                print_r($seo);
//                echo '</pre>';                
                $mapper->save($seo);
                return $this->_helper->redirector('index');
            }
        }
        $this->view->form = $form;
    }

    public function editAction()
    {
        // action body
        $request = $this->getRequest();
        
        $seoM = new Application_Model_SeoMapper();
        $id = $this->getRequest()->getParam('id');
        $seo = $seoM->findByID($id);
        $arr = $seo->toArray();
        
        $form = new Application_Form_SeoManagement();
        $form->setDefaults($arr);
        
        if ($this->getRequest()->isPost()) {
            if ($form->isValid($request->getPost())) {
                $seo = new Application_Model_Seo($form->getValues());
                $mapper = new Application_Model_SeoMapper();
                $mapper->save($seo);
                return $this->_helper->redirector('index');
            }
        }
        $this->view->form = $form;
        
    }

    public function removeAction()
    {
        // action body
    }


}









