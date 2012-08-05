-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Czas wygenerowania: 05 Sie 2012, 00:43
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
  `comment` text NOT NULL,
  `created` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `session`
--

CREATE TABLE IF NOT EXISTS `session` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `modified` int(11) NOT NULL,
  `lifetime` int(11) NOT NULL,
  `data` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=23 ;

--
-- Zrzut danych tabeli `session`
--

INSERT INTO `session` (`id`, `modified`, `lifetime`, `data`) VALUES
(7, 1344127073, 864000, 'Zend_Auth|a:1:{s:7:"storage";O:8:"stdClass":4:{s:2:"id";s:1:"1";s:8:"username";s:4:"Ania";s:9:"real_name";s:14:"Ania Poplawska";s:4:"role";s:5:"admin";}}'),
(8, 1344124379, 864000, '__ZF|a:1:{s:32:"Zend_Form_Element_Hash_salt_csrf";a:2:{s:4:"ENNH";i:1;s:3:"ENT";i:1344124679;}}Zend_Form_Element_Hash_salt_csrf|a:1:{s:4:"hash";s:32:"935de05ef4192d4edab6d53b4debceb2";}'),
(9, 1344124622, 864000, '__ZF|a:1:{s:32:"Zend_Form_Element_Hash_salt_csrf";a:2:{s:4:"ENNH";i:1;s:3:"ENT";i:1344124922;}}Zend_Form_Element_Hash_salt_csrf|a:1:{s:4:"hash";s:32:"0f94754168b781ddf7725031cb9440e4";}'),
(10, 1344124634, 864000, ''),
(11, 1344125629, 864000, ''),
(12, 1344125632, 864000, '__ZF|a:1:{s:32:"Zend_Form_Element_Hash_salt_csrf";a:2:{s:4:"ENNH";i:1;s:3:"ENT";i:1344125932;}}Zend_Form_Element_Hash_salt_csrf|a:1:{s:4:"hash";s:32:"c31cd42612af96e297ac4ef7be1bdff3";}'),
(13, 1344125636, 864000, '__ZF|a:1:{s:32:"Zend_Form_Element_Hash_salt_csrf";a:2:{s:4:"ENNH";i:1;s:3:"ENT";i:1344125936;}}Zend_Form_Element_Hash_salt_csrf|a:1:{s:4:"hash";s:32:"b05ba078064229c4ea98f1676e7cc0ad";}'),
(14, 1344125676, 864000, '__ZF|a:1:{s:32:"Zend_Form_Element_Hash_salt_csrf";a:2:{s:4:"ENNH";i:1;s:3:"ENT";i:1344125975;}}Zend_Form_Element_Hash_salt_csrf|a:1:{s:4:"hash";s:32:"8080a171617c321cbeb145a1c204b05f";}'),
(15, 1344125679, 864000, '__ZF|a:1:{s:32:"Zend_Form_Element_Hash_salt_csrf";a:2:{s:4:"ENNH";i:1;s:3:"ENT";i:1344125979;}}Zend_Form_Element_Hash_salt_csrf|a:1:{s:4:"hash";s:32:"56a75d0d6c145eb8f5c436179d772433";}'),
(16, 1344125743, 864000, '__ZF|a:1:{s:32:"Zend_Form_Element_Hash_salt_csrf";a:2:{s:4:"ENNH";i:1;s:3:"ENT";i:1344126043;}}Zend_Form_Element_Hash_salt_csrf|a:1:{s:4:"hash";s:32:"cc80a277e319667adf86081ffe79c3c4";}'),
(17, 1344125750, 864000, ''),
(18, 1344125751, 864000, '__ZF|a:1:{s:32:"Zend_Form_Element_Hash_salt_csrf";a:2:{s:4:"ENNH";i:1;s:3:"ENT";i:1344126051;}}Zend_Form_Element_Hash_salt_csrf|a:1:{s:4:"hash";s:32:"2faf2a26f3142c43670aa8a75aaf0122";}'),
(19, 1344125758, 864000, '__ZF|a:1:{s:32:"Zend_Form_Element_Hash_salt_csrf";a:2:{s:4:"ENNH";i:1;s:3:"ENT";i:1344126058;}}Zend_Form_Element_Hash_salt_csrf|a:1:{s:4:"hash";s:32:"a0342c940e3ed5e7aafda1efe4388459";}'),
(20, 1344126169, 864000, ''),
(21, 1344126170, 864000, '__ZF|a:1:{s:32:"Zend_Form_Element_Hash_salt_csrf";a:2:{s:4:"ENNH";i:1;s:3:"ENT";i:1344126470;}}Zend_Form_Element_Hash_salt_csrf|a:1:{s:4:"hash";s:32:"a20f3a48128efdba1936f197bd0abe7a";}'),
(22, 1344126174, 864000, '__ZF|a:1:{s:32:"Zend_Form_Element_Hash_salt_csrf";a:2:{s:4:"ENNH";i:1;s:3:"ENT";i:1344126474;}}Zend_Form_Element_Hash_salt_csrf|a:1:{s:4:"hash";s:32:"ab244170635695d52c0f9f86eaf27b82";}');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(150) NOT NULL,
  `password` varchar(30) NOT NULL,
  `real_name` varchar(150) NOT NULL,
  `role` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Zrzut danych tabeli `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `real_name`, `role`) VALUES
(1, 'Ania', 'pass', 'Ania Poplawska', 'admin');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
