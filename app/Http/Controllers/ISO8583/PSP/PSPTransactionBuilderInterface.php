<?php

namespace App\Http\Controllers\ISO8583\PSP;

interface PSPTransactionBuilderInterface {
    public function __construct(PSP $PSP);
    public function build();
}
