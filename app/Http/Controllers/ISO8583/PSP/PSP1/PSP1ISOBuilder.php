<?php

namespace App\Http\Controllers\ISO8583\PSP\PSP1;

use App\Http\Controllers\ISO8583\BufferMessageDecorator\BufferMessageDecorator;
use App\Http\Controllers\ISO8583\Builders\ISOBuilder;
use App\Http\Controllers\ISO8583\PSP\PSP;

class PSP1ISOBuilder extends ISOBuilder {
    private array $BitMap;

    /**
     * @var PSP $PSP
     * @var int[] $BitMap
     */
    public function __construct(PSP $PSP, array $BitMap)
    {
        parent::__construct($PSP);
        $this->BitMap = $BitMap;
    }

    protected function getBitMap(BufferMessageDecorator $buffer){
        return join($this->BitMap);
    }

    protected function setHeader(BufferMessageDecorator $buffer){
        // TODO: Implement setHeader() method.
    }

    protected function setMAC(BufferMessageDecorator $buffer){
        // TODO: Implement setMAC() method.
    }
}
