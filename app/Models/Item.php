<?php
// app/Models/Item.php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Support\Str;


class Item extends Model
{
    use HasFactory;

    // Set the primary key type to UUID
    protected $keyType = 'string';

    // Disable auto-incrementing for the primary key
    public $incrementing = false;

    // Fillable attributes
    protected $fillable = ['name', 'price', 'description'];

    // Define boot method to generate UUID for new items
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($item) {
            $item->id = (string) Str::uuid();
        });
    }

    // Define the relationship with OrderItem model
    public function orderItems()
    {
        return $this->hasMany(OrderItem::class);
    }
}