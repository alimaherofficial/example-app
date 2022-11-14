<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    // protected $fillable = ['title','category_id','slug','expert','body'];
    protected $guarded = [];

    protected $with = ['category','auther'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    public function auther()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
