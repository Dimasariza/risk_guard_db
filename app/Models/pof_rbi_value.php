<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pof_rbi_value extends Model
{
    use HasFactory;
    protected $fillable = [
        "rbiValue_id",
        "rbiValue_componentId",
        "rbiValue_FMS",
        "rbiValue_failureFrequency",
    ];
}
