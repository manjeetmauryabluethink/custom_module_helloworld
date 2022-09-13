<?php
namespace Bluethink\Helloworld\Block;
use Magento\Framework\View\Element\Template;
use Magento\Framework\Controller\Result\JsonFactory;
use Magento\Framework\App\Action\Context;
use Magento\Customer\Model\Session;

class Example  extends Template
{

	protected $_session;
    protected $resultJsonFactory;
    protected $subscriber;

public function __construct(
    \Magento\Framework\View\Element\Template\Context $context,
    \Magento\Newsletter\Model\Subscriber $subscriber,
    JsonFactory $resultJsonFactory,
    Session $session

){
  
    $this->subscriber= $subscriber;
     parent::__construct($context);
     $this->resultJsonFactory = $resultJsonFactory;
     $this->_session = $session;
}


 
    public function isCustomerSubscribe()
    {    
        if($this->_session->isLoggedIn()) {

            $customerSession = $this->_session; 
            $customerId = $customerSession->getCustomer()->getId();
            $status = $this->subscriber->loadByCustomerId((int)$customerId)->isSubscribed();
            
            if($status)
            {
               return true;

            }else{
                return false;

            }
            
        }
        else{
            
            return false;
        }
    }

}