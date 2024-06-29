<?php

namespace App\Http\Controllers\ISO8583\PSP;

abstract class PSP {
    private string $PSPName;
    private string $NII;

    public function __construct($PSPName, $NII) {
        $this->PSPName = $PSPName;
        $this->NII = $NII;
    }

    public function getPSPName(): string {
        return $this->PSPName;
    }

    public function getNII(): string {
        return $this->NII;
    }
}


