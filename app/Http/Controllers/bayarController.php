<?php

namespace App\Http\Controllers;

use App\Models\Mapel;
use App\Models\Siswa;
use App\Models\Pengajar;
use App\Models\Transaksi;
use Illuminate\Http\Request;

class bayarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {   
        $mapel=Mapel::find($request->id_mapel);
        $hargakelas= $mapel->harga_mapel;
        $jumlah=$hargakelas+$request->harga_langganan;

        return view('formBayar', [
            'id_mapel'=>$request->id_mapel,
            'jumlah'=>$jumlah,
            'hargalangganan'=>$request->harga_langganan,
            'pengajar' => Pengajar::all(),
        ]);//
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
    $siswa=Siswa::where('id_user',auth()->user()->id)->first();

  $transaksi= Transaksi::where('id_siswa',$siswa->id)->get();
    
       foreach($transaksi as $transaksis){
          if($transaksis->id_mapel== $request->id_mapel){
              return redirect('/');
          }
                
          
       }
        
       Transaksi::create([
        'id_siswa'=>$siswa->id,
        'id_mapel'=>$request->id_mapel,
        'id_pengajar'=>$request->pengajar,
        'harga_kelas'=>$request->hargalangganan,
        'jumlah_tagihan'=>$request->jumlahtagihan,
        'status'=>"Menunggu"
       ]);
       $transaksi= Transaksi::latest()->first();
       return view('transaksi',[

           'riwayattransaksi'=>Transaksi::join('siswas','transaksis.id_siswa','=','siswas.id')
          ->join('mapels','transaksis.id_mapel','=','mapels.id')
           ->where('transaksis.id',$transaksi->id)->first(),
           
        
       ]);
       
      
    }

    public function buktipembayaran(Request $request){
      
        $transaksi= Transaksi::latest()->first();
        $transaksi->status="Menunggu Konfirmasi";
        $transaksi->bukti = $request->file('filebukti')->store('buktipembayaran');
        $transaksi->save();

        return view('transaksi',[

            'riwayattransaksi'=>Transaksi::join('siswas','transaksis.id_siswa','=','siswas.id')
           ->join('mapels','transaksis.id_mapel','=','mapels.id')
            ->where('transaksis.id',$transaksi->id)->first(),
            
         
        ]);
    }
    

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $transaksi= Transaksi::all();
     
        return view('admin.datatransaksi.index',[

            'riwayattransaksi'=>Transaksi::join('siswas','transaksis.id_siswa','=','siswas.id')
           ->join('mapels','transaksis.id_mapel','=','mapels.id')
          ->get(),
            
         
        ]);
    
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
