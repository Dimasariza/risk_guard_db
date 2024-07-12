<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CorrosionLoop extends Model
{
    use HasFactory;
    protected $fillable = [
        "cl_name",
        "cl_fileId",
        "cl_id"
    ];
}
