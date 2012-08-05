<?php

class GuestbookController extends Zend_Controller_Action
{

    public function init()
    {
        /* Initialize action controller here */
    }

    public function indexAction()
    {
        $guestbook = new Application_Model_GuestbookMapper();
        $this->view->entries = $guestbook->fetchAll();
        $auth = Zend_Auth::getInstance();
        if ($auth->hasIdentity()) {
            $this->view->identity = $auth->getIdentity();
        }
        $namespace = new Zend_Session_Namespace();
        $this->view->acl = $namespace->acl;
    }

    public function signAction()
    {
        $request = $this->getRequest();
        $form = new Application_Form_Guestbook();

        if ($this->getRequest()->isPost()) {
            if ($form->isValid($request->getPost())) {
                $comment = new Application_Model_Guestbook($form->getValues());
                $mapper = new Application_Model_GuestbookMapper();
                $mapper->save($comment);
                return $this->_helper->redirector('index');
            }
        }
        $this->view->form = $form;
    }

    public function removeAction()
    {
        print_r($this->getRequest());
        //if ($this->getRequest()->isPost()) {
            $id = $this->getRequest()->getParam('id');
            $mapper = new Application_Model_GuestbookMapper();
            $mapper->delete($id);
        //}
        return $this->_helper->redirector('index');
    }
}





