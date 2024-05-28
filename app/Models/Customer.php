<?php

// app/Models/Customer.php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

 

use Illuminate\Support\Str; // Import the Str class for generating UUIDs

// Your code...

class Customer extends Model
{
    use HasFactory;

    protected $keyType = 'string'; // Change keyType to 'string'

    public $incrementing = false;

    protected $fillable = ['id', 'name', 'address', 'phone']; // Include 'id' in the fillable fields

      protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $model->id = Str::uuid(); // Generate UUID for 'id'
        });
    }

    public function orders()
    {
        return $this->hasMany(Order::class);
    }
}

 