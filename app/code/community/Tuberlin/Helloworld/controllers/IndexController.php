<?php
class Tuberlin_Helloworld_IndexController extends Mage_Core_Controller_Front_Action
{
    public $myVar = 'TEST';
    public function indexAction()
    {
        $this->loadLayout();
        // create a generic template block
        $block = $this->getLayout()->createBlock('core/template');
        
        // Assign my own template to it
        // (this path is relative to my current theme e.g.: rwd/default/template/...
        $block->setTemplate('helloworld/index.phtml');
        $block->addData(array('key' => 'Valow'));
        echo $block->escapeHtml('<h1>Hello from Controller</h1>');
        
        #echo $block->toHtml();
        $this->renderLayout($block->toHtml());
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
        #print_r(Mage::getDesign());
        echo 'Aktuelles Design-Package (Name): ' . Mage::getDesign()->getPackageName();
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
    
    public function fromAAction()
    {
        $url = Mage::getUrl('helloworld/index/fromB/');
        echo 'You came from: ';
        echo (false !== $this->getRequest()->getHeader('referer')) ? $this->getRequest()->getHeader('referer') . ' ' : 'Unknown URL ';
        echo '<a href="' . $url . '">Go to B</a>';
    }
    
    public function fromBAction()
    {
        $url = Mage::getUrl('helloworld/index/fromA/');
        echo 'You came from: ';
        echo (false !== $this->getRequest()->getHeader('referer')) ? $this->getRequest()->getHeader('referer')  . ' ' : 'Unknown URL ';
        echo '<a href="' . $url . '">Go to A</a>';
    }
}
