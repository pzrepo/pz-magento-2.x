<?php

namespace PzmagentoPayment\Pzmagento\Controller\Standard;

class Cancel extends \PzmagentoPayment\Pzmagento\Controller\PzmagentoAbstract {

    public function execute() {
        $this->getOrder()->cancel()->save();
        
        $this->messageManager->addErrorMessage(__('Your order has been can cancelled'));
        $this->getResponse()->setRedirect(
                $this->getCheckoutHelper()->getUrl('checkout')
        );
    }

}
