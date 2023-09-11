<?php

namespace App\Http\Controllers;

use App\Events\OrderISDone;
use Illuminate\Http\Request;

class eventTestController extends Controller
{
    public function index()
    {
        $user = [
            'name' => 'ahmed sayed' ,
            'age'  => 20 ,
            'address' => 'egypt , cairo'
        ];

        event(new OrderISDone($user));
        OrderISDone::dispatch($user);
    }
}
