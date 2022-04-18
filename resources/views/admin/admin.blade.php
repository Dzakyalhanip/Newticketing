@extends('admin.master')

@section('content')
@section('judul','Dashboard')


    
       


 <!-- Content -->
 <div class="content">
    <!-- Animated -->
    <div class="animated fadeIn">
        <!-- Widgets  -->
       
        <!-- /Widgets -->
        <div class="row">
            <div class="col-sm-6 col-lg-3">
                <div class="card text-white bg-flat-color-1">
                    <div class="card-body">
                        <div class="card-left pt-1 float-left">
                            <h3 class="mb-0 fw-r">
                                <span class="currency float-left mr-1">$</span>
                                <span class="count">{{$Admin->count('user_id')}}</span>
                            </h3>
                            <p class="text-light mt-1 m-0">Revenue</p>
                        </div><!-- /.card-left -->

                        <div class="card-right float-right text-right">
                            <i class="icon fade-5 icon-lg pe-7s-cart"></i>
                        </div><!-- /.card-right -->

                    </div>

                </div>
            </div>
            <!--/.col-->

            <div class="col-sm-6 col-lg-3">
                <div class="card text-white bg-flat-color-6">
                    <div class="card-body">
                        <div class="card-left pt-1 float-left">
                            <h3 class="mb-0 fw-r">
                                <span class="count float-left">85</span>
                                <span>%</span>
                            </h3>
                            <p class="text-light mt-1 m-0">Dummy text here</p>
                        </div><!-- /.card-left -->

                        <div class="card-right float-right text-right">
                            <div id="flotBar1" class="flotBar1"></div>
                        </div><!-- /.card-right -->

                    </div>

                </div>
            </div>
            <!--/.col-->

            <div class="col-sm-6 col-lg-3">
                <div class="card text-white bg-flat-color-3">
                    <div class="card-body">
                        <div class="card-left pt-1 float-left">
                            <h3 class="mb-0 fw-r">
                                <span class="count">{{$Admin->count('id')}}</span>
                            </h3>
                            <p class="text-light mt-1 m-0">Total clients</p>
                        </div><!-- /.card-left -->

                        <div class="card-right float-right text-right">
                            <i class="icon fade-5 icon-lg pe-7s-users"></i>
                        </div><!-- /.card-right -->

                    </div>

                </div>
            </div>
            <!--/.col-->

            <div class="col-sm-6 col-lg-3">
                <div class="card text-white bg-flat-color-2">
                    <div class="card-body">
                        <div class="card-left pt-1 float-left">
                            <h3 class="mb-0 fw-r">
                                <span class="count">{{$Admin->count('id')}}</span>
                            </h3>
                            <p class="text-light mt-1 m-0">New users</p>
                        </div><!-- /.card-left -->

                        <div class="card-right float-right text-right">
                            <div id="flotLine1" class="flotLine1"></div>
                        </div><!-- /.card-right -->

                    </div>

                </div>
            </div>
            <!--/.col-->



            

            

            




            
        </div><!-- .row -->
    </div>
    <!-- .animated -->
</div>
<!-- /.content -->
        
    
@endsection