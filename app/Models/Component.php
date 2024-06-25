<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Component extends Model
{
    use HasFactory;
    public $timestamps = true;
    protected $table = 'component';
    protected $fillable = [
        'comp_id',
        'comp_tagOfComponent',
        'comp_nameOfComponent',
        'comp_componentType',
        'comp_equipmentId',
        'comp_userId'
    ];
}
