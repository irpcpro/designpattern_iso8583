<?php

namespace App\Http\Controllers\ISO8583\PSP\PSP1\Fields;

use App\Http\Controllers\ISO8583\BufferMessageDecorator\BufferMessageDecoratorInterface;
use App\Http\Controllers\ISO8583\PSP\PSP;
use App\Http\Controllers\ISO8583\PSP\PSP1\PSP1;

abstract class PSP1Fields implements BufferMessageDecoratorInterface {

    private PSP $PSP;
    public BufferMessageDecoratorInterface $buffer;

    public function __construct(BufferMessageDecoratorInterface $buffer){
        $this->PSP = new PSP1();
        $this->buffer = $buffer;
    }

    public function getPSP(): PSP {
        return $this->PSP;
    }

}
