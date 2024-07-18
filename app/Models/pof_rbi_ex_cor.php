<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pof_rbi_ex_cor extends Model
{
    use HasFactory;
    protected $fillable = [
        "rbiExCor_id",
        "rbiExCor_componentId",
        "rbiExCor_equationDesign",
        "rbiExCor_interface",
        "rbiExCor_tMinMM",
        "rbiExCor_tMinInch",
    ];
}
