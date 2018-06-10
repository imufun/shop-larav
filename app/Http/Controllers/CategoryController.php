<?php

namespace App\Http\Controllers;

use App\Categories;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    //
	public function addCategory(Request $request){
	    if ($request->isMethod('post')){
	        $data = $request->all();
	     //   echo "<pre>";
	      //  print_r($data);die();

            $category = new Categories();
            $category-> category_name  = $data['category_name'];
            $category->category_description  = $data['Category_description'];
            $category->category_slug = $data['category_slug'];
            $category->category_picture  = $data['category_image'];
            $category->category_status  = $data['category_status'];
            $category->save();
        }

		return view('admin.dashboard.category.init');
	}
}
