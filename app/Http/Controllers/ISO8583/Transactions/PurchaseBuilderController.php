<?php

namespace App\Http\Controllers\ISO8583\Transactions;

use App\Http\Controllers\Controller;
use App\Http\Controllers\ISO8583\PSP\PSP1\Transactions\PSP1PurchaseBuilder;

class PurchaseBuilderController extends Controller {

    public function index(){
        $purchase = new PSP1PurchaseBuilder();
        $purchase->build();


    }

}
