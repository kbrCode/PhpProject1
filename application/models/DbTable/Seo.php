<?php

//CREATE TABLE IF NOT EXISTS `guestbook_seo` (
//  `id` int(11) NOT NULL AUTO_INCREMENT,
//  `jezyk_kod` varchar(5) NOT NULL,
//  `seourl` varchar(250) NOT NULL,
//  `zendurl` varchar(255) NOT NULL,
//  `anchor` varchar(255) NOT NULL,
//  `aktywny` enum('tak','nie') NOT NULL DEFAULT 'tak',
//  `router` varchar(30) NOT NULL DEFAULT 'default',
//  `label` varchar(50) DEFAULT NULL,
//  PRIMARY KEY (`id`),
//  UNIQUE KEY `anchor_seo_jezyk` (`jezyk_kod`,`seourl`,`anchor`),
//  KEY `jezyk_kod` (`jezyk_kod`),
//  KEY `anchor` (`anchor`)
//) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=400 ;


class Application_Model_DbTable_Seo extends Zend_Db_Table_Abstract
{
    protected $_name = 'guestbook_seo';
}

