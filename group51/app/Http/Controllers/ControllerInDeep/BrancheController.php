<?php

namespace App\Http\Controllers\ControllerInDeep;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\View;
use App\Http\Controllers\Products\ProductController;

class BrancheController extends Controller
{
    public function index()
    {
        // get all data from DB
        // // return response(view('branches.allbranches'))->cookie('name', 'ahmed', 1);
        // //return view('branches.allbranches');
        // //return redirect()->away('https://www.youtube.com/');
        // // return redirect(view())->with('flag' , 'you are ahmed');
        // // return response()->view('branches.allbranches' , [])
        // // return response()->download('test.txt');

        // $mobile = 1245;

        // return view('branches.allbranches')
        // ->with('mobile', $mobile);

    }
    public function create()
    {
        $password = 6666;
        // get all data from DB
        // return view('branches.addbranches');
        // return redirect('branches/all')
        // ->with('password', $password);
        return response()->file('PHP_Start.pdf');
    }
    public function store(Request $request)
    {
        // get all data from DB
        // $branch_name = $request->input('bName', 'brancheDefault');
        // $branch_tele = $request->post('bTele');
        // $branch_addr = $request->bAddress;
        // //dd($request->input('bName.1'));
        // // dd($request->has(['course' , 'bName']), $request->hasAny(['course' , 'bName']));
        // // $coursat = $request->whenHas('course', function ($val) {
        // //     echo $val;
        // // }, function () {return 'HTML';});
        // // dd($coursat);
        // // dd($request->filled('bName'));
        // // $request->whenFilled('bName',function($value){
        // //     return $value ;
        // // } , function(){
        // //     return
        // // })
        // // dd($request->missing('course'));
        // $request->merge(['level' => 'expert']);
        // dd($request->all());
        // dd($branch_name, $branch_tele, $branch_addr);
        // get all branches table

        return redirect('branches/all');

    }
    public function edit($id)
    {
        // select * from branches where id = $id
        //return response()->file('PHP_Start.pdf', ['Content-Type' => 'application/pdf']);
        if(View::exists('branches.editbranches2')) {

            return view('branches.editbranches', compact('id'));

        } else {
            abort(404);
        }
    }
    public function update($id, Request $request)
    {
        // select * from branches where id = $id
        return redirect()->route('branch.all');
    }

    public function show($id)
    {
        return view('branches.deletebranches', compact('id'));
    }
    public function destroy($id)
    {
        //return redirect()->route('branch.all');
        return to_route('branch.all');
        //return redirect()->action([ProductController::class , 'index'] , );

    }

}
