<?php

namespace Bluethink\Helloworld\Controller\Page;

class Data extends \Magento\Framework\App\Action\Action
{

	public function execute()
	{
		
		$textDisplay = new \Magento\Framework\DataObject(array('text' => 'Bluethink'));
		$this->_eventManager->dispatch(' admin_session_user_login_success', ['mp_text' => $textDisplay]);
		echo $textDisplay->getText();
		exit;
	}
}