<?php

use Phalcon\Mvc\Controller;

class IndexController extends BaseController
{

    public function indexAction()
    {
    	$names = Test::findTitles();
    	$this->view->setVar("names", $names);
    	$this->view->strSiteTitle = "Test task";
    }

    public function aboutAction()
    {
        //Do something...
    }
}