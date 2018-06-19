<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Brands;
class BrandController extends Controller
{
    //
    public function addBrand(Request $request)
    {
        # code...
        if($request->isMethod('post')){
            $data = $request->all();
            $brand = new Brands();

            $brand->brand_name = $data['brand_name'];
            $brand->brand_slug = $data['brand_slug'];
            $brand->status     = $data['brand_status'];
            $brand->save();
        }

        return view('admin.dashboard.brand.add-brand.init');
    }
}
