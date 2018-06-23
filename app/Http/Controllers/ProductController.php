<?php

namespace App\Http\Controllers;

use App\Categories;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    public function addProdcut(Request $request)
    {
//        if($request->isMethod('post')){
//            $data = $request->all();
//        }
        // $category = new Categories();
        $category = Categories::where(['parent_id' => 0])->get();
        $category_dropdown = "<option selected disabled>Slected</option>";
        foreach ($category as $cat) {
            $category_dropdown .= "<option value='" . $cat->category_id . "'>$cat->category_name</option>";
            $sub_category = Categories::where(['parent_id' => $cat->category_id])->get();
            foreach ($sub_category as $sub_cat) {
                $category_dropdown .= "<option value='" . $sub_cat->category_id . "'>&nbsp;--&nbsp;".$sub_cat->category_name."</option>";
            }
//            echo "</pre>";
//            print_r($category_dropdown);
//            die();
        }

        return view('admin.dashboard.product.add-product.init')->with(compact('category_dropdown'));

    }
}
