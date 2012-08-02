<?php

class Application_Form_Login extends Zend_Form
{
    public function init()
    {
        /* Form Elements & Other Definitions Here ... */
        //$this->setMethod('post');
        
    $email = $this->createElement('text', 'name');
        $email->setLabel('Nazwa użytkownika:')
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
        $haslo = $this->createElement('password', 'password');
        $haslo->setLabel('Hasło:')
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
            $email,
            $haslo,
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

