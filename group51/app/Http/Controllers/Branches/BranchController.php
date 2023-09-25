<?php

namespace App\Http\Controllers\Branches;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class BranchController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {

        $ser = $request->input('search');

        $allData = DB::table('branches')->when($ser, function ($q, $ser) {
            $q->where('branch_name', 'like', '%' . $ser . '%');
        })->get();

        // DB::table('branches')->updateOrInsert(
        //     ['branch_name' => 'cairo', 'branch_phone' => 78],
        //     ['status' => 0]
        // );
        //DB::table('users')->increment('votes', 1, ['name' => 'John']);
        //DB::table('branches')->decrement('status', 9, ['branch_name' => 'cairo2']);
        // DB::table('branches')->upsert(
        //     [
        //         ['branch_name' => 'cairo', 'branch_phone' => 'San Diego', 'branch_location' => 99 , 'status' => 1],
        //     ],
        //     ['branch_name'],
        //     ['status' , 'branch_location']
        // );

        // DB::table('branches')->where('branch_name', 'cairo')->ddRawSql();

        DB::statement("drop table ba");
        $dataCount = DB::table('branches')->count();
        return view('branches.allbranches', compact('allData', 'dataCount'));
        //$allData = DB::table('branches')->select('id', 'branch_name', 'branch_location', 'branch_phone')->get();
        // $allData = DB::table('branches')->pluck('branch_name', 'branch_phone');
        // $allData = DB::table('branches')->select('branch_name', 'branch_phone')->distinct()->get();
        // $allData = DB::table('branches')->where('branch_name', 'giza')->exists();
        // $query = DB::table('branches')->select('branch_name');

        //$allBranchPhones = $query->addSelect('branch_phone')->dd();
        // $allBranchPhones2 = $query->where('branch_name', 'cairo')->get();
        // $allData = DB::table('branches')
        //                 ->selectRaw('status + ? as price_with_tax , branch_name', [10.0825])->get();
        // $allData = DB::table('branches')
        //     ->select(DB::raw('count(*) as branch_count, branch_name'))->groupBy('branch_name')->get();


        // dd($allData);
        // $allData = DB::table('branches')->find(11);
        // $allData = DB::table('branches')->where('status', '0')->value('branch_phone');
        // $allData = DB::table('branches')->where('branch_name', 'Cairo')->value('branch_phone');
        // $allData = DB::table('branches')->get(['id', 'branch_name', 'branch_location', 'branch_phone']);
        // $allData = DB::table('branches')->where('branch_name', '=', 'cairo')->first();

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
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
