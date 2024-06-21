<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pof_rbi_value extends Model
{
    use HasFactory;
    protected $fillable = [
        "rbiValue_id",
        "rbiValue_gffTotal",
        "rbiValue_shellThinning",
        "rbiValue_headThinning",
        "rbiValue_shellExternal",
        "rbiValue_headExternal",
        "rbiValue_shellTotal",
        "rbiValue_headTotal",
        "rbiValue_shellSection",
        "rbiValue_headSection",
    ];
}
