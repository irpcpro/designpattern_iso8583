<?php

namespace App\Http\Controllers\ISO8583\PSP;

use App\Http\Controllers\ISO8583\BufferMessageDecorator\BufferMessageDecorator;

interface PSPISOBuilderInterface {
    public function getBitMap(BufferMessageDecorator $buffer);
    public function setHeader(BufferMessageDecorator $buffer);
    public function setMAC(BufferMessageDecorator $buffer);
}
