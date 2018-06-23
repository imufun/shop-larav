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

        return view('admin.dashboard.brand.add-brand.init')->with('flash_message_success', 'Category update successfully');;
    }

    public function viewAllBrands (){

        $brand = Brands::get();
        $brand = json_decode(json_encode($brand));

        return view('admin.dashboard.brand.manage-brand.init')->with(compact('brand'));
    }

//$categories = Categories::get();
//$categories = json_decode(json_encode($categories));
}
