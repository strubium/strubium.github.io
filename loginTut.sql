CREATE TABLE IF NOT EXISTS `users` ( `id` int(11) NOT NULL auto_increment, `username` varchar(32) NOT NULL, `password` varchar(32) NOT NULL, 
`online` int(20) NOT NULL default ‘0', `email` varchar(100) NOT NULL, `active` int(1) NOT NULL default ‘0', `rtime` int(20) NOT NULL default ‘0', PRIMARY KEY (`id`) ) ENGINE=MyISAM DEFAULT
CHARSET=utf8;

INSERT INTO `users` (`id`, `username`, `password`, `online`, `email`, `active`, `rtime`) VALUES (1, ‘testing’, ‘testing’, 0, 
‘fake@noemail.co.uk’, 0, 0);
