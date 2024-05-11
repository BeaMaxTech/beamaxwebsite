@include('home.layouts.header')

 <!--  BEGIN CUSTOM STYLE FILE  -->
 <link rel="stylesheet" type="text/css" href="{{ asset('plugins/dropify/dropify.min.css') }}">
 <link href="{{ asset('assets/css/users/account-setting.css') }}" rel="stylesheet" type="text/css" />


<div class="row layout-top-spacing">





    <div class="col-lg-12 col-12 layout-spacing">
        <div class="statbox widget box box-shadow">
            <div class="widget-header">
                <div class="row">
                    <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                        <h4>Student Informaion</h4>
                    </div>
                </div>
            </div>
            <div class="widget-content widget-content-area p-3">
                
               @include('layouts.alert');
                <form method="POST" >
                    @csrf

                    <div class="form-row mb-4 d-none">
                        <div class="col-md-6">
                            <input type="text" class="form-control" placeholder="Job title" name="job_title" value="{{ old('job_title') }}">
                        </div>
                        <div class="col-md-6">
                            <input type="number" class="form-control" placeholder="Salary"  name="salary" value="{{ old('salary') }}">
                        </div>
                    </div>

                    <div class="form-row mb-4">
                        <div class="col-md-6">
                            <input type="text" class="form-control" placeholder="Full name" name="fullname" value="{{ old('fullname') }}">
                        </div>
                        <div class="col-md-6">
                            <input type="text" class="form-control" placeholder="Email"  name="email" value="{{ old('email') }}">
                        </div>
                    </div>

                    <div class="form-row mb-4">
                        <div class="col-md-6">
                            <input type="number" class="form-control" placeholder="phone" name="phone" value="{{old('phone') }}">
                        </div>
                        <div class="col-md-6">
                            <input type="text" class="form-control" placeholder="address"  name="address" value="{{ old('address') }}">
                        </div>
                    </div>

                    

                    

                    <div class="form-row mb-4">
                        <div class="col-md-6">
                            <input type="text" class="form-control" placeholder="number of courses" name="num_courses" value="{{ old('num_courses') }}">
                        </div>
                        <div class="col-md-6">
                            <input type="text" class="form-control" placeholder="courses"  name="courses" value="{{ old('courses') }}">
                        </div>
                    </div>
                    <div class="form-row mb-4">
                        <div class="col-md-6">
                            <input type="text" class="form-control" placeholder="guidiance name" name="guidiance_name" value="{{ old('guidiance_name') }}">
                        </div>
                        <div class="col-md-6">
                            <input type="text" class="form-control" placeholder="guidiance phone"  name="guidiance_phone" value="{{ old('guidiance_phone') }}">
                        </div>
                    </div>


                    <div class="form-row mb-4">
                        <div class="col-md-6">
                            <label for="formGroupExampleInput">State</label>
                            <select name="state" class="form-control form-control-lg" required >
                                <option disabled>Select state</option>
                                
                                <option>Enugu</option>
                                <option>Anambra</option>
                                <option>Ebonyi</option>
                                <option>Abia</option>
                                <option>Kogi</option>
                                
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label for="formGroupExampleInput">Gender</label>
                            <select name="gender" class="form-control form-control-lg" required >
                                <option disabled>Select gender</option>
                                
                                <option>Male</option>
                                <option>Female</option>
                                
                            </select>
                        </div>
                    </div>

                    <div class="form-row mb-4">
                        <div class="col-md-6">
                            <input type="text" class="form-control" placeholder="Amount paid" name="amount" value="{{ old('amount') }}">
                        </div>
                        <div class="col-md-6">
                            <input type="text" class="form-control" placeholder="Amount to be paid"  name="total_amount" value="{{ old('total_amount') }}">
                        </div>
                    </div>

                    <div class="form-row mb-4">
                        <div class="col-md-6">
                            <input type="text" class="form-control" placeholder="mode of payment" name="mode_of_payment" value="{{ old('mode_of_payment') }}">
                        </div>
                        <div class="col-md-6">
                            <input type="text" class="form-control" placeholder="How did you hear about us"  name="advert_method" value="{{ old('advert_method') }}">
                        </div>
                    </div>

                    
                   

                    <div class="form-row mb-4">
                        <div class="col-md-6">
                            <input type="password" class="form-control" placeholder="Password" name="password" >
                        </div>
                        <div class="col-md-6">
                            <input type="password" class="form-control" placeholder="confirm password"  name="password_confirmation" >
                        </div>
                    </div>
                    <div class="col-md-12">
                            <input type="number" class="form-control" placeholder="Receipt id"  name="receipt_id" value="{{ old('receipt_id') }}">
                        </div>

                    <input type="submit" name="time" class="btn btn-primary mt-3">
                </form>

               

            </div>
        </div>
    </div>


</div>



@include('home.layouts.footer')