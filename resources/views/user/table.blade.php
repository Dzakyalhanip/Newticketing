@extends('user.master')

@section('content')
@section('judul','Table Data')
    
@section('b1','Data')

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
                                    {{-- <th>No</th> --}}
                                    <th>No</th>

                                                <th>Name</th>
                                                <th>Subject</th>
                                                <th>Description</th>
                                                <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($Laporanuser as $no => $Laporanuser) 
                                <tr>
                                    {{-- <td>{{$Datauser->$no}}</td> --}}
                                    <th Scope="col">{{$no+1}}</th>

                                    <td>{{$Laporanuser->user->name}}</td>
                                    <td>{{$Laporanuser->subject}}</td>
                                    <td>{{$Laporanuser->description}}</td>
                                    <td>{{$Laporanuser->status}}</td>
                                    {{-- <td>{{$Laporanuser->suhu_tubuh}}</td> --}}
                                    {{-- <td><a href="{{route('detail',$Laporanuser->id)}}" class="btn-blok  btn-primary  "><i class="fas fa-edit"></i></a></td></td> --}}
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