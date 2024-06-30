<?php

namespace App\Http\Controllers\ISO8583\PSP\PSP1\Fields\FieldsBuilders;

use App\Http\Controllers\ISO8583\PSP\PSP1\Fields\PSP1Fields;

class PSP1Field12Builder extends PSP1Fields {

    public function process(): string {
        return $this->buffer->process() . 'Hi_12';
    }

}
