<div class="container">
    <div class="row">
        <div class="col-12 grid-margin">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-5">Add Category</h4>
                    <form class="form-sample" action="{{url('/admin/add-category')}}" method="post" name="add_category" id="addCategory">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-5 col-form-label">Category Name</label>
                                    <div class="col-sm-7">
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-5 col-form-label">Category Description</label>
                                    <div class="col-sm-7">
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-5 col-form-label">First Name</label>
                                    <div class="col-sm-7">
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-5 col-form-label">Category Slug</label>
                                    <div class="col-sm-7">
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-5 col-form-label">Category Status</label>
                                    <div class="col-sm-7">
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-5 col-form-label"> </label>
                                    <div class="col-sm-7">
                                        <buutton type="submit" class="btn btn-success  ">Save</buutton>
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