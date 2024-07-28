<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Equipment extends Model
{
    use HasFactory;
    public $timestamps = true;
    protected $fillable = [
        'eq_id',
        'eq_tagOfEquipment',
        'eq_nameOfEquipment',
        'eq_equipmentType',
        'eq_itemId',
        'eq_userId'
    ];

    public function equipment() 
    {
        return $this->hasMany(Component::class, 'comp_equipmentId', 'eq_id');
    }

    public function equipmentByUser() 
    {
        return $this->hasMany(Component::class, 'comp_equipmentId', 'eq_id');
    }
}
