<?php

class Smdotcom_Newblock_Model_Resource_Newblock_Collection extends Mage_Core_Model_Resource_Db_Collection_Abstract
{
    public function _construct()
    {
        //parent::__construct();
        $this->_init('newblock/newblock');
    }
}