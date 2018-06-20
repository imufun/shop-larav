@extends('admin.default')
@section('home_content')
  
  <div class="page-wrapper">
    <div class="container">
    <div class="row">
        <div class="col-12 grid-margin">
            <div class="card">
            @include('admin.common.flush-message')
                <div class="card-body">
                    <h4 class="card-title mb-5">Edit Category</h4>
                    <form class="form-sample" action="{{url('/admin/edit-category/' . $categoriesEditId->category_id)}}" method="post" name="add_category" id="addCategory">
                        {{csrf_field()}}
                 

                       <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-5 col-form-label">Category Name</label>
                                    <div class="col-sm-7">
                                        <input type="text" class="form-control" name="category_name" id="categoryName" value="{{ $categoriesEditId->category_name }}">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-5 col-form-label">Category Description</label>
                                    <div class="col-sm-7">
                                        <textarea type="text" class="form-control" name="Category_description" id="descrption" >{{ $categoriesEditId-> category_description}}</textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                       


                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-5 col-form-label">Category Slug</label>
                                    <div class="col-sm-7">
                                        <input type="text" class="form-control" name="category_slug" value="{{$categoriesEditId -> category_slug}}">
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
 
@endsection