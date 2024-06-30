<?php

namespace App\Http\Controllers\ISO8583\PSP\PSP1;

use App\Http\Controllers\ISO8583\PSP\PSP;

class PSP1 extends PSP {

    public function __construct(){
        parent::__construct('psp1', '18');
    }

}
