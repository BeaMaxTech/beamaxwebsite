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
                        <h4>Record expenses</h4>
                       
                    </div>
                </div>
            </div>
            <div class="widget-content widget-content-area p-3">
                
               @include('layouts.alert');
                <form method="POST" >
                    @csrf
                   

                    <div class="form-row mb-4">
                        <div class="col-md-6">
                            <input type="number" class="form-control" placeholder="amount" name="amount" value="{{ old('amount') }}">
                        </div>
                        <div class="col-md-6">
                            <input type="text" class="form-control" readonly placeholder="transaction type" value="expenses"  name="type" value="{{ old('type') }}">
                        </div>
                    </div>

                   

                    

                    

                    

                    <div class="form-row mb-4">
                        <div class="col-md-6">
                            <input type="text" class="form-control" placeholder="description" name="description" value="{{ old('description') }}">
                        </div>
                        <div class="col-md-6">
                            <input type="text" class="form-control" placeholder="mode_of_payment"  name="mode_of_payment" value="{{ old('mode_of_payment') }}">
                        </div>
                    </div>

                    <!-- <div class="col-md-12">
                            <input type="text" class="form-control" placeholder="receipt_id"  name="receipt_id" value="{{ old('receipt_id') }}">
                        </div> -->
                   


                   
                       

                  
                    

                    
                   

                    
                    

                    <input type="submit" name="time" class="btn btn-primary mt-3">
                </form>

               

            </div>
        </div>
    </div>


</div>



@include('home.layouts.footer')