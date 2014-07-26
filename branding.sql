--
-- Table structure for table `branding`
--

CREATE TABLE IF NOT EXISTS `branding` (
  `id` int(9) NOT NULL AUTO_INCREMENT,
  `host_key` varchar(40) CHARACTER SET utf8 DEFAULT NULL,
  `name` varchar(80) CHARACTER SET utf8 DEFAULT NULL,
  `url_logo_image` varchar(200) CHARACTER SET utf8 DEFAULT NULL,
  `url_home` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `active` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `branding`
--

INSERT INTO `branding` (`id`, `host_key`, `name`, `url_logo_image`, `url_home`, `active`) VALUES
(1, 'YREqTVOyzVMkaSfmANcLBRBYqecjPXsOOWeISTgr', 'Google', 'https://www.google.com/images/srpr/logo11w.png', 'https://www.google.com/', 1),
(2, 'dFutXNmlpHyzkcDvOriePoqvedclWBAZgUseIFqY', 'Small Cakes', 'http://www.smallcakescupcakery.com/wp-content/themes/smallcakes/images/logo.png', 'http://www.smallcakescupcakery.com', 1),
(3, 'ZxdlqpZqHztdQZggCnjvPgUhJJRQsazrxDDNSDeA', 'Kara''s Cupcakes', 'http://www.karascupcakes.com/wp-content/themes/h2ml_karas/img/logo.png', 'http://www.karascupcakes.com', 1),
(4, 'bFSLKwprFMLOaUCodtEfQPMFtspGUdzWIrHtNXKt', 'Gigi''s Cupcakes', 'http://www.gigiscupcakesusa.com/sitefiles/1426/Images/masterart/mainnav/mainnav-gigislogo.png', 'http://www.gigiscupcakesusa.com', 1);

















