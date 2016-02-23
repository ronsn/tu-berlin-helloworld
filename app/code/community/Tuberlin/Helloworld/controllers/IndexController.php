<?php
class Tuberlin_Helloworld_IndexController extends Mage_Core_Controller_Front_Action
{
    public function indexAction()
    {
        echo 'IndexAction ausgeloest...';
        #die('###########################################');
    }

    public function infoAction()
    {
        print_r( Mage::getVersionInfo() );
    }

    public function getdesignAction()
    {
        echo '<pre>';
        print_r(Mage::getDesign());
        echo '</pre>';
    }

    public function getRootAction()
    {
        echo '<pre>';
        print_r(Mage::getRoot());
        echo '</pre>';
    }

    public function getEventsAction()
    {
        echo '<pre>';
        print_r(Mage::getEvents());
        echo '</pre>';
    }

    public function getModuleDirAction()
    {
        echo '<pre>';
        print_r(Mage::getModuleDir("array", "Tuberlin_Helloworld"));
        echo '</pre>';
    }
}
