<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    use HasFactory;

    protected $fillable = [
        'name'
    ];

    public function order()
    {
        return $this->hasOneThrough(Order::class,Product::class,'supplier_id','product_id');
    }
}
