<?php
class IndexController extends Yaf_Controller_Abstract {
   /* default action */
   public function indexAction() {
	   var_dump($this->request);
       $this->_view->word = "hello world";
       //or
       // $this->getView()->word = "hello world";
   }
}