<?php

namespace Bluethink\Helloworld\Controller\Page;
use Magento\Framework\Controller\Result\JsonFactory;
use Magento\Framework\App\Action\Context;
use Magento\Customer\Model\Session;
use Magento\Framework\App\Action\Action;
class Displayjson extends \Magento\Framework\App\Action\Action
{
    protected $_session;
    protected $resultJsonFactory;
    protected $subscriber;

public function __construct(
    \Magento\Framework\App\Action\Context $context,
    \Magento\Newsletter\Model\Subscriber $subscriber,
    JsonFactory $resultJsonFactory,
    Session $session
  

){
  
    $this->subscriber= $subscriber;
     parent::__construct($context);
     $this->resultJsonFactory = $resultJsonFactory;
     $this->_session = $session;
    

}
 
    public function execute()
    {
        // if($this->_session->isLoggedIn()) {
            //  $customerSession = $this->_session; 
            //  $customerId = $customerSession->getCustomer()->getId();
            //  print_r($customerId);
            //  die;
        //     // $customerData = $customerSession->getCustomer()->getEmail();
        //     // print_r(get_class_methods($this->subscriber));
        //     // die;
        //     $status = $this->subscriber->loadByCustomerId($customerId)->isSubscribed();
          
        //     if($status)
        //     {
        //        echo "yes subscribed";

        //     }

        //     else{
        //         echo "please subscibe";

        //     }
            
        // }
        // else{
            
             $email = (string)$this->getRequest()->getParam('email');
         
            // print_r(get_class_methods($this->subscriber));die;
            //  $this->subscriber->subscribe($email);
            $subscriberModal  = $this->subscriber->loadByEmail($email);
            
            if($email == $subscriberModal['subscriber_email'])
           {
            $resultJson = $this->resultJsonFactory->create();
            return $resultJson->setData(['json_data' => '<b> Already subscriber.</b>']);  
           }
            
           else
           {
            $this->subscriber->subscribe($email);
            if($this->subscriber->save()){ 
            $resultJson = $this->resultJsonFactory->create();
            return $resultJson->setData(['json_data' => '<b>Thank you for subscriber.</b><br>']);
        }
    }
                // }
    }
}
