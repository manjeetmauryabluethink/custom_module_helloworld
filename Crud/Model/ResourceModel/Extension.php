<?php
namespace Mbluethink\Crud\Model\ResourceModel;
 
use Magento\Framework\Model\ResourceModel\Db\AbstractDb;
class Extension extends AbstractDb
{
    protected function _construct()
    {
       
        $data = $this->_init('bluethink_form_crud', 'user_id');

        
    }
}