<?php

namespace Bluethink\Helloworld\Controller\Page;

class Test extends \Magento\Framework\App\Action\Action
{

	public function execute()
	{
		$textDisplay = new \Magento\Framework\DataObject(array('text' => 'Bluethink'));
		$this->_eventManager->dispatch('bluethink_helloworld_display_text', ['mp_text' => $textDisplay]);
		echo $textDisplay->getText();
      
    

		exit;
	}
}