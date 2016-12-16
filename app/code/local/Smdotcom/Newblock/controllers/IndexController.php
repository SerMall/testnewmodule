<?php

class Smdotcom_Newblock_IndexController extends Mage_Core_Controller_Front_Action
{
    public function indexAction()
    {
        $this->loadLayout();
        $this->renderLayout();
    }

    public function saveLastTextAction()
    {
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
            $newtext = "SUCCESS";
            $this->getResponse()->setBody($newtext);
        }
    }

    public function getUpdateAction()
    {
        $this->loadLayout();
        $myBlock =  $this->getLayout()->createBlock('newblock/newblock');
        $myBlock->setTemplate('newblock/newblock_form.phtml');
        $myHtml = $myBlock->toHtml();
        $this->getResponse()->setBody($myHtml);
    }
}