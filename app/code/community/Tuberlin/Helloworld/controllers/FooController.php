<?php
class Tuberlin_Helloworld_FooController extends Mage_Core_Controller_Front_Action
{
    public function indexAction()
    {
        echo 'Foo index Action ausgelöst...';
    }
    
    public function addAction()
    {
        echo 'Foo add Action ausgelöst...';
    }
    
    public function deleteAction()
    {
        echo 'Foo delete Action ausgelöst...';
    }

    public function redirectAction()
    {
        // Weiterleiten zu MODULNAME/CONTROLLERNAME/ACTIONNAME
        // Sternchen (*) stehen als Platzhalter für das/den _eigene(n)_ Modul/Controller/Action
        // Achtung! Ein Aufruf von "*/*/*" leitet immer wieder zu dieser
        // Action-Methode. Es kann zur Endlosschleife führen, wenn keine
        // Parameter angegeben und verarbeitet werden
        $this->_redirect('*/index/redirected');
    }

    public function redirectWithRandomParamsAction()
    {
        $urlParams = '';

        for( $i = 0; $i <= rand(2 , 7); $i++ )
        {
            $urlParams .= '/param_' . (string)($i + 1) . '/' . rand(0 , 300);
        }


        $this->_redirect('*/index/redirected' . $urlParams);
    }
}
