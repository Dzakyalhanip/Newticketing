@extends('admin.master')

@section('content')
@section('judul','Table Data')
@section('b1','Data User')
@if (session('status'))
<div class="alert alert-danger">{{session('status')}}</div>
@endif
@if (session('statusedit'))
<div class="alert alert-success">{{session('status')}}</div>
@endif

    <div class="animated fadeIn">
        <div class="row">
           

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <strong class="card-title">Data Table</strong>
                    </div>
                    <div class="card-body">
                        <table id="bootstrap-data-table" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                                <th>No</th>
                                                <th>Name</th>
                                                <th>Subject</th>
                                                <th>Description</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                                
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($Admin as $no => $Admins) 
                                <tr>
                                    <th Scope="col">{{$no+1}}</th>
                                    <td>{{$Admins->user->name}}</td>
                                    <td>{{$Admins->subject}}</td>
                                    <td>{{$Admins->description}}</td>
                                    <td>{{$Admins->status}}</td>
                                    <td>
                                        <div class="btn-group me-2" role="group" aria-label="Second group">
                                            
                                            <form action="/hapus{{$Admins->id}}" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn  btn-danger"><i class="far fa-times-circle"></i></button>
                                              
                                                <a href="{{route('edit',$Admins->id)}}" class="btn  btn-primary "><i class="fas fa-edit"></i></a></td>
                                            </form>
                                          </div>
                                       
                                    </td>
                                    
                                </tr>
                                @endforeach 
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>


        </div>
    </div><!-- .animated -->

        
    
@endsection