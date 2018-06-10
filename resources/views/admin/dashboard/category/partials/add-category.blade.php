<div class="page-wrapper">
    <div class="container">
    <div class="row">
        <div class="col-12 grid-margin">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-5">Add Category</h4>
                    <form class="form-sample" action="{{url('/admin/add-category')}}" method="post" name="add_category" id="addCategory">
                        {{csrf_field()}}
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-5 col-form-label">Parent Category</label>
                                    <div class="col-sm-7">
                                        <label class="mr-sm-2" for="inlineFormCustomSelect">Select status</label>
                                        <select class="custom-select mr-sm-2" id="inlineFormCustomSelect" name="parent_id">
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
                                    <label class="col-sm-5 col-form-label">Category Name</label>
                                    <div class="col-sm-7">
                                        <input type="text" class="form-control" name="category_name" id="categoryName">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-5 col-form-label">Category Description</label>
                                    <div class="col-sm-7">
                                        <textarea type="text" class="form-control" name="Category_description" id="descrption"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-5 col-form-label">Category Slug</label>
                                    <div class="col-sm-7">
                                        <input type="text" class="form-control" name="category_slug">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-5 col-form-label">Category Image</label>
                                    <div class="col-sm-7">
                                            <input type="file" class="form-control-file" id="exampleFormControlFile1" name="category_image" id="categoryImage">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-5 col-form-label">Category Status</label>
                                    <div class="col-sm-7">
                                        <label class="mr-sm-2" for="inlineFormCustomSelect">Select status</label>
                                        <select class="custom-select mr-sm-2" id="inlineFormCustomSelect" name="category_status">
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