<?php
namespace Bluethink\Helloworld\Block\Adminhtml;

class Post extends \Magento\Backend\Block\Widget\Grid\Container
{

	protected function _construct()
	{
		$this->_controller = 'adminhtml_post';
		$this->_blockGroup = 'Bluethink_Helloworld';
		$this->_headerText = __('Admin');
		$this->_addButtonLabel = __('Create New Post');
		parent::_construct();
	}
}