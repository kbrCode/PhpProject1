<?php

class Application_Form_Login extends Zend_Form
{
    public function init()
    {
        /* Form Elements & Other Definitions Here ... */
        //$this->setMethod('post');
        
    $username = $this->createElement('text', 'username');
        $username->setLabel('Nazwa użytkownika:')
                ->setRequired(TRUE)
                ->setAttrib('size', 30)
                ->addFilters(array(
                    new Zend_Filter_StringToLower(),
                    new Zend_Filter_StringTrim(),
                    new Zend_Filter_StripNewlines(),
                    new Zend_Filter_StripTags()
                ))
                ->addValidators(array(
                    new Zend_Validate_NotEmpty()
                ));
        
    $realname = $this->createElement('text', 'realname');
        $realname->setLabel('Nazwa:')
                ->setRequired(TRUE)
                ->setAttrib('size', 30)
                ->addFilters(array(
                    new Zend_Filter_StringToLower(),
                    new Zend_Filter_StringTrim(),
                    new Zend_Filter_StripNewlines(),
                    new Zend_Filter_StripTags()
                ))
                ->addValidators(array(
                    new Zend_Validate_NotEmpty()
                ));
        
//    $email = $this->createElement('text', 'email');
//    $email->setLabel('E-mail:')
//            ->setRequired(TRUE)
//            ->setAttrib('size', 30)
//            ->addFilters(array(
//                new Zend_Filter_StringToLower(),
//                new Zend_Filter_StringTrim(),
//                new Zend_Filter_StripNewlines(),
//                new Zend_Filter_StripTags()
//            ))
//            ->addValidators(array(
//                new Zend_Validate_EmailAddress(),
//                new Zend_Validate_NotEmpty()
//            ));        
    
        $password = $this->createElement('password', 'password');
        $password->setLabel('Hasło:')
            ->setRequired(TRUE)
            ->setAttrib('size', 30)
            ->addFilters(array(
                new Zend_Filter_StringToLower(),
                new Zend_Filter_StringTrim(),
                new Zend_Filter_StripNewlines(),
                new Zend_Filter_StripTags()
            ))
            ->addValidators(array(
                new Zend_Validate_NotEmpty()
            ));
    
        $this->addElements(array(
            $username,
            $realname,
            $password,
            array(
                'submit', 'submit', array(
                    'label' => 'zaloguj'
                )
            )
        ));

        // And finally add some CSRF protection
        $this->addElement('hash', 'csrf', array(
            'ignore' => true,
        ));
    }        
        
}

