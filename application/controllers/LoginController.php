<?php

class LoginController extends Zend_Controller_Action
{
    public function init()
    {
        /* Initialize action controller here */
    }

    public function indexAction()
    {
        // action body
    }
    
    /**
     * http://old.karolnowicki.pl/zend-framework/artykul/pokaz/system-logowania-w-zend-framework/
     */
    
    public function loginAction()
    {
        $form = new Form_Login();
        $form->setAction('/login')->setMethod('post');
        if ($this->_request->isPost() && $form->isValid($_POST)) {
            // pobieramy dane z formularza
            $data = $form->getValues();
            // pobieramy domyślny adapter bazy danych
            $db = Zend_Db_Table::getDefaultAdapter();
            // tworzymy instancję adaptera autoryzacji
            $authAdapter = new Zend_Auth_Adapter_DbTable($db, 'uzytkownicy',  'haslo');
            // wprowadzamy dane do adaptera
            $authAdapter->setIdentity($data['email']);
            $authAdapter->setCredential(md5($data['password']));
            // sprawdzamy, czy użytkownik jest aktywny
            $authAdapter->setCredentialTreatment("? AND status = '1'");
            // autoryzacja
            $result = $authAdapter->authenticate();
            if ($result->isValid()) {
                // umieszczamy w sesji dane użytkownika
                $auth = Zend_Auth::getInstance();
                $storage = $auth->getStorage();
                $storage->write($authAdapter->getResultRowObject(array(
                            'id', 'email', 'imie', 'nazwisko', 'rola'
                        )));
                return $this->_redirect('/');
            } else {
                $this->view->loginMessage = "Niepoprawny login lub hasło";
            }
        }
        $this->view->form = $form;
    }

    public function logoutAction()
    {
        $auth = Zend_Auth::getInstance();
        $auth->clearIdentity();
        return $this->_redirect('/');
    }


}





