<?php

namespace App\Http\Controllers\ControllerInDeep;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\BranchRequest;
use Illuminate\Support\Facades\Session;

class BranchesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Session::put('ahmedkey', null);

        //Session::push('myname', 'youssif');
        //Session::forget('myname');
        //Session::flush();
        //Session::regenerate();
        // dd($request->session()->get('myname' , function(){

        // }));

        // $nn = $request->session()->pull('ahmedkey');
        // dd($nn, Session::all());
        return view('hamada');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(BranchRequest $request)
    {

        $request->validated();

        $allReturnedData = $request->safe()->except(['username']);

        dd($allReturnedData);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
