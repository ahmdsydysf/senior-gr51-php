<?php

namespace App\Http\Controllers\Products;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function ourMain()
    {
        echo "iam from usercontroller method ourMain";
    }

    public function index()
    {
        $productData  = ['data' => [1,2,3] , 'name' => 'ahmed' , 'age' => 20];
        $categoryData  = 101;
        $catid = 'bm';
        $id = 10;
        // return view('webData.products.all_products')->with('data', $data);

        // return view('webData.products.all_products', compact('data', 'code', 'car'));

        return view('webData.products.all_products', get_defined_vars());
    }

    public function edit($id, $catid = null)
    {
        $productData = 'sadialsdj';
        $categoryData = 'sadjasskldasd';
        // echo "my product id is :: $id and my category = $catid";
        // return view('webData.products.all_products')
        //         ->with(['prodId' => $id , 'catId' => $catid , ]);
        return view('webData.products.all_products', compact('id', 'catid', 'productData', 'categoryData'));
    }

    public function create()
    {
        return view('webData.products.add_products');
    }
    public function store()
    {
        //  خزن في الدتا بيز
        //

        // return redirect('product/all');
        return redirect()->route('pro.all');

    }
}
