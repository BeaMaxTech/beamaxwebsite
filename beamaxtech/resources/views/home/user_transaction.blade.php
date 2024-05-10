@include('home.layouts.header')





<div class="row layout-top-spacing">

<div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
        <div class="widget-content widget-content-area br-6">
            <div id="zero-config_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4">
                <div class="dt--top-section">
                    <div class="w-title">
                        <h3>{{$user->fullname}} Payments</h3>
                    </div>
                    <div class="row">
                        
                        <div class="col-12 col-sm-6 d-flex justify-content-sm-end justify-content-center mt-sm-0 mt-3">
                            <div id="zero-config_filter" class="dataTables_filter"><label><svg
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="feather feather-search">
                                        <circle cx="11" cy="11" r="8"></circle>
                                        <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                                    </svg><input type="search" class="form-control" placeholder="Search..."
                                        aria-controls="zero-config"></label></div>
                        </div>
                    </div>
                </div>
                <div class="table-responsive">
                    <table id="zero-config" class="table table-striped dataTable" style="width: 100%;" role="grid"
                        aria-describedby="zero-config_info">
                        <thead>
                           
                            <tr role="row">
                                <th class="sorting_asc" tabindex="0" aria-controls="zero-config" rowspan="1" colspan="1"
                                    aria-sort="ascending" aria-label="Name: activate to sort column descending"
                                    style="width: 101px;">amount</th>
                                <th class="sorting" tabindex="0" aria-controls="zero-config" rowspan="1" colspan="1"
                                    aria-label="Position: activate to sort column ascending" style="width: 156px;">
                                    description</th>
                               
                                <th class="sorting" tabindex="0" aria-controls="zero-config" rowspan="1" colspan="1"
                                    aria-label="Age: activate to sort column ascending" style="width: 30px;">status</th>
                               
                                <th class="sorting" tabindex="0" aria-controls="zero-config" rowspan="1" colspan="1"
                                    aria-label="Salary: activate to sort column ascending" style="width: 60px;">Amount paid
                                </th>
                                <th class="sorting" tabindex="0" aria-controls="zero-config" rowspan="1" colspan="1"
                                    aria-label="Salary: activate to sort column ascending" style="width: 60px;">transaction_type
                                </th>
                                <th class="sorting" tabindex="0" aria-controls="zero-config" rowspan="1" colspan="1"
                                    aria-label="Salary: activate to sort column ascending" style="width: 60px;">staff_id
                                </th>
                                <th class="sorting" tabindex="0" aria-controls="zero-config" rowspan="1" colspan="1"
                                    aria-label="Salary: activate to sort column ascending" style="width: 60px;">date_created
                                </th>
                                <th class="no-content sorting" tabindex="0" aria-controls="zero-config" rowspan="1"
                                    colspan="1" aria-label="Actions: activate to sort column ascending"
                                    style="width: 56px;">Actions</th>
                            </tr>
                        </thead>
                        <tbody>

                        @foreach($transactions as $transaction)
                            <tr role="row">
                                <td class="sorting_1">{{$transaction->amount}}</td>
                                <td>{{$transaction->description}}</td>
                               
                                <td>{{$transaction->status}}</td>
                               
                                <td>{{$transaction->type}}</td>
                                <td>{{$transaction->staff_id}}</td>
                                <td>{{$transaction->mode_of_payment}}</td>
                                <td>{{$user->date_created}}</td>
                                <td>
                                    <div class="btn-group mb-4 mr-2" role="group">
                                        <button id="btndefault" type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Action <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg></button>
                                        <div class="dropdown-menu" aria-labelledby="btndefault">
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="flaticon-home-fill-1 mr-1"></i>Action</a>
                                            <a href="/user_details/{{$user->id}}" class="dropdown-item"><i class="flaticon-gear-fill mr-1"></i>View Details</a>
                                            <a href="/admin/single_user/{{$user->id}}" class="dropdown-item"><i class="flaticon-gear-fill mr-1"></i>Edit</a>
                                            <!-- <a href="javascript:void(0);" class="dropdown-item"><i class="flaticon-gear-fill mr-1"></i>View more details</a> -->
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="flaticon-bell-fill-2 mr-1"></i>Delete</a>
                                            <!-- <a href="javascript:void(0);" class="dropdown-item"><i class="flaticon-dots mr-1"></i>Separated link</a> -->
                                        </div>
                                    </div>
                                </td>
                            </tr>

                            @endforeach
                            
                            
                            
                            
                        </tbody>
                        <tfoot>
                            <tr>
                                <th rowspan="1" colspan="1">Name</th>
                                <th rowspan="1" colspan="1">courses</th>
                                
                                <th rowspan="1" colspan="1">courses</th>
                               
                                <th rowspan="1" colspan="1">courses</th>
                                <th rowspan="1" colspan="1"></th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
                
            </div>
        </div>
    </div>






</div>



@include('home.layouts.footer')