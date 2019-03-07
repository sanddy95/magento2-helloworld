<?php

namespace Sandeep\HelloWorld\Controller\Index;

use Magento\Framework\App\Action\Action;

class Index extends Action{

    protected $resultPageFactory;

    public function __construct(
        \Magento\Framework\App\Action\Context $context,
        \Magento\Framework\View\Result\PageFactory $resultPageFactory
    ){
        parent::__construct($context);
        $this->resultPageFactory = $resultPageFactory;
    }

    public function execute()
    {
        $this->_view->loadLayout();
        $resultPage = $this->resultPageFactory->create();
        return $resultPage;
    }
}

