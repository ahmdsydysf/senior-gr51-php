<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;

    protected $primaryKey = 'user_id';
    public $incrementing = false;

    protected $fillable = ['user_id','first_name', 'last_name','mobile_num','address'];

    public function User()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
