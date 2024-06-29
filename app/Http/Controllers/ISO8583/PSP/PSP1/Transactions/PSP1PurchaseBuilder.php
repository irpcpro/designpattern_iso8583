<?php

namespace App\Http\Controllers\ISO8583\PSP\PSP1\Transactions;

use App\Http\Controllers\ISO8583\PSP\PSP1\PSP1;
use App\Http\Controllers\ISO8583\PSP\PSP1\PSP1ISOBuilder;
use App\Http\Controllers\ISO8583\PSP\PSPTransactionBuilderInterface;

class PSP1PurchaseBuilder extends PSP1ISOBuilder implements PSPTransactionBuilderInterface {

    public function __construct(){
        parent::__construct(
            new PSP1(),
            [2, 3, 4, 5, 6, 7]
        );
    }

    public function build(){
        // TODO: Implement build() method.
    }

}
