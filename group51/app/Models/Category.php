<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use HasFactory ;

    // protected $with = ['Children','Parent'];
    protected $fillable = [
        'name' , 'code' , 'description' , 'status' , 'parent_category_id'
    ];

    public function Products()
    {
        return $this->hasMany(Product::class);
    }

    public function Children()
    {
        return $this->hasMany(Category::class, 'parent_category_id', 'id');
    }

    public function Parent()
    {
        return $this->belongsTo(Category::class, 'parent_category_id', 'id')
        ->withDefault(['name' => 'Main 2 Category']);
    }

    // protected $guarded = ['password'];
    // mycategories
    //protected $table = 'users';

    // category_id
    // protected $primaryKey = 'category_id';
    // protected $keyType = 'int';
    // public $incrementing = false;
    //'about_us' AboutUs
    // public $timestamps = true ;

    // const CREATED_AT = 'maked_at';
    // const UPDATED_AT = 'modyfy_at';
    // public function getTable()
    // {
    //     return $this->table ?? Str::snake(Str::pluralStudly(Category));
    // }
}
