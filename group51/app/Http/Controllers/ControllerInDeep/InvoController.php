<?php

namespace App\Http\Controllers\ControllerInDeep;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class InvoController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        return "this is from invokable method";
    }
}
