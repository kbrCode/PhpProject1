-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Czas wygenerowania: 10 Sie 2012, 07:11
-- Wersja serwera: 5.5.24-log
-- Wersja PHP: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Baza danych: `phpproject1`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `guestbook`
--

CREATE TABLE IF NOT EXISTS `guestbook` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(32) NOT NULL DEFAULT 'noemail@test.com',
  `comment` text,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Zrzut danych tabeli `guestbook`
--

INSERT INTO `guestbook` (`id`, `email`, `comment`, `created`) VALUES
(1, 'ralph.schindler@zend.com', 'Hello! Hope you enjoy this sample zf application!', '2012-08-02 09:38:54'),
(2, 'foo@bar.com', 'Baz baz baz, baz baz Baz baz baz - baz baz baz.', '2012-08-02 09:38:54');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `guestbook_seo`
--

CREATE TABLE IF NOT EXISTS `guestbook_seo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `jezyk_kod` varchar(5) DEFAULT NULL,
  `seourl` varchar(250) DEFAULT NULL,
  `zendurl` varchar(255) NOT NULL,
  `anchor` varchar(255) NOT NULL,
  `aktywny` enum('tak','nie') NOT NULL DEFAULT 'tak',
  `router` varchar(30) NOT NULL DEFAULT 'default',
  `label` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `anchor_seo_jezyk` (`jezyk_kod`,`seourl`,`anchor`),
  KEY `jezyk_kod` (`jezyk_kod`),
  KEY `anchor` (`anchor`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Zrzut danych tabeli `guestbook_seo`
--

INSERT INTO `guestbook_seo` (`id`, `jezyk_kod`, `seourl`, `zendurl`, `anchor`, `aktywny`, `router`, `label`) VALUES
(1, 'ad', 'ad', 'dfc', 'dfdf', '', 'sds', 'sdf'),
(2, 'fd', 'dfd', 'dfd', 'dfdf', '', 'dfdf', 'fdf');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `session`
--

CREATE TABLE IF NOT EXISTS `session` (
  `id` char(32) NOT NULL,
  `modified` int(11) DEFAULT NULL,
  `lifetime` int(11) DEFAULT NULL,
  `data` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Zrzut danych tabeli `session`
--

INSERT INTO `session` (`id`, `modified`, `lifetime`, `data`) VALUES
('08p94uil37kmppu443doe2uvg7', 1344582675, 864000, 'Default|a:1:{s:3:"acl";O:8:"Zend_Acl":6:{s:16:"\0*\0_roleRegistry";O:22:"Zend_Acl_Role_Registry":1:{s:9:"\0*\0_roles";a:7:{s:5:"guest";a:3:{s:8:"instance";O:13:"Zend_Acl_Role":1:{s:10:"\0*\0_roleId";s:5:"guest";}s:7:"parents";a:0:{}s:8:"children";a:2:{s:8:"someUser";O:13:"Zend_Acl_Role":1:{s:10:"\0*\0_roleId";s:8:"someUser";}s:5:"staff";O:13:"Zend_Acl_Role":1:{s:10:"\0*\0_roleId";s:5:"staff";}}}s:6:"member";a:3:{s:8:"instance";O:13:"Zend_Acl_Role":1:{s:10:"\0*\0_roleId";s:6:"member";}s:7:"parents";a:0:{}s:8:"children";a:1:{s:8:"someUser";r:10;}}s:5:"admin";a:3:{s:8:"instance";O:13:"Zend_Acl_Role":1:{s:10:"\0*\0_roleId";s:5:"admin";}s:7:"parents";a:0:{}s:8:"children";a:2:{s:8:"someUser";r:10;s:13:"administrator";O:13:"Zend_Acl_Role":1:{s:10:"\0*\0_roleId";s:13:"administrator";}}}s:8:"someUser";a:3:{s:8:"instance";r:10;s:7:"parents";a:3:{s:5:"guest";r:6;s:6:"member";r:15;s:5:"admin";r:21;}s:8:"children";a:0:{}}s:5:"staff";a:3:{s:8:"instance";r:12;s:7:"parents";a:1:{s:5:"guest";r:6;}s:8:"children";a:1:{s:6:"editor";O:13:"Zend_Acl_Role":1:{s:10:"\0*\0_roleId";s:6:"editor";}}}s:6:"editor";a:3:{s:8:"instance";r:40;s:7:"parents";a:1:{s:5:"staff";r:12;}s:8:"children";a:0:{}}s:13:"administrator";a:3:{s:8:"instance";r:26;s:7:"parents";a:1:{s:5:"admin";r:21;}s:8:"children";a:0:{}}}}s:13:"\0*\0_resources";a:0:{}s:17:"\0*\0_isAllowedRole";r:21;s:21:"\0*\0_isAllowedResource";N;s:22:"\0*\0_isAllowedPrivilege";s:9:"deleteSeo";s:9:"\0*\0_rules";a:2:{s:12:"allResources";a:2:{s:8:"allRoles";a:2:{s:13:"allPrivileges";a:2:{s:4:"type";s:9:"TYPE_DENY";s:6:"assert";N;}s:13:"byPrivilegeId";a:0:{}}s:8:"byRoleId";a:3:{s:5:"guest";a:2:{s:13:"byPrivilegeId";a:1:{s:11:"addGestbook";a:2:{s:4:"type";s:10:"TYPE_ALLOW";s:6:"assert";N;}}s:13:"allPrivileges";a:2:{s:4:"type";N;s:6:"assert";N;}}s:6:"member";a:2:{s:13:"byPrivilegeId";a:3:{s:11:"addGestbook";a:2:{s:4:"type";s:10:"TYPE_ALLOW";s:6:"assert";N;}s:14:"deleteGestbook";a:2:{s:4:"type";s:10:"TYPE_ALLOW";s:6:"assert";N;}s:7:"editSeo";a:2:{s:4:"type";s:10:"TYPE_ALLOW";s:6:"assert";N;}}s:13:"allPrivileges";a:2:{s:4:"type";N;s:6:"assert";N;}}s:5:"admin";a:2:{s:13:"byPrivilegeId";a:0:{}s:13:"allPrivileges";a:2:{s:4:"type";s:10:"TYPE_ALLOW";s:6:"assert";N;}}}}s:12:"byResourceId";a:0:{}}}}Zend_Auth|a:1:{s:7:"storage";O:8:"stdClass":4:{s:2:"id";s:1:"1";s:8:"username";s:4:"Asia";s:9:"real_name";s:10:"Roczkowska";s:4:"role";s:5:"admin";}}'),
('10', 1344124634, 864000, ''),
('11', 1344125629, 864000, ''),
('12', 1344125632, 864000, '__ZF|a:1:{s:32:"Zend_Form_Element_Hash_salt_csrf";a:2:{s:4:"ENNH";i:1;s:3:"ENT";i:1344125932;}}Zend_Form_Element_Hash_salt_csrf|a:1:{s:4:"hash";s:32:"c31cd42612af96e297ac4ef7be1bdff3";}'),
('13', 1344125636, 864000, '__ZF|a:1:{s:32:"Zend_Form_Element_Hash_salt_csrf";a:2:{s:4:"ENNH";i:1;s:3:"ENT";i:1344125936;}}Zend_Form_Element_Hash_salt_csrf|a:1:{s:4:"hash";s:32:"b05ba078064229c4ea98f1676e7cc0ad";}'),
('14', 1344125676, 864000, '__ZF|a:1:{s:32:"Zend_Form_Element_Hash_salt_csrf";a:2:{s:4:"ENNH";i:1;s:3:"ENT";i:1344125975;}}Zend_Form_Element_Hash_salt_csrf|a:1:{s:4:"hash";s:32:"8080a171617c321cbeb145a1c204b05f";}'),
('15', 1344125679, 864000, '__ZF|a:1:{s:32:"Zend_Form_Element_Hash_salt_csrf";a:2:{s:4:"ENNH";i:1;s:3:"ENT";i:1344125979;}}Zend_Form_Element_Hash_salt_csrf|a:1:{s:4:"hash";s:32:"56a75d0d6c145eb8f5c436179d772433";}'),
('16', 1344125743, 864000, '__ZF|a:1:{s:32:"Zend_Form_Element_Hash_salt_csrf";a:2:{s:4:"ENNH";i:1;s:3:"ENT";i:1344126043;}}Zend_Form_Element_Hash_salt_csrf|a:1:{s:4:"hash";s:32:"cc80a277e319667adf86081ffe79c3c4";}'),
('17', 1344125750, 864000, ''),
('18', 1344125751, 864000, '__ZF|a:1:{s:32:"Zend_Form_Element_Hash_salt_csrf";a:2:{s:4:"ENNH";i:1;s:3:"ENT";i:1344126051;}}Zend_Form_Element_Hash_salt_csrf|a:1:{s:4:"hash";s:32:"2faf2a26f3142c43670aa8a75aaf0122";}'),
('19', 1344125758, 864000, '__ZF|a:1:{s:32:"Zend_Form_Element_Hash_salt_csrf";a:2:{s:4:"ENNH";i:1;s:3:"ENT";i:1344126058;}}Zend_Form_Element_Hash_salt_csrf|a:1:{s:4:"hash";s:32:"a0342c940e3ed5e7aafda1efe4388459";}'),
('20', 1344126169, 864000, ''),
('21', 1344126170, 864000, '__ZF|a:1:{s:32:"Zend_Form_Element_Hash_salt_csrf";a:2:{s:4:"ENNH";i:1;s:3:"ENT";i:1344126470;}}Zend_Form_Element_Hash_salt_csrf|a:1:{s:4:"hash";s:32:"a20f3a48128efdba1936f197bd0abe7a";}'),
('22', 1344126174, 864000, '__ZF|a:1:{s:32:"Zend_Form_Element_Hash_salt_csrf";a:2:{s:4:"ENNH";i:1;s:3:"ENT";i:1344126474;}}Zend_Form_Element_Hash_salt_csrf|a:1:{s:4:"hash";s:32:"ab244170635695d52c0f9f86eaf27b82";}'),
('7', 1344127073, 864000, 'Zend_Auth|a:1:{s:7:"storage";O:8:"stdClass":4:{s:2:"id";s:1:"1";s:8:"username";s:4:"Ania";s:9:"real_name";s:14:"Ania Poplawska";s:4:"role";s:5:"admin";}}'),
('8', 1344124379, 864000, '__ZF|a:1:{s:32:"Zend_Form_Element_Hash_salt_csrf";a:2:{s:4:"ENNH";i:1;s:3:"ENT";i:1344124679;}}Zend_Form_Element_Hash_salt_csrf|a:1:{s:4:"hash";s:32:"935de05ef4192d4edab6d53b4debceb2";}'),
('9', 1344124622, 864000, '__ZF|a:1:{s:32:"Zend_Form_Element_Hash_salt_csrf";a:2:{s:4:"ENNH";i:1;s:3:"ENT";i:1344124922;}}Zend_Form_Element_Hash_salt_csrf|a:1:{s:4:"hash";s:32:"0f94754168b781ddf7725031cb9440e4";}'),
('aussbo4g8spi1h250qa34hn084', 1343999738, 864000, 'Zend_Auth|a:1:{s:7:"storage";O:8:"stdClass":4:{s:2:"id";s:1:"1";s:8:"username";s:4:"Asia";s:9:"real_name";s:10:"Roczkowska";s:4:"role";s:5:"admin";}}');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL,
  `real_name` varchar(150) NOT NULL,
  `password` varchar(32) NOT NULL,
  `role` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Zrzut danych tabeli `users`
--

INSERT INTO `users` (`id`, `username`, `real_name`, `password`, `role`) VALUES
(1, 'Asia', 'Roczkowska', 'pass', 'admin'),
(2, 'Jan', 'jan', 'pass1', 'member');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
