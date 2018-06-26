<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Input;
use Session;
use Image;
use App\Categories;
use App\Products;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    public function addProduct(Request $request)
    {
        // $base_url =
        if ($request->isMethod('post')) {
            $data = $request->all();
            $products = new Products();


            if (empty($data['category_id'])) {
                return redirect()->back()->with('flash_message_error', 'Under category missing!');
            }


            $products->product_name = $data['product_name'];
            $products->category_id = $data['category_id'];
            $products->brand_id = $data['brand_id'];
            $products->product_code = $data['product_code'];
            $products->product_color = $data['product_color'];
            if (!empty($data['product_description'])) {
                $products->product_description = $data['product_description'];
            } else {
                $products->product_description = '';
            }

            $products->product_quantity = $data['product_quantity'];
            $products->product_price = $data['product_price'];
            //  $products->product_image = $data['product_image'];

            //  $base_url = "localhost/";
            //upload image
            if ($request->hasFile('product_image')) {
                $image_temp = Input::file('product_image');
                if ($image_temp->isValid()) {
                    $extension = $image_temp->getClientOriginalExtension();
                    $file_name = rand(111, 999) . '.' . $extension;

                    $large_image_path = 'localhost/uploads/images/large/' . $file_name;
                    $medium_image_path = 'localhost/uploads/images/medium/' . $file_name;
                    $small_image_path = 'localhost/uploads/images/small/' . $file_name;

                    Image::make($image_temp)->resize(600, 600)->save($large_image_path);
                    Image::make($image_temp)->resize(300, 300)->save($medium_image_path);
                    Image::make($image_temp)->save($small_image_path);
                    $products->product_image = $file_name;
//                    echo "</pre>";
//                    print_r($test);
                    die();
                }
            }


            $products->save();
            return redirect()->back()->with('flash_message_success', 'Product add successfully');
        }


        $category = Categories::where(['parent_id' => 0])->get();
        $category_dropdown = "<option selected disabled>Slected</option>";
        foreach ($category as $cat) {
            $category_dropdown .= "<option value='" . $cat->category_id . "'>$cat->category_name</option>";
            $sub_category = Categories::where(['parent_id' => $cat->category_id])->get();
//            echo "<pre>";
//            print_r($sub_category);die();
            foreach ($sub_category as $sub_cat) {
                $category_dropdown .= "<option value='" . $sub_cat->category_id . "'>&nbsp;--&nbsp;" . $sub_cat->category_name . "</option>";
            }
//            echo "</pre>";
//            print_r($category_dropdown);
//            die();
        }

        return view('admin.dashboard.product.add-product.init')->with(compact('category_dropdown'));

    }

    public function manageProduct()
    {
        $manageproduct = Products::get();
        $manageproduct = json_decode(json_encode($manageproduct));
        return view('admin.dashboard.product.manage-product.init')->with(compact('manageproduct'));

    }

    public function editProduct(Request $request, $id = null)
    {
        $category = Categories::where(['parent_id' => 0])->get();
        $category_dropdown = "<option selected disabled>Selected</option>";
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
        $editProductById = Products::where(['product_id' => $id])->first();
        return view('admin.dashboard.product.edit-product')->with(compact('editProductById'));
    }


}
