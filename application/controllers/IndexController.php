<?php

class IndexController extends Zend_Controller_Action
{

    public function init()
    {
        /* Initialize action controller here */
    }

    public function indexAction()
    {
        // action body
		$this->view->acl = new Zend_Acl();
		
		// Add groups to the Role registry using Zend_Acl_Role
		// Guest does not inherit access controls
		$roleGuest = new Zend_Acl_Role('guest');
		$admin = new Zend_Acl_Role('admin');
		
		$this->view->acl->addRole($roleGuest)
		->addRole(new Zend_Acl_Role('member'))
		->addRole(new Zend_Acl_Role($admin));
		
		// Staff inherits view privilege from guest, but also needs additional
		// privileges
		$this->view->acl->allow('guest', null, array('addGestbook'));
		
		// Editor inherits view, edit, submit, and revise privileges from
		// staff, but also needs additional privileges
		$this->view->acl->allow('member', null, array('addGestbook', 'deleteGestbook'));
		
		// Administrator inherits nothing, but is allowed all privileges
		$this->view->acl->allow('admin');
		
		$parents = array('guest', 'member', 'admin');
		$this->view->acl->addRole(new Zend_Acl_Role('someUser'), $parents);
		
		
		// Staff inherits from guest
		$this->view->acl->addRole(new Zend_Acl_Role('staff'), $roleGuest);
		
		/*
		 Alternatively, the above could be written:
		$acl->addRole(new Zend_Acl_Role('staff'), 'guest');
		*/
		
		// Editor inherits from staff
		$this->view->acl->addRole(new Zend_Acl_Role('editor'), 'staff');
		
		// Administrator does not inherit access controls
		$this->view->acl->addRole(new Zend_Acl_Role('administrator'), $admin);
    }


}

