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
                                            aria-label="Name: activate to sort column descending">ID
                                        </th>
                                        <th width="30%" class="sorting" tabindex="0" aria-controls="zero_config" rowspan="1"
                                            colspan="1" style="width: 238.633px;"
                                            aria-label="Position: activate to sort column ascending">Category Name
                                        </th>
                                        <th width="30%" class="sorting" tabindex="0" aria-controls="zero_config" rowspan="1"
                                            colspan="1" style="width: 238.633px;"
                                            aria-label="Position: activate to sort column ascending">Category lavel
                                        </th>
                                        <th width="40%" class="sorting" tabindex="0" aria-controls="zero_config" rowspan="1"
                                            colspan="1" style="width: 106.35px;"
                                            aria-label="Office: activate to sort column ascending">Category Descrition
                                        </th>
                                        <th width="10%" class="sorting" tabindex="0" aria-controls="zero_config" rowspan="1"
                                            colspan="1" style="width: 40.8px;"
                                            aria-label="Age: activate to sort column ascending">Category Slug
                                        </th>
                                        <th width="10%" class="sorting" tabindex="0" aria-controls="zero_config" rowspan="1"
                                            colspan="1" style="width: 89.9667px;"
                                            aria-label="Start date: activate to sort column ascending">Category Status
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
                                            @foreach($categories as $category)
                                                <tr role="row" class="odd">
                                                    <td class="sorting_1">{{ $category->id }}</td>
                                                    <td>{{ $category->category_name }}</td>
                                                    <td>{{ $category->parent_id }}</td>
                                                    <td>{{ $category->category_description }}</td>
                                                    <td>{{ $category->category_slug }}</td>
                                                    <td>{{ $category->category_status }}</td>
                                                    <td>
                                                        <a href="" class="btn btn-success btn-xs">Active</a>
                                                        <a href="{{url('admin/edit-category/'. $category->id )}}" class="btn btn-dark btn-xs">EDIT</a>
                                                        <a href="{{url('admin/delete-category/' . $category->id)}}" class="btn btn-danger btn-xs">Delete</a>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        {{--@endif--}}
                                    </tbody>
                                    <tfoot>
                                    <tr>
                                        <th rowspan="1" colspan="1">Name</th>
                                        <th rowspan="1" colspan="1">Position</th>
                                        <th rowspan="1" colspan="1">Office</th>
                                        <th rowspan="1" colspan="1">Age</th>
                                        <th rowspan="1" colspan="1">Start date</th>
                                    </tr>
                                    </tfoot>
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