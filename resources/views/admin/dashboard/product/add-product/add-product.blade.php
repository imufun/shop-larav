<div class="page-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-12 grid-margin">

                @include('admin.common.flush-message')
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title mb-5">Add Product</h4>
                        <form class="" action="{{url('/admin/add-product')}}" method="post" enctype="multipart/form-data">
                            {{csrf_field()}}


                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-5 col-form-label">Product Name</label>
                                        <div class="col-sm-7">
                                            <input type="text" class="form-control" name="product_name" id="productname">
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
                                            <input type="text" class="form-control" name="product_code" id="productCsode">
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-5 col-form-label">Product Color</label>
                                        <div class="col-sm-7">
                                            <input type="text" class="form-control" name="product_color" id="productColor">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-5 col-form-label">Product Description</label>
                                        <div class="col-sm-7">
                                            <textarea type="text" class="form-control" name="product_description" id="productDescription"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-5 col-form-label">Product Quantity</label>
                                        <div class="col-sm-7">
                                            <input type="text" class="form-control" name="product_quantity" id="productQuantity">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-5 col-form-label">Product Price</label>
                                        <div class="col-sm-7">
                                            <input type="text" class="form-control" name="product_price" id="productPrice">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-5 col-form-label">Product Image</label>
                                        <div class="col-sm-7">
                                            <input type="file" class="form-control-file" id="exampleFormControlFile1" name="product_image" id="productImage">
                                        </div>
                                    </div>
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