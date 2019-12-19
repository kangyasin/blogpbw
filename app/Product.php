<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\CategoryProduct;
class Product extends Model
{
  protected $fillable = [
    'category_id',
    'name',
    'price',
    'stock',
    'gambar'
  ];

  public function category(){
    return $this->belongsTo(CategoryProduct::class);
  }
}
