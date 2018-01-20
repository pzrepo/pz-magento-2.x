define(
    [
        'Magento_Checkout/js/view/payment/default',
        'PzmagentoPayment_Pzmagento/js/action/set-payment-method',
    ],
    function(Component,setPaymentMethod){
    'use strict';

    return Component.extend({
        defaults:{
            'template':'PzmagentoPayment_Pzmagento/payment/pzmagento'
        },
        redirectAfterPlaceOrder: false,
        
        afterPlaceOrder: function () {
            setPaymentMethod();    
        }

    });
});
