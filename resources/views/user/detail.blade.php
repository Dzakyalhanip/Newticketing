@extends('user.master')

@section('content')
@section('judul', 'Detail')

@section('b1','Detail')

    
       


 <!-- Content -->
 <div class="content">
    <!-- Animated -->
        <div class="animated fadeIn">
            <!-- Widgets  -->
                <div class="row">
                        <div class="card ">
                                <div class="card-header">
                                        <ul class="nav nav-tabs card-header-tabs">
                                            <li class="nav-item">
                                             {{-- <a class="Button"  href="user/detail/{{$Datauser->id}}" target="_blank">Download Pdf</a> --}}
                                             <a href="{{route('pdf', $Datauser->id)}}" target="_blank" class="btn btn-danger">Cetak PDF</a>

                                            </li>
                                        </ul>
                                </div>
                                
                                <div class="card m-3" style="width: 18rem;">
                                    <img src="{{Auth::user()->foto_user}}" class="card-img-top m-3" style="width: 250px" alt="...">
                                    {{-- <div class="card-body">
                                      <h5 class="card-title">Card title</h5>
                                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                    </div> --}}
                                    {{-- @foreach ($Datauser as $no => $Datauser)  --}}
                                    <ul class="list-group list-group-flush">
                                      <li class="list-group-item">Nama    :  {{$Datauser->user->name}}</li>
                                      <li class="list-group-item">Tanggal :  {{$Datauser->tanggal}}</li>

                                      <li class="list-group-item">Tujuan  :  {{$Datauser->lokasi}}</li>
                                    </ul>
                                    {{-- <div class="card-body">
                                      <a href="#" class="card-link">Card link</a>
                                      <a href="#" class="card-link">Another link</a>
                                    </div> --}}
                                {{-- @endforeach  --}}

                                  </div>
                                  
                                {{-- bot --}}
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary btn-sm">
                                        {{-- <i class="fa fa-dot-circle-o"></i> Submit --}}
                                    </button>
                                    {{-- <button type="reset" class="btn btn-danger btn-sm">
                                        <i class="fa fa-ban"></i> Reset
                                    </button> --}}
                                </div>
                        </div>
                        
                    </div>
                        

        </div>
</div>
<!-- /.content -->
        
    
@endsection