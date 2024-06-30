<?php

namespace App\Http\Controllers\ISO8583\BufferMessageDecorator;

interface BufferMessageDecoratorInterface {
    public function process(): string;
}
