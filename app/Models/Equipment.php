<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Equipment extends Model
{
    use HasFactory;
    public $timestamps = true;
    protected $fillable = [
        'eq_idEquipment',
        'eq_tagOfEquipment',
        'eq_nameOfEquipment',
        'eq_equipmentType',
        'eq_itemId'
    ];
}
