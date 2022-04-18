<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Laporanuser;
// use App\Services\LogActivitiesServices\MainLogActivitiesServices;
use Illuminate\Support\Facades\Auth;
use Barryvdh\DomPDF\Facade\Pdf;

class UserController extends Controller
{
    // public function __construct(MainLogActivitiesServices $logs) {
    //     $this->loging = $logs; // variable name (optional)
    
    // }
    
    //
    public function index()
    {
    
        
        $Laporanuser = Laporanuser::all();
        return view('user.user',compact('Laporanuser'));
      
    }
    public function showtable()
    {
        // //
        // $Laporanuser = Laporanuser::all();
        // return view('user.user',compact('Laporanuser'));
        $nik = Auth::user()->id;
        $Laporanuser = Laporanuser::where('user_id', $nik)->latest()->paginate(1000);
        return view('user.table', compact('Laporanuser'));
    }
    
    public function show()
    {
    
        $nik = Auth::user()->id;
        $Laporanuser = Laporanuser::$Laporanuser::where('user_id', $nik)->latest()->paginate(1000);
        return view('user.riwayat', compact('Laporanuser'));
      
    }
    // public function detail($id){
    //     // $Datauser = Datauser::where('id' , $id)->first();
        
    //     $nik = Auth::user()->id;
    //     $Datauser = Datauser::where('user_id', $nik)->first();
    //     return view('user.detail' , compact('Datauser'));
    // }
    public function tambah()

    {
        // $Laporanuser = Laporanuser::latest()->paginate(5);
        return view('user/form');
       
        
    }

    public function simpan(Request $request)
    {
        //
        $request->validate([
            'user_id' => 'required',      
            'subject' => 'required',
            'priority' => 'required',
            'description' => 'required',
            'status' => 'required',

        ]);

        // $sendgambar = $request->gambar->getClientOriginalName().'_'. time().'_'. $request->gambar->extension();
        // $request->gambar->move(public_path('images'),$sendgambar);
        Laporanuser::create([
            'user_id'=>$request['user_id'],
            'subject'=>$request['subject'],
            'priority'=>$request['priority'],
            'description'=>$request['description'],
            'status'=>$request['status'],
       
        ]);
         
        return redirect('/user.table')->with('status','Data Berhasil Terkirim');
    }

    // public function pdf($id)
    // {
    //     // $Datauser::all();
    //     $pdf = PDF::loadview('user.pdf',  ['Datauser' => Datauser::findorfail($id)]);
    //     return $pdf->stream();
    // }


    
}
