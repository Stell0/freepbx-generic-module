<?php
//Installation script
global $db;

$db->query('CREATE TABLE IF NOT EXISTS `generic_data` (
 `id` int(11) NOT NULL auto_increment,
 `data` varchar(120) default NULL,
 PRIMARY KEY  (`id_dest`)
);');

