<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Post;

class Category extends Model
{
    use HasFactory;
    protected $fillable = [
        'name','description'
    ];
   public function posts(){
    return $this->hasMany(Post::class);

   }
}
