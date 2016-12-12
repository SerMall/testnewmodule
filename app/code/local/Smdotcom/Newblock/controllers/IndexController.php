<?php

class Smdotcom_Newblock_IndexController extends Mage_Core_Controller_Front_Action
{
    public function indexAction()
    {
        $this->loadLayout();
        $this->renderLayout();
    }

    public function saveLastTextAction()
    { Mage::log($this->getRequest(),null,"my.log",true);
        if(!$this->getRequest()){
            return false;
        }
        $modeltext = Mage::getModel('newblock/newblock');
        $params = $this->getRequest()->getPost();
        $text = $params['text'];
        if(!$text){
            $this->getResponse()->setBody('EMPTY');
        }else{
            $modeltext->load($modeltext->lastId())->setText($text)->save();
            $newtext = "SUCCSESS";
            $this->getResponse()->setBody($newtext);
        }
    }
}