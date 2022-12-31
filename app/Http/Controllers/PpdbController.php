<?php

namespace App\Http\Controllers;

use App\Models\Ppdb;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Payment;
use App\Models\Contact;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;



class PpdbController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
   
    

    public function index()
    {
        //
        return view('dashboard.index');
    }

    public function register()
    {
        
        return view('dashboard.register');
    }

    public function student()
    {
       
        $item = Payment::where('user_id', '=', Auth::user()->id)->first();
        return view('dashboard.student', compact('item'));
       
      
    }


  

    public function login()
    {
        return view('dashboard.login');
    }

    public function profile(){
        $profile = Ppdb::latest()->first();

        return view('dashboard.profile', compact('profile'));
    }


    public function auth(Request $request)
    {
        $request->validate([
            'email'=> 'required',
            'password' => 'required',
        ]);
        $user = $request->only('email', 'password');

        if(Auth::attempt($user)) {
            return redirect()->route('ppdb.student')->with('berhasil', "Selamat Datang");
        }else{
            return redirect('/log-in')->with('gagal', "Gagal Login, periksa dan coba lagi!");
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/log-in');
    }


    public function pembayaran()
    {
        $item = Payment::where('user_id', '=', Auth::user()->id)->first();
        return view('dashboard.pembayaran', compact('item'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        //
        $request ->validate([
            'bank'=> 'required',
            'nama_pemilik'=> 'required',
            'nominal'=> 'required',
            'foto_bukti'=> 'required|image|mimes:png,jpg,jpeg,svg',
            
        ]);

        $image = $request->file('foto_bukti');
        $imgName = time().rand().'.'.$image->extension();
        if(!file_exists(public_path('/assets/img/'.$image->getClientOriginalName()))){
            $destinationPath = public_path('/assets/img');
            $image->move($destinationPath, $imgName);
            $uploaded = $imgName;
        }else{
            $uploaded = $image->getClientOriginalName();
        }

        $databayar = Payment::create([
            'bank' => $request->bank,
            'bank_lainnya'=> $request->bank_lainnya,
            'nama_pemilik'=> $request->nama_pemilik,
            'nominal'=> $request->nominal,
            'foto_bukti'=> $uploaded,
            'status' => 0,
            'user_id'=> Auth::user()->id,
            
           
        ]);

        return redirect()->route('ppdb.student', $databayar["id"])->with('success', "Pembayaran telah dilakukan silahkan menunggu admin melakukan validasi.");
        
    }

  

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $request->validate([
            'nisn'=> 'required',
            'jenis_kelamin'=> 'required',
            'nama'=> 'required',
            'asal_sekolah'=> 'required',
            'email'=> 'required',
            'no_hp'=> 'required',
            'no_ayah'=> 'required',
            'no_ibu'=> 'required',
            'refrensi'=> 'required',
        ]);

        $data = Ppdb::create([
            'nisn' => $request->nisn,
            'jenis_kelamin' => $request->jenis_kelamin,
            'nama'=> $request->nama,
            'asal_sekolah'=> $request->asal_sekolah,
            'sekolah_lainnya' => $request->sekolah_lainnya,
            'email' => $request->email,
            'no_hp'=> $request->no_hp,
            'no_ayah'=> $request->no_ayah,
            'no_ibu'=> $request->no_ibu,
            'refrensi'=> $request->refrensi,
            'nama_pegawai'=> $request->nama_pegawai,
            'nama_siswa'=> $request->nama_siswa,
            'rayon'=> $request->rayon,
            'nama_alumni'=> $request->nama_alumni,
            'tahun_lulus'=> $request->tahun_lulus,
            'nama_guru'=> $request->nama_guru,
            'asal_smp'=> $request->asal_smp,
            'no_seleksi'=> $request->no_seleksi,
            'nama_calon'=> $request->nama_calon,
        ]);
        $data = User::create([
            'nama' => $request->nama,
            'email'=> $request->email,
            'password' => Hash::make($request->nisn),
            'role' => 'user',
        ]);
        return redirect()->route('ppdb.create-PDF', $data["id"]);
    }

    public function createPDF()
    {
       
        $bukti = Ppdb::latest()->first();
        return view('pdf.bukti', compact('bukti'));
        
    }



    public function verifikasi(){

      
        $dataUsr = Payment::with('user')->paginate(5);
        return view('dashboard.verifikasi', compact('dataUsr'))->with('i', (request()->input('page',1)-1));
    }
  
    


    public function detail(){
        $detail = Ppdb::latest()->first();
        // $detail = Ppdb::where('user_id', '=', Auth::user()->id)->first();
        return view('dashboard.detail', compact('detail'));
    }

    public function buktiBayar($id)
    {
        $buktibayar = Payment::where('id', $id)->first();
        return view('dashboard.buktiBayar', compact('buktibayar'));
    }

    public function error()
    {
        return view('dashboard.error');
    }

    // public function validasi()
    // {
    //     $validasi2 = Payment::where([
    //         ['user_id', '=', Auth::user()->id],
    //         ['status', '=', 1],
    //     ])->get();
    //     return view('dashboard.student',compact('validasi2'));
    // }

    public function hasilValidasi($id)
    {
   Payment::where('id', $id)->update([
            'status' => 1,
        ]);
        return redirect()->route('ppdb.verifikasi');
    }

    public function tolak($id)
    {
   Payment::where('id', $id)->update([
            'status' => 2,
        ]);
        return redirect()->route('ppdb.verifikasi');
    }


    public function sendEmail(Request $request)
    {
        $request->validate([
            'name'=> 'required',
            'email'=> 'required',
            'message'=> 'required',
           
        ]);

        Contact::create([
            'name' => $request->name,
            'email'=> $request->email,
            'message'=> $request->message,
        ]);

        return back()->with('kirimEmail', 'Email Terkirim!');
    }

    public function contact()
    {
        $kontakUs = Contact::all();
        return view('dashboard.contact', compact('kontakUs'));
    }




    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Ppdb  $ppdb
     * @return \Illuminate\Http\Response
     */
    public function show(Ppdb $ppdb)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Ppdb  $ppdb
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $editdata= Payment::where('id', $id)->first();
        return redirect('/ppdb/student', compact('editdata'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Ppdb  $ppdb
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $request ->validate([
            'bank'=> 'required',
            'nama_pemilik'=> 'required',
            'nominal'=> 'required',
            'foto_bukti'=> 'required|image|mimes:png,jpg,jpeg,svg',
            
        ]);

        $image = $request->file('foto_bukti');
        $imgName = time().rand().'.'.$image->extension();
        if(!file_exists(public_path('/assets/img/'.$image->getClientOriginalName()))){
            $destinationPath = public_path('/assets/img');
            $image->move($destinationPath, $imgName);
            $uploaded = $imgName;
        }else{
            $uploaded = $image->getClientOriginalName();
        }

        Payment::where('id', $id)->update([
            'bank' => $request->bank,
            'bank_lainnya'=> $request->bank_lainnya,
            'nama_pemilik'=> $request->nama_pemilik,
            'nominal'=> $request->nominal,
            'foto_bukti'=> $uploaded,
            'status' => 0, 
        ]);

        return redirect()->route('ppdb.student')->with('successUpdate', 'Pembayaran sedang diverifikasi, harap tunggu informasi selanjutnya.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ppdb  $ppdb
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ppdb $ppdb)
    {
        //
    }
}
