<?php

namespace Wind\PreviousCap\Controller\Customer;
class Index extends \Magento\Framework\App\Action\Action
{

    /**
     * Display recently viewed products in customer account
     */

    public function execute()
    {
        $this->_view->loadLayout();

        $this->_view->getPage()->getConfig()->getTitle()->set(__('Recently viewed products'));
        $this->_view->renderLayout();
    }

}