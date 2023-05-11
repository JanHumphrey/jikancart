<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
  protected $fillable = [
    'name',
    'description',
    'price',
    'image',
    'rating',
  ];

  // Define relationship with OrderItem model
  public function orderItems()
  {
    return $this->hasMany(OrderItem::class);
  }
  use HasFactory;
}
