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
}
