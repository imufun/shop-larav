@extends('admin.default')
@section('home_content')


    <div class="page-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-12 grid-margin">

                @include('admin.common.flush-message')
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title mb-5">Edit Product</h4>
                        <form class="" action="{{url('/admin/edit-product/' . $editProductById->product_id)}}" method="post">
                            {{csrf_field()}}


                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-5 col-form-label">Product Name</label>
                                        <div class="col-sm-7">
                                            <input type="text" class="form-control" name="product_name" id="productname" value="{{$editProductById->product_name}}">
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-5 col-form-label"> Category lavel</label>
                                        <div class="col-sm-7">
                                            <label class="mr-sm-2" for="inlineFormCustomSelect">Select status</label>
                                            <select name="category_id" class="select2 form-control custom-select" style="width: 100%; height:36px;" id="inlineFormCustomSelect" >

                                                <?php echo $category_dropdown; ?>

                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>



                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-5 col-form-label">Brand</label>
                                        <div class="col-sm-7">
                                            <label class="mr-sm-2" for="inlineFormCustomSelect">Select status</label>
                                            <select name="brand_id" class="select2 form-control custom-select" style="width: 100%; height:36px;" id="inlineFormCustomSelect" >

                                                <?php

                                                $all_category = DB::table('brands')
                                                    ->where('status',1)
                                                    ->get();

                                                foreach ($all_category as $cat_brand) {
                                                    ?>

                                                    <option value="{{$cat_brand->brand_id}}">{{$cat_brand->brand_name}}</option>

                                               <?php } ?>


                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-5 col-form-label">Product Code</label>
                                        <div class="col-sm-7">
                                            <input type="text" class="form-control" name="product_code" id="productCsode" value="{{$editProductById->product_code}}">
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-5 col-form-label">Product Color</label>
                                        <div class="col-sm-7">
                                            <input type="text" class="form-control" name="product_color" id="productColor" value="{{$editProductById->product_color}}">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-5 col-form-label">Product Description</label>
                                        <div class="col-sm-7">
                                            <textarea type="text" class="form-control" name="product_description" id="productDescription">{{$editProductById->product_description}}</textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-5 col-form-label">Product Quantity</label>
                                        <div class="col-sm-7">
                                            <input type="text" class="form-control" name="product_quantity" id="productQuantity" value="{{$editProductById->product_quantity}}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-5 col-form-label">Product Price</label>
                                        <div class="col-sm-7">
                                            <input type="text" class="form-control" name="product_price" id="productPrice" value="{{$editProductById->product_price}}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-5 col-form-label">Product Image</label>
                                        <div class="col-sm-7">
                                            <input type="file" class="form-control-file" id="exampleFormControlFile1" name="product_image" id="productImage" >
                                            <input type="hidden" name="current_image" value="{{$editProductById->product_image}}">
                                            @if(!empty($editProductById->product_image))
                                                <img  src="{{asset('uploads/images/small/' . $editProductById->product_image)}}" alt="" width="50px">|
                                                <a href="{{url('admin/delete-product-image/' . $editProductById->product_id)}}">Delete</a>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">

                                </div>
                           </div>
                           <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-5 col-form-label"> </label>
                                        <div class="col-sm-7">
                                            <button type="submit" class="btn btn-success  ">Save</button>
                                        </div>
                                    </div>
                                </div>
                           </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection