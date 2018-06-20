<?php

namespace App\Http\Controllers;

use App\Categories;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    //ADD Category
    public function addCategory(Request $request)
    {
        if ($request->isMethod('post')) {
            $data = $request->all();
            //   echo "<pre>";
            //  print_r($data);die();

            $category = new Categories();
           // $categories->id = $data['id'];
          //  print_r($categories->id);die;
          
           $category->category_name = $data['category_name'];
            $category->parent_id  = $data['parent_id'];
            $category->category_description = $data['Category_description'];
            $category->category_slug = $data['category_slug'];
            $category->category_picture = $data['category_image'];
            $category->category_status = $data['category_status'];
            $category->save();
            return redirect('/admin/manage-category')->with('flash_message_success', 'Category Add successfully');
        }

        $lavel =  Categories::where(['parent_id'=> 0])->get();
 
        // echo "<pre>";
        // print_r($lavel);die();
        return view('admin.dashboard.category.init')->with(compact('lavel'));
    }

    // CATEGORY: view category
    public function manageCategory()
    {
        $categories = Categories::get();
        $categories = json_decode(json_encode($categories));
    //    echo "<pre>";
    //     print_r($categories);die;
        return view('admin.dashboard.category.manage-category.init')->with(compact('categories'));
    }

    // CATEGORY: Edit function
    public function categoryEdit(Request $request, $id = null)
    {    
        //echo "test"; die();

        if($request->isMethod('post')){
            $data = $request->all();
          //  print_r($data);die();
            Categories::where(['category_id'=> $id])->update([
                    'category_name'=>$data['category_name'],
                    'Category_description'=>$data['Category_description'],
                    'category_slug'=>$data['category_slug']
                ]);
                return redirect('/admin/manage-category')->with('flash_message_success', 'Category update successfully');
        }
        $categoriesEditId = Categories::where(['category_id'=>$id])->first();
        $lavel =  Categories::where(['parent_id'=> 0])->get();
        return view ('admin.dashboard.category.edit-category')->with(compact('categoriesEditId', 'lavel'));
    }

    // Delete function CATEGORY
    public function categoryIdDelete($id = null)
    {
        if(!empty($id)){
            Categories::where(['category_id'=>$id])->delete();
            return redirect()->back()->with('flash_message_success', 'Category delete successfully');
        }
    }
}
