<?php

namespace App\Http\Controllers\ISO8583\PSP;

interface PSPTransactionBuilderInterface {
    public function __construct();
    public function build();
}
