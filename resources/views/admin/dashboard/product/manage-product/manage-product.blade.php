<div class="page-wrapper">
    <div class="container">

        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Basic Datatable</h5>
                <div class="table-responsive">
                    <div id="zero_config_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4">
                        <div class="row">
                            <div class="col-sm-12 col-md-6">
                                <div class="dataTables_length" id="zero_config_length"><label>Show <select
                                                name="zero_config_length" aria-controls="zero_config"
                                                class="form-control form-control-sm">
                                            <option value="10">10</option>
                                            <option value="25">25</option>
                                            <option value="50">50</option>
                                            <option value="100">100</option>
                                        </select> entries</label></div>
                            </div>
                            <div class="col-sm-12 col-md-6">
                                <div id="zero_config_filter" class="dataTables_filter"><label>Search:<input
                                                class="form-control form-control-sm" placeholder=""
                                                aria-controls="zero_config" type="search"></label></div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <table id="zero_config" class="table table-striped table-bordered dataTable" role="grid"
                                       aria-describedby="zero_config_info">
                                    <thead>
                                    <tr role="row">
                                        <th width="10%" class="sorting_asc" tabindex="0" aria-controls="zero_config"   style="width: 146.15px;" aria-sort="ascending"
                                            aria-label="Name: activate to sort column descending">Product ID
                                        </th>
                                        <th width="30%" class="sorting" tabindex="0" aria-controls="zero_config" rowspan="1"
                                            colspan="1" style="width: 200.633px;"
                                            aria-label="Position: activate to sort column ascending">Product Name
                                        </th>
                                        <th width="30%" class="sorting" tabindex="0" aria-controls="zero_config" rowspan="1"
                                            colspan="1" style="width: 50.633px;"
                                            aria-label="Position: activate to sort column ascending">Category id
                                        </th>
                                        <th width="40%" class="sorting" tabindex="0" aria-controls="zero_config" rowspan="1"
                                            colspan="1" style="width: 50.35px;"
                                            aria-label="Office: activate to sort column ascending">Brand id
                                        </th>
                                        <th width="10%" class="sorting" tabindex="0" aria-controls="zero_config" rowspan="1"
                                            colspan="1" style="width: 40.8px;"
                                            aria-label="Age: activate to sort column ascending">Product Code
                                        </th>
                                        <th width="10%" class="sorting" tabindex="0" aria-controls="zero_config" rowspan="1"
                                            colspan="1" style="width: 89.9667px;"
                                            aria-label="Start date: activate to sort column ascending">Product color
                                        </th>
                                        <th width="10%" class="sorting" tabindex="0" aria-controls="zero_config" rowspan="1"
                                            colspan="1" style="width: 89.9667px;"
                                            aria-label="Start date: activate to sort column ascending">Product Price
                                        </th>
                                        <th width="10%" class="sorting" tabindex="0" aria-controls="zero_config" rowspan="1"
                                            colspan="1" style="width: 89.9667px;"
                                            aria-label="Start date: activate to sort column ascending">Product Image
                                        </th>
                                        <th width="10%" class="sorting" tabindex="0" aria-controls="zero_config" rowspan="1"
                                            colspan="1" style="width: 89.9667px;"
                                            aria-label="Start date: activate to sort column ascending">Action
                                        </th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    {{--if (is_array($variable)) {--}}

                                    {{--foreach ($variable as $item) {--}}
                                    {{--//do something--}}
                                    {{--}--}}
                                    {{--}--}}

                                    {{--@if(is_array($categories) || is_object($categories))--}}
                                    @foreach($manageproduct as $products)
                                        <tr role="row" class="odd">
                                            <td class="sorting_1">{{ $products->product_id }}</td>
                                            <td>{{ $products->product_name }}</td>
                                            <td>{{ $products->category_id }}</td>
                                            <td>{{ $products->brand_id }}</td>
                                             <td>{{ $products->product_code }}</td>
                                            <td>{{ $products->product_color }}</td>
                                            <td>{{ $products->product_price }}</td>
                                            <td><img src="{{asset('/uploads/images/small/' . $products->product_image) }}" alt="{{ $products->product_name }}" width="50px"></td>
                                            <td>
                                                <a href="" class="btn btn-success btn-xs">Active</a>
                                                <a href="{{url('admin/edit-product/'. $products->product_id )}}" class="btn btn-dark btn-xs">EDIT</a>
                                                <button data-toggle="modal" data-target="#{{$products->product_id}}" class="btn btn-danger btn-xs">Delete</button>
                                            </td>
                                        </tr>
                                        <div class="modal fade" id="{{$products->product_id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">{{$products->product_name}}</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        Are you want to delete this product?
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                        <a href="{{url('admin/delete-product/' . $products->product_id)}}" class="btn btn-primary">Delete</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                    {{--@endif--}}
                                    <!-- Modal -->

                                    </tbody>

                                </table>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 col-md-5">
                                <div class="dataTables_info" id="zero_config_info" role="status" aria-live="polite">
                                    Showing 1 to 10 of 57 entries
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-7">
                                <div class="dataTables_paginate paging_simple_numbers" id="zero_config_paginate">
                                    <ul class="pagination">
                                        <li class="paginate_button page-item previous disabled"
                                            id="zero_config_previous"><a href="#" aria-controls="zero_config"
                                                                         data-dt-idx="0" tabindex="0" class="page-link">Previous</a>
                                        </li>
                                        <li class="paginate_button page-item active"><a href="#"
                                                                                        aria-controls="zero_config"
                                                                                        data-dt-idx="1" tabindex="0"
                                                                                        class="page-link">1</a></li>
                                        <li class="paginate_button page-item "><a href="#" aria-controls="zero_config"
                                                                                  data-dt-idx="2" tabindex="0"
                                                                                  class="page-link">2</a></li>
                                        <li class="paginate_button page-item "><a href="#" aria-controls="zero_config"
                                                                                  data-dt-idx="3" tabindex="0"
                                                                                  class="page-link">3</a></li>
                                        <li class="paginate_button page-item "><a href="#" aria-controls="zero_config"
                                                                                  data-dt-idx="4" tabindex="0"
                                                                                  class="page-link">4</a></li>
                                        <li class="paginate_button page-item "><a href="#" aria-controls="zero_config"
                                                                                  data-dt-idx="5" tabindex="0"
                                                                                  class="page-link">5</a></li>
                                        <li class="paginate_button page-item "><a href="#" aria-controls="zero_config"
                                                                                  data-dt-idx="6" tabindex="0"
                                                                                  class="page-link">6</a></li>
                                        <li class="paginate_button page-item next" id="zero_config_next"><a href="#"
                                                                                                            aria-controls="zero_config"
                                                                                                            data-dt-idx="7"
                                                                                                            tabindex="0"
                                                                                                            class="page-link">Next</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>