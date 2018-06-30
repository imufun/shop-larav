<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Input;
use Session;
use Image;
use App\Categories;
use App\ProductsAttributes;
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


            if (empty($data['product_name']) ||
                empty($data['category_id']) ||
                empty($data['brand_id']) ||
                empty($data['product_code']) ||
                empty($data['product_color']) ||
                empty($data['product_quantity']) ||
                empty($data['product_quantity']) ||
                empty($data['product_price'])) {
                return redirect()->back()->with('flash_message_error', 'Missing  Field!');
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

                    $large_image_path = 'uploads/images/large/' . $file_name;
                    $medium_image_path = 'uploads/images/medium/' . $file_name;
                    $small_image_path = 'uploads/images/small/' . $file_name;

                    Image::make($image_temp)->resize(600, 600)->save($large_image_path);
                    Image::make($image_temp)->resize(300, 300)->save($medium_image_path);
                    Image::make($image_temp)->save($small_image_path);
                    $products->product_image = $file_name;
//                    echo "</pre>";
//                    print_r($test);
                    //  die();
                }
            }


            $products->save();
            return redirect('/admin/manage-product')->with('flash_message_success', 'Product add successfully');
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

    /*---------
     * Product Eidt
     * @param: id
     * return product id
     * --------*/


    public function editProduct(Request $request, $id = null)
    {

        if ($request->isMethod('post')) {

            $data = $request->all();

            //upload image
            if ($request->hasFile('product_image')) {
                $image_temp = Input::file('product_image');
                if ($image_temp->isValid()) {
                    $extension = $image_temp->getClientOriginalExtension();
                    $file_name = rand(111, 999) . '.' . $extension;

                    $large_image_path = 'uploads/images/large/' . $file_name;
                    $medium_image_path = 'uploads/images/medium/' . $file_name;
                    $small_image_path = 'uploads/images/small/' . $file_name;

                    Image::make($image_temp)->resize(600, 600)->save($large_image_path);
                    Image::make($image_temp)->resize(300, 300)->save($medium_image_path);
                    Image::make($image_temp)->save($small_image_path);

//                    echo "</pre>";
//                    print_r($test);
                    //   die();
                }
            } else if (!empty($file_name = $data['current_image'])) {
                $file_name = $data['current_image'];
                //  print_r($file_name);die();
            } else {
                $file_name = '';
            }
            if (empty($data['product_description'])) {
                $data['product_description'] = '';
            }
            if (empty($data['category_id'])) {
                return redirect()->back()->with('flash_message_error', 'Under category missing!');
            }
//              echo "<pre>";
//            print_r($data);die();
            Products::where(['product_id' => $id])->update([
                'product_name' => $data['product_name'],
                'category_id' => $data['category_id'],
                'brand_id' => $data['brand_id'],
                'product_code' => $data['product_code'],
                'product_color' => $data['product_color'],
                'product_description' => $data['product_description'],
                'product_quantity' => $data['product_quantity'],
                'product_price' => $data['product_price'],
                'product_image' => $file_name
            ]);

            return redirect('/admin/manage-product')->with('flash_message_success', 'Product update successfully');

        }

        $editProductById = Products::where(['product_id' => $id])->first();

        $category = Categories::where(['parent_id' => 0])->get();
        $category_dropdown = "<option value='' selected disabled>Selected</option>";
        foreach ($category as $cat) {
            if ($cat->parent_id == $editProductById->category_id) {
                $selected = "Selected";
            } else {
                $selected = '';
            }

            $category_dropdown .= "<option value='" . $cat->category_id . "' " . $selected . ">$cat->category_name</option>";
            $sub_category = Categories::where(['parent_id' => $cat->category_id])->get();
            foreach ($sub_category as $sub_cat) {
                if ($sub_cat->parent_id == $editProductById->category_id) {
                    $selected = "Selected";
                } else {
                    $selected = '';
                }
                $category_dropdown .= "<option value='" . $sub_cat->category_id . "' " . $selected . ">&nbsp;--&nbsp;" . $sub_cat->category_name . "</option>";
            }
//            echo "</pre>";
//            print_r($category_dropdown);
//            die();
        }
        return view('admin.dashboard.product.edit-product')->with(compact('editProductById', 'category_dropdown'));
    }


    /*---------
    * Product delete
    * @param: id
    * return product id
    * --------*/

    public function deleteProductImage($id = null)
    {
        Products::where(['product_id' => $id])->update(['product_image' => '']);
//        echo "<pre>";
//        print_r($f);
//        die();
        return redirect()->back()->with('flash_message_success', 'Product Image Delete successfully');
    }


    /*
     * Delete product
     * */
    public function deleteProduct($id = null)
    {
        Products::where(['product_id' => $id])->delete();
        return redirect()->back()->with('flash_message_success', 'Product  Delete successfully');
    }

    // Add Attributes
    public function addAttributes(Request $request, $id = null)
    {
         $productsAttributesAdd = Products::with('attributes')->where(['product_id' => $id])->first();
         $productsAttributesAdd = json_decode(json_encode($productsAttributesAdd));
        //echo "<pre>";
      //  print_r($productsAttributesAdd);
      //  die;
        if ($request->isMethod('post')) {
            $data = $request->all();
            echo "<pre>";
            print_r($data);
            die();
            foreach ($data['sku'] as $key => $val) {
                if (!empty($val)) {
                    $attributes = new ProductsAttributes();
                    $attributes->product_id = $id;
                    $attributes->sku = $val;
                    $attributes->size = $data['size'][$key];
                    $attributes->price = $data['price'][$key];
                    $attributes->stock = $data['stock'][$key];
                    $attributes->save();
                }
            }
            return redirect('/admin/add-attributes/' . $id)->with('flash_message_success', 'Product  Attribute successfully');
        }
        return view('admin.dashboard.product.add-attribute.init')->with(compact('productsAttributesAdd'));

    }
}
