<?php

namespace App\Http\Controllers\ISO8583\PSP\PSP1\Transactions;

interface PSPTransactionBuilderInterface {
    public function build(): string;
}
