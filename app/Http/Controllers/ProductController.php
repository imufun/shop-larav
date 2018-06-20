<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    public function addProdcut(Request $request)
    {
        if($request->isMethod('post')){
            $data = $request->all();
        }

        return view('admin.dashboard.product.add-product.init');
    
    }
}
