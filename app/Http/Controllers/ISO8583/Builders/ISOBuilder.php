<?php

namespace App\Http\Controllers\ISO8583\Builders;

use App\Http\Controllers\ISO8583\BufferMessageDecorator\BufferMessageDecorator;

class ISOBuilder extends ISOBuilderAbstract {

    public function setField12(BufferMessageDecorator $buffer){
        return date('His'); // TODO - check
    }

    public function setField13(BufferMessageDecorator $buffer){
        return date('md'); // TODO - check
    }

}
