@extends('admin.master')

@section('content')
@section('judul','Form Edit')
@section('b1','Form')

 <!-- Content -->
 <div class="content">
    <!-- Animated -->
    <div class="animated fadeIn">
        <!-- Widgets  -->
        <div class="row">
          
            
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <strong>Basic Form</strong> Elements
                    </div>
                    <div class="card-body card-block">
                  
                        <form action="/update{{$Admin->id}}" method="POST">

                            @csrf
                            @method('PUT')
                            {{-- <div class="row form-group">
                                <div class="col col-md-3"><label class=" form-control-label">Static</label></div>
                                <div class="col-12 col-md-9">
                                    <p class="form-control-static">Username</p>
                                </div>
                            </div> --}}
                            <div class="mb-3">
                                <input type="hidden" class="form-control" id="user_id"  name="user_id" placeholder="name" value=" {{ Auth::user()->id }}">
                            </div>
                            
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Status</label></div>
                                {{-- <div class="col-12 col-md-9"><input type="text" id="status" name="status"  class="form-control" value="{{$Admin->status}}"></div> --}}
                                <div class="col-12 col-md-9"> <select class="form-control" id="status" value="{{$Admin->tanggal}}" name="status" >
                                    <option value="Dalam Proses">{{$Admin->status}}</option>
                                    <option value="Dalam Proses">Dalam Proses</option>
                                    <option value="Proses Selesai">Proses Selesai</option>
                                   
                                  </select></div>
                                
                            </div>             
                            
                     
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary btn-sm">
                                <i class="fa fa-dot-circle-o"></i> Submit
                            </button>
                            <button type="reset" class="btn btn-danger btn-sm">
                                <i class="fa fa-ban"></i> Reset
                            </button>
                        </div>
                    </form>
                    </div>
                </div>
                
                
            </div>
        </div>
        <!-- /Widgets -->
        
    </div>
    <!-- .animated -->
</div>
<!-- /.content -->
        
    
@endsection