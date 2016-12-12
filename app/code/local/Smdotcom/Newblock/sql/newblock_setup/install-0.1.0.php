<?php

$installer = $this;

$installer->startSetup();

$installer->run("

-- DROP TABLE IF EXISTS {$this->getTable('newblock/newblock')};
CREATE TABLE {$this->getTable('newblock/newblock')} (
  `id` int(10) unsigned NOT NULL auto_increment,
  `text` VARCHAR(100) NOT NULL,

  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

    ");

$installer->endSetup();