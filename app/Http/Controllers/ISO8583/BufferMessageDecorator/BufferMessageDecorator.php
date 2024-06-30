<?php

namespace App\Http\Controllers\ISO8583\BufferMessageDecorator;

class BufferMessageDecorator implements BufferMessageDecoratorInterface {
    public function __construct(public string $value = ''){}
    public function process(): string {
        return $this->value;
    }
}
