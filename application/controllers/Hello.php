<?php
/**
 *
 */

class HelloController extends Yaf\Controller_Abstract {

	public function indexAction($name = "Stranger") {

		$model = new UserModel();
		var_dump($model->selectUser());
		exit;
		$this->getView()->assign("content","hello, controller");
		return true;
	}

}
