<?php

namespace App\Imports;

use Maatwebsite\Excel\Concerns\WithMultipleSheets;

class FeesImport implements WithMultipleSheets
{
    public function sheets(): array
    {
        return [
            new FirstFeeSheetImport()
        ];
    }
}
