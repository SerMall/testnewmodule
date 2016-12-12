<?php

class Smdotcom_Newblock_Model_Newblock extends Mage_Core_Model_Abstract
{

    public function _construct()
    {
        parent::_construct();
        $this->_init('newblock/newblock');
    }

    public function lastText()
    {
        return $this->getCollection()->getLastItem()->getText();
    }

    public function lastId()
    {
        return $this->getCollection()->getLastItem()->getId();
    }

}