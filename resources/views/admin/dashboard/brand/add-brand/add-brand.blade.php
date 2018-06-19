<div class="page-wrapper">
    <div class="container">
    <div class="row">
        <div class="col-12 grid-margin">
            <div class="card">
            @include('admin.common.flush-message')
                <div class="card-body">
                    <h4 class="card-title mb-5">Add Brand</h4>
                    <form class="form-sample" action="{{url('/admin/add-brand')}}" method="post" name="add_brand" id="addbrand">
                        {{csrf_field()}}

  

                       <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-5 col-form-label">Brand Name</label>
                                    <div class="col-sm-7">
                                        <input type="text" class="form-control" name="brand_name" id="brandName">
                                    </div>
                                </div>
                            </div>
                        </div>
  


                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-5 col-form-label">Brand Slug</label>
                                    <div class="col-sm-7">
                                   <input type="text" class="form-control" name="brand_slug">
                                    </div>
                                </div>
                            </div>
                        </div>
 
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-5 col-form-label">Brand Status</label>
                                    <div class="col-sm-7">
                                        <label class="mr-sm-2" for="inlineFormCustomSelect">Select status</label>
                                        <select class="custom-select mr-sm-2" id="inlineFormCustomSelect" name="brand_status">
                                            <option selected>Choose...</option>
                                            <option value="1">Published</option>
                                            <option value="0">Unpublished</option>
                                        </select>
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