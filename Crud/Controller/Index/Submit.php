<?php

namespace Mbluethink\Crud\Controller\Index;
use Mbluethink\Crud\Block;
use Magento\Framework\App\Action\Context;
use Magento\Framework\View\Result\PageFactory;
use Mbluethink\Crud\Model\ExtensionFactory;
use Magento\Framework\Controller\ResultFactory;
use Magento\Framework\App\Action\Action;


class Submit extends Action
{
    protected $resultPageFactory;
    protected $extensionFactory;

    public function __construct(
        Context $context,
        PageFactory $resultPageFactory,
        ExtensionFactory $extensionFactory
    )
    {
        
        $this->resultPageFactory = $resultPageFactory;
        $this->extensionFactory = $extensionFactory;
        parent::__construct($context);
    }

    public function execute()
    {
       
            $data = (array)$this->getRequest()->getPost();
            $model = $this->extensionFactory->create();
            $datas = $this->getRequest()->getPost('email');
            $dataemail = $model->load($data['email']);
            $emaildata = ($dataemail->getCollection());
            echo "<pre>";
            print_r($emaildata->getData());
            echo "</pre>";
            die;
           if($datas == $dataemail['email'])
           {
              echo "already exists";
           }
         
        else 
        {
            $model->setData($data)->save();
            $this->messageManager->addSuccessMessage(__("Data Saved Successfully."));
        }
         
        // $resultRedirect = $this->resultFactory->create(ResultFactory::TYPE_REDIRECT);
      
        // $resultRedirect->setUrl($this->_redirect->getRefererUrl());
    
        // return $resultRedirect;

    }
}


