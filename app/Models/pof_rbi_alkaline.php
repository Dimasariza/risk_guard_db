<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pof_rbi_alkaline extends Model
{
    use HasFactory;
    protected $fillable = [
        "rbiAlkaline_id",
        "rbiAlkaline_componentId",
        "rbiAlkaline_ph",
        "rbiAlkaline_co3Consentration",
        "rbiAlkaline_dfacscc",
        "rbiAlkaline_shellPwht",
        "rbiAlkaline_headPwht",
    ];

    protected $casts = [
        "rbiAlkaline_shellPwht" => "boolean",
        "rbiAlkaline_headPwht" => "boolean",
    ];
}
