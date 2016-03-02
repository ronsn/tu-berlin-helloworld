<?php
class Tuberlin_Helloworld_IndexController extends Mage_Core_Controller_Front_Action
{
    public function indexAction()
    {
        $this->loadLayout();
        #echo 'IndexAction ausgeloest...';
        #$testvar = 'DIES IST MEINE TESTVRIABLE';
        $this->renderLayout();
        #die('###########################################');
    }

    public function infoAction()
    {
        print_r( Mage::getVersionInfo() );
    }

    public function redirectedAction()
    {
        echo 'Du wurdest erfolgreich redirected :)';
        echo '<br />';
        echo 'Moechtest du dir die Parameter anzeigen lassen?';
        $url = Mage::getUrl('helloworld/index/getParams/');
        foreach( $this->getRequest()->getParams() as $param => $value )
        {
            $url .= $param . '/' . $value . '/';
        }
        echo '<br />';
        echo '<a href="' . $url . '"> [Anzeigen] </a>.';
        echo '<br />';
        $url = Mage::getUrl('helloworld/foo/redirect');
        echo 'Oder Noch mal redirecten? Dann klicke <a href="' . $url . '">hier</a>.';

        echo '<br />';
        $url = Mage::getUrl('helloworld/foo/redirectWithRandomParams');
        echo 'Oder Noch mal mit zufaelligen Parametern redirecten? Dann klicke <a href="' . $url . '">hier</a>.';
    }

    public function getParamsAction()
    {
        #echo $this->getRequest()->getParam('index');
        #echo $this->getRequest()->getParam('fuck');
        foreach( $this->getRequest()->getParams() as $param => $value )
        {
            echo $param . ' => ' . $value . '<br />';
        }
    }
    public function phpinfoAction()
    {
        phpinfo();
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
