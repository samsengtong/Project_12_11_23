<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Category;

class Post extends Model
{
    use HasFactory;
    
    protected $casts = [
        "share"=>"boolean",
    ];
    
    protected $fillable = [
        'title','sub_content','content','user_id', 'category_id','views','share','image'
    ];
    /*
    public function user(){
        return $this->belongsTo(User::class);

    }
    */
    public function category(){
        return $this->belongsTo(Category::class);
    }
    public function comments(){
        return $this->hasMany(Comment::class);
    }

}
