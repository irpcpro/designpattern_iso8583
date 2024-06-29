<?php

namespace App\Http\Controllers\ISO8583\PSP\PSP1;

use App\Http\Controllers\ISO8583\BufferMessageDecorator\BufferMessageDecorator;
use App\Http\Controllers\ISO8583\Builders\ISOBuilder;
use App\Http\Controllers\ISO8583\PSP\PSP;
use App\Http\Controllers\ISO8583\PSP\PSPISOBuilderInterface;

class PSP1ISOBuilder extends ISOBuilder implements PSPISOBuilderInterface {
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

    public function getBitMap(BufferMessageDecorator $buffer){
        return join($this->BitMap);
    }

    public function setHeader(BufferMessageDecorator $buffer){
        // TODO: Implement setHeader() method.
    }

    public function setMAC(BufferMessageDecorator $buffer){
        // TODO: Implement setMAC() method.
    }
}
