<?php

namespace App\Machine;

use App\Machine\PurchasedItem;

/**
 * Class CigaretteMachine
 * @package App\Machine
 */
class CigaretteMachine implements MachineInterface
{
    const ITEM_PRICE = 4.99;

    public function execute(PurchaseTransactionInterface $purchaseTransaction){
        return new PurchasedItem($purchaseTransaction);
    }

}