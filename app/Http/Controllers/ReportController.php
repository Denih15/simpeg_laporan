<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Role;
use App\Models\Feature;
use App\Models\Report;

use Illuminate\Support\Facades\Auth;

class ReportController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $roles = Role::all();
        $laporan = Report::all();
        return view('report.index',compact('laporan'));
    }
/**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $features = Feature::all();
        return view('report.inedex',compact('laporan'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        dd($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

   public function addReport()
 {
       $laporan = Report::all();
       return view('report.tambah',compact('laporan'));

   }
 
   public function tambahLaporan(Request $request){
    // dd($request);
    Report::create([
        'nama' => $request->nama,
        'employee_id' => Auth::user()->employee->id,
        'tanggal' => $request->kapan,
        'jenis' => $request->jenis,
        'kegiatan_tugas_jabatan' => $request->kegiatan,
        'mulai' => $request->mulai,
        'selesai' => $request->selesai,
        'status' => 1

    ]);
    // return $this->getAllEvents();
    return redirect('/report/reportrejected')->with('success','laporan ditambahkan!');
   }
   public function reportverification()
 {
       $laporans = Report::all()->where('status',2);;
       return view('report.reportverification',compact('laporans'));
   }
 

   public function reportrejected()
   {
         $laporans = Report::all()->where('status',1);
         return view('report.reportrejected',compact('laporans'));
     }
     public function diterima()
     {
           $laporans = Report::all()->where('status',3);
           return view('report.diterima',compact('laporans'));
       }
    
     public function reportverified()
   {
         $laporans = Report::all()->where('status',3);
        //  dd($laporan);
         return view('report.reportverified',compact('laporans'));
     }
     public function minggu()
     {
           $laporans = Report::all();
           return view('report.minggu',compact('laporans'));
       }
       public function bulan()
       {
             $laporans = Report::all();
             return view('report.bulan',compact('laporans'));
         }
         public function wke()
         {
               $laporans = Report::all();
               return view('report.wke',compact('laporans'));
           }
         public function pengaturan()
         {
               $laporans = Report::all();
               return view('report.pengaturan',compact('laporans'));
           }
           public function tk()
           {
                 $laporans = Report::all();
                 return view('report.tk',compact('laporans'));
             }
          
                    /**
             * Show the form for editing the specified resource.
             *
             * @param  int  $id
             * @return \Illuminate\Http\Response
             */
            public function update($id)
            {
                $laporans = Report::find($id);
                return view('report.tambah',compact('laporans'));
            }

            /**
             * Update the specified resource in storage.
             *
             * @param  \Illuminate\Http\Request  $request
             * @param  int  $id
             * @return \Illuminate\Http\Response
             */
            public function save_update(Request $request, $id)
            {
                // dd($request->all());
                $laporans = Report::find($id);
                $laporans->nama = $request->nama;
             
                $laporans->tanggal = $request->kapan;
                $laporans->jenis = $request->jenis;
                $laporans->kegiatan_tugas_jabatan = $request->kegiatan;
                $laporans->mulai = $request->mulai;
                $laporans->selesai = $request->selesai;
                

        
                $laporans->save();
        
                return redirect('report/diterima')->with('success','Laporan Sudah diupdate!');
        
            }
           
            public function delete($id){
                $laporan = report::find($id);
                $laporan->delete();
        
                return redirect('report/diterima')->with('success','Laporan Sudah dihapus!');
            }

            public function setuju($id){

                $laporans = Report::find($id);
                $laporans->status = 3;
                $laporans->save();
                return view('report.bulan',compact('laporans'));
            }
            public function tolak($id){

                $laporans = Report::find($id);
                $laporans->status = 2;
                $laporans->save();
                return view('report.reportverification',compact('laporans'));
            }
 }
