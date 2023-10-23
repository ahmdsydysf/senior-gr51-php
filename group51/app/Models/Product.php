<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = ['name' , 'category_id'];

    public function Category()
    {
        return $this->belongsTo(Category::class);
    }


    public function Users()
    {
        return $this->belongsToMany(User::class, 'product_users', 'product_id', 'user_id', 'id', 'id');
    }
}
