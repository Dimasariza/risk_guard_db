<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CorrosionLoopGroup extends Model
{
    use HasFactory;
    protected $fillable = [
        "clGroup_name",
        "clGroup_clId",
        "clGroup_componentId",
        "clGroup_id"
    ];

    public function corrosionLoop() {
        return $this->hasManyThrough(Component::class, 'comp_equipmentId', 'eq_id');
    }
}
