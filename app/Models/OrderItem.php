<?php

// app/Models/OrderItem.php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderItem extends Model
{
    use HasFactory;

    protected $keyType = 'uuid';

    public $incrementing = false;

    protected $fillable = ['order_id', 'item_id', 'qty', 'price', 'discount', 'total', 'note'];

    public function order()
    {
        return $this->belongsTo(Order::class);
    }

    public function item()
    {
        return $this->belongsTo(Item::class);
    }
}
