<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;
    public $timestamps = true;
    public $primarykey = 'item_idItem';
    protected $fillable = ['item_idItem', 'item_tagOfItem', 'item_nameOfItem'];
}
