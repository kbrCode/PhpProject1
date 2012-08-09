<?php

class Application_Form_SeoManagement extends Zend_Form
{
    public function init()
    {
        /* Form Elements & Other Definitions Here ... */
        $this->setMethod('post');
        
        $id = $this->createElement('hidden', 'id');
        $this->addElement($id);
        
    $jezyk_kod = $this->createElement('text', 'jezyk_kod');
        $jezyk_kod->setLabel('Język:')
                ->setRequired(TRUE)
                ->setAttrib('size', 5)
                ->addFilters(array(
                    new Zend_Filter_StringToLower(),
                    new Zend_Filter_StringTrim(),
                    new Zend_Filter_StripNewlines(),
                    new Zend_Filter_StripTags()
                ))
                ->addValidators(array(
                    new Zend_Validate_NotEmpty()
                ));
        $this->addElement($jezyk_kod);
        
//        $this->addElement('text', 'email', array(
//            'label'      => 'Your email address:',
//            'required'   => true,
//            'filters'    => array('StringTrim'),
//            'validators' => array(
//                'EmailAddress',
//            )
//        ));

        
        
    $seourl = $this->createElement('text', 'seourl');
    $seourl->setLabel('SeoUrl:')
                ->setRequired(TRUE)
                ->setAttrib('size', 250)
                ->addFilters(array(
                    new Zend_Filter_StringToLower(),
                    new Zend_Filter_StringTrim(),
                    new Zend_Filter_StripNewlines(),
                    new Zend_Filter_StripTags()
                ))
                ->addValidators(array(
                    new Zend_Validate_NotEmpty()
                ));
        $this->addElement($seourl);

    $zendurl = $this->createElement('text', 'zendurl');
        $zendurl->setLabel('zendurl:')
                ->setRequired(TRUE)
                ->setAttrib('size', 255)
                ->addFilters(array(
                    new Zend_Filter_StringToLower(),
                    new Zend_Filter_StringTrim(),
                    new Zend_Filter_StripNewlines(),
                    new Zend_Filter_StripTags()
                ))
                ->addValidators(array(
                    new Zend_Validate_NotEmpty()
                ));
        
        $this->addElement($zendurl);        

        
    $anchor = $this->createElement('text', 'anchor');
        $anchor->setLabel('anchor:')
                ->setRequired(TRUE)
                ->setAttrib('size', 255)
                ->addFilters(array(
                    new Zend_Filter_StringToLower(),
                    new Zend_Filter_StringTrim(),
                    new Zend_Filter_StripNewlines(),
                    new Zend_Filter_StripTags()
                ))
                ->addValidators(array(
                    new Zend_Validate_NotEmpty()
                ));
        $this->addElement($anchor);        
        
        $aktywny = new Zend_Form_Element_Select('aktywny');
        $aktywny ->setLabel('Aktywny:')
            ->addMultiOptions(array(
                    'Yes' => 'Tak',
                    'No' => 'Nie' 
                        ));
        $this->addElement($aktywny);        
        
    $router = $this->createElement('text', 'router');
        $router->setLabel('Router:')
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
        
        $this->addElement($router);
        
    $label = $this->createElement('text', 'label');
        $label->setLabel('Label:')
                ->setRequired(TRUE)
                ->setAttrib('size', 50)
                ->addFilters(array(
                    new Zend_Filter_StringToLower(),
                    new Zend_Filter_StringTrim(),
                    new Zend_Filter_StripNewlines(),
                    new Zend_Filter_StripTags()
                ))
                ->addValidators(array(
                    new Zend_Validate_NotEmpty()
                ));
        $this->addElement($label);        
        
        // Add the submit button
        $this->addElement('submit', 'submit', array(
            'ignore'   => true,
            'label'    => 'Save',
        ));
        
    }


}

