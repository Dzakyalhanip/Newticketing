@extends('user.master')

@section('content')
@section('judul','Input Data')
@section('b1','Form Input')
 <!-- Content -->
 <div class="content">
    <!-- Animated -->
    <div class="animated fadeIn">
        <!-- Widgets  -->
        <div class="row">
          
            
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <strong>Input</strong> Form
                    </div>
                    <div class="card-body card-block">
                  
                        <form action="{{route('simpan')}}" method="POST">
                            @csrf
                              <div class="mb-3">
                                <input type="hidden" class="form-control" id="user_id"  name="user_id" placeholder="name" value=" {{ Auth::user()->id }}">
                              </div>

                              {{-- <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Nama</label>
                                <select class="form-select" id="user_id" value="{{old('user_id')}}"  name="user_id" aria-label="Default select example"  >
                                    
                                    <option value="1">{{ Auth::user()->name }}</option>
                                    <option value="2">{{ Auth::user()->id }}</option>
                                    <option value="3">{{ Auth::user()->name }}</option>
                                    <option value="Normal">Normal</option>
                                  </select>
                              </div> --}}
                              <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Subject</label>
                                <input type="text" class="form-control" id="subject"  name="subject" placeholder="Enter a Value" value="{{old('subject')}}"> 
                              </div>
                              <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Priority</label>
                                <select class="form-select" id="priority" value="{{old('priority')}}"  name="priority" aria-label="Default select example"  >
                                    <option selected>Emergency</option>
                                    <option value="High">High</option>
                                    <option value="Low">Low</option>
                                    <option value="Normal">Normal</option>
                                  </select>
                              </div>
                              <div class="mb-3">
                                <label for="exampleFormControlTextarea1" class="form-label">Description</label>
                                <textarea class="form-control" id="description"  name="description" rows="3" value="{{old('description')}}"></textarea>
                              </div>
                             
                              
                              <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label"></label>
                                <input type="hidden" class="form-control" id="status"  name="status" placeholder="Enter a Value" value="Terkirim"> 
                              </div>

                              {{-- <button type="submit" class="btn btn-primary">Simpan</button> --}}

                            
                     
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