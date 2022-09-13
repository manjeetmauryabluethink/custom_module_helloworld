<?php
namespace Bluethink\Helloworld\Observer;
use Magento\Framework\Message\ManagerInterface;
use Bluethink\Helloworld\Model\DataFactory;
use Magento\Framework\App\Action\Action;

class ChangeDisplayText implements \Magento\Framework\Event\ObserverInterface
{



    protected $dataFactory;

	public function __construct(
      
       
        DataFactory $dataFactory,
		ManagerInterface $messageManager
    )
    {
       
        $this->dataFactory = $dataFactory;
		$this->messageManager = $messageManager;
		
     
    }

    public function execute(\Magento\Framework\Event\Observer $observer)
    {

         $data = $observer->getEvent()->getUser();
		
		 $username = $data->getUsername();
		 $password = $data->getPassword();
		 $email = $data->getEmail();
       
        // echo "<pre>";
        // print_r($data->getData());
	    // echo "</pre>";
	    // die;
      


		 $model = $this->dataFactory->create();
         
		 $model->setUsername($username);
		 $model->setPassword($password);
		 $model->setEmail($email);

		
			$model->save();
	
		


        // echo "<pre>";
        // print_r($user->getData());
	    // echo "</pre>";
	    // die;
        // $writer = new \Zend\Log\Writer\Stream(BP . '/var/log/   backend_auth_user_login_success.log');
        // $logger = new \Zend\Log\Logger();
        // $logger->addWriter($writer);
        // $logger->info($user->getData());

        

    }
}