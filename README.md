# Paymentz magento 2x installation guide
#### Installation and Configuration

1.) Upload app/code/PaymentzPayment (all files and folder) at you server end.

2.) Run below command:
   - php bin/magento module:enable PaymentzPayment_Paymentz
   - php bin/magento setup:upgrade
   
3.) Goto Admin->Store->Configuration->Sales->Payment Method->Paymentz
   - fill details here and save them.

4.) Goto Admin->System->Cache Management
   - Clear all Cache.

#### Now you can collect payment via Paymentz.

