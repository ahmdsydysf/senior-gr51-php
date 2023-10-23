<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Request;
use App\Http\Requests\StoreCategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //$allData = DB::table('types')->whereNull('deleted_at')->get();
        // $allData = Category::with(['Parent','Children'])->get();
        $allData = Category::with(['Products:name,id,category_id' => ['Users','Category']])->findOrFail(14);
        // $ll = $allData->load('Products.Users');[
        // dd($allData->Products);
        return view('branches.allbranches', compact('allData'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('branches.addbranches');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCategoryRequest $request)
    {

        // $request->validated();

        // $cate = new Category();

        // $cate->name = $request->name ;
        // $cate->code = $request->code ;
        // $cate->description = $request->description ;
        // $cate->status = $request->status ;

        // $cate->save();

        // Category::create([
        //     'name' => $request->name,
        //     'code' => $request->code,
        //     'description' => $request->description,
        //     'status' => $request->status,
        // ]);
        Category::create($request->all());

        // $cate = new Category($request->all());
        // $cate->save();


        return redirect()->route('category.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        Category::withTrashed()->find($id)->restore();

        return redirect()->route('category.index');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        return view('branches.editbranches', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCategoryRequest $request, Category $category)
    {
        // $cat = Category::where('id' , $id)->first();
        // $cat = Category::find($id);
        // $category->name = $request->name ;
        // $category->code = $request->code ;
        // $category->description = $request->description ;
        // $category->status = $request->status ;
        // $category->save();

        $category->update($request->all());

        return redirect()->route('category.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        $category->delete();
        return redirect()->route('category.index');

    }
}
