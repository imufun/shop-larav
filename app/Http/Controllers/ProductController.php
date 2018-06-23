<?php

namespace App\Http\Controllers;

use App\Categories;
use App\Products;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    public function addProdcut(Request $request)
    {
        if ($request->isMethod('post')) {
            $data = $request->all();
            $products = new Products();
            $products->product_name = $data['product_name'];
            $products->category_id = $data['category_id'];
            $products->brand_id = $data['brand_id'];
            $products->product_code = $data['product_code'];
            $products->product_color = $data['product_color'];
            $products->product_description = $data['product_description'];
            $products->product_quantity = $data['product_quantity'];
            $products->product_price = $data['product_price'];
            $products->product_image = $data['product_image'];
            $products->save();

        }


        $category = Categories::where(['parent_id' => 0])->get();
        $category_dropdown = "<option selected disabled>Slected</option>";
        foreach ($category as $cat) {
            $category_dropdown .= "<option value='" . $cat->category_id . "'>$cat->category_name</option>";
            $sub_category = Categories::where(['parent_id' => $cat->category_id])->get();
            foreach ($sub_category as $sub_cat) {
                $category_dropdown .= "<option value='" . $sub_cat->category_id . "'>&nbsp;--&nbsp;" . $sub_cat->category_name . "</option>";
            }
//            echo "</pre>";
//            print_r($category_dropdown);
//            die();
        }

        return view('admin.dashboard.product.add-product.init')->with(compact('category_dropdown'));

    }
}
