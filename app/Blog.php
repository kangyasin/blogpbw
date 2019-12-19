<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
class Blog extends Model
{
  protected $fillable = [
    'judul',
    'artikel',
    'gambar',
    'user_id'
  ];

  public function user(){
    return $this->belongsTo(User::class);
  }
}
