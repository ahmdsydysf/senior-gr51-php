<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use HasFactory ;
    use SoftDeletes;

    protected $fillable = [
        'name' , 'code' , 'description' , 'status'
    ];

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
