<?php

namespace App\Http\Controllers\ISO8583\PSP\PSP1\Transactions;

use App\Http\Controllers\ISO8583\PSP\PSP;
use App\Http\Controllers\ISO8583\PSP\PSP1\PSP1ISOBuilder;
use App\Http\Controllers\ISO8583\PSP\PSPTransactionBuilderInterface;

class PSP1PurchaseBuilder extends PSP1ISOBuilder implements PSPTransactionBuilderInterface {

    public function __construct(PSP $PSP){
        parent::__construct($PSP, [2,3,4,5,6,7]);
    }

    public function build(){
        // TODO: Implement build() method.
    }

}
