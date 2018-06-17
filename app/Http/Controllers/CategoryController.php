<?php

namespace App\Http\Controllers;

use App\Categories;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    //
    public function addCategory(Request $request)
    {
        if ($request->isMethod('post')) {
            $data = $request->all();
            //   echo "<pre>";
            //  print_r($data);die();

            $category = new Categories();
            $category->parent_id = $data['parent_id'];
            $category->category_name = $data['category_name'];
            $category->category_description = $data['Category_description'];
            $category->category_slug = $data['category_slug'];
            $category->category_picture = $data['category_image'];
            $category->category_status = $data['category_status'];
            $category->save();
        }

        return view('admin.dashboard.category.init');
    }


    public function manageCategory()
    {
        $categories = Categories::get();
        $categories = json_decode(json_encode($categories));
       // echo "<pre>";
        //print_r($categories);die;
        return view('admin.dashboard.category.manage-category.init')->with(compact('categories'));
    }


    public function categoryEdit()
    {   
        # code...

        
    }
}
