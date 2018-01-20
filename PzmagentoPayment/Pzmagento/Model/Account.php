<?php

namespace PzmagentoPayment\Pzmagento\Model;

class Account implements \Magento\Framework\Option\ArrayInterface {

    const ACC_BIZ = 'pzmagentobiz';
    const ACC_MONEY = 'pzmagentomoney';

    /**
     * Possible environment types
     * 
     * @return array
     */
    public function toOptionArray() {
        return [
            [
                'value' => self::ACC_BIZ,
                'label' => 'PzmagentoBiz',
            ],
            [
                'value' => self::ACC_MONEY,
                'label' => 'PzmagentoMoney'
            ]
        ];
    }

}
