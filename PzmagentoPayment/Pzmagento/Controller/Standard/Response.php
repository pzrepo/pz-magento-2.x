<?php

namespace PzmagentoPayment\Pzmagento\Controller\Standard;

class Response extends \PzmagentoPayment\Pzmagento\Controller\PzmagentoAbstract {

    public function execute() {
        $returnUrl = $this->getCheckoutHelper()->getUrl('checkout');

        try {
            $paymentMethod = $this->getPaymentMethod();
            $params = $this->getRequest()->getParams();
            if ($params['status']=='Y'){
                $this->messageManager->addSuccessMessage(__('Payment Success.'));
                $returnUrl = $this->getCheckoutHelper()->getUrl('checkout/onepage/success');
                $order = $this->getOrder();
                $payment = $order->getPayment();
                $paymentMethod->postProcessingSuccess($order, $payment, $params);
                
            } 
           else if ($params['status']=='P'){
                $this->messageManager->addErrorMessage(__('Payment Pending.'));
                $returnUrl = $this->getCheckoutHelper()->getUrl('checkout/onepage/success');
                $order = $this->getOrder();
                $payment = $order->getPayment();
                $paymentMethod->postProcessingSuccess($order, $payment, $params);
                
            }
            else {
                $this->messageManager->addErrorMessage(__('Payment failed. Please try again or choose a different payment method'));
                $returnUrl = $this->getCheckoutHelper()->getUrl('checkout/onepage/failure');
                $order = $this->getOrder();
                $payment = $order->getPayment();
                $paymentMethod->postProcessingFail($order, $payment, $params);
            }
        } catch (\Magento\Framework\Exception\LocalizedException $e) {
            $this->messageManager->addExceptionMessage($e, $e->getMessage());
        } catch (\Exception $e) {
            $this->messageManager->addExceptionMessage($e, __('We can\'t place the order.'));
        }

        $this->getResponse()->setRedirect($returnUrl);
    }

}
