<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pof_plan_ex_cor extends Model
{
    use HasFactory;
    protected $fillable = [
        "planExCor_id",
        "planExCor_componentId",
        "planExCor_equationDesign",
        "planExCor_interface",
        "planExCor_tMinMM",
        "planExCor_tMinInch",
    ];
}
