@extends('user.master')

@section('content')
@section('judul', 'Riwayat')
@section('b1','Riwayat')


    
       


 <!-- Content -->
 <div class="content">
    <!-- Animated -->
        <div class="animated fadeIn">
            <!-- Widgets  -->
                <div class="row">
                        <div class="card ">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        {{-- <th>No</th> --}}
                                        <th>Name</th>
                                        <th>Tanggal</th>
                                        <th>Jam</th>
                                        <th>Lokasi </th>
                                        <th>Suhu Tubuh</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($Datauser as $no => $Datauser) 
                                    <tr>
                                        {{-- <td>{{$Datauser->$no}}</td> --}}
                                        <td>{{$Datauser->user->name}}</td>
                                        <td>{{$Datauser->tanggal}}</td>
                                        <td>{{$Datauser->waktu}}</td>
                                        <td>{{$Datauser->lokasi}}</td>
                                        <td>{{$Datauser->suhu_tubuh}}</td>
                                    </tr>
                                    @endforeach 
                                </tbody>
                              </table>
                        </div>
                        
                    </div>
                        

        </div>
</div>
<!-- /.content -->
        
    
@endsection