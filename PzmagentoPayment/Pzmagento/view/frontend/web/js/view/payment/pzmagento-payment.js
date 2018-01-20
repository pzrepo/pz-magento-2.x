define([
    'uiComponent',
    'Magento_Checkout/js/model/payment/renderer-list'
],function(Component,renderList){
    'use strict';
    renderList.push({
        type : 'pzmagento',
        component : 'PzmagentoPayment_Pzmagento/js/view/payment/method-renderer/pzmagento-method'
    });

    return Component.extend({});
})
