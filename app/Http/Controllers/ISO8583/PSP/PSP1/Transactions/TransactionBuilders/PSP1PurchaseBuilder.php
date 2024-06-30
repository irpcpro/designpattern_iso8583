<?php

namespace App\Http\Controllers\ISO8583\PSP\PSP1\Transactions\TransactionBuilders;

use App\Http\Controllers\ISO8583\BufferMessageDecorator\BufferMessageDecorator;
use App\Http\Controllers\ISO8583\PSP\PSP1\Fields\FieldsBuilders\PSP1Field12Builder;
use App\Http\Controllers\ISO8583\PSP\PSP1\Fields\FieldsBuilders\PSP1Field13Builder;
use App\Http\Controllers\ISO8583\PSP\PSP1\Transactions\PSPTransactionBuilderInterface;

class PSP1PurchaseBuilder implements PSPTransactionBuilderInterface {

    public function build(): string {
        $buffer = new BufferMessageDecorator();

        $buffer = new PSP1Field12Builder($buffer);
        $buffer = new PSP1Field13Builder($buffer);

        return $buffer->process();
    }

}
