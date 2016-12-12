<?php
class Smdotcom_Newblock_Block_Newblock extends Mage_Core_Block_Template
{
    public function getLastText()
    {
        return Mage::getModel('newblock/newblock')->lastText();
    }

}
