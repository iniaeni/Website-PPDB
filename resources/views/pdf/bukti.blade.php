<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TANDA BUKTI PENDAFTARAN</title>
</head>

<body style=" font-family:arial; ">
    <div >
    <table align="center" ">
        <tr>
            <td><img width="110px" src="{{asset('assets/img/logoWK.png')}}" alt=""></td>
            <td>
                <span style="font-size:20px;"><strong>PANITIA PENERIMAAN PESERTA DIDIK BARU</strong> </span><br>
                <span style="font-size:20px;"><strong>SMK WIKRAMA BOGOR TP.2023-2024</strong></span><br>
                <span style="font-size:16px;">JL.Raya Wangun Kel. Sindangsari Kec.Bogor Timur Kota Bogor</span><br>
                <span style="font-size:16px;">Email:prohumasi@smkwikrama.sch.id| Website : https://www.smkwikrama.sch.id</span>
            </td>
        </tr>
    </table> <br>  
    </div>
    <div style="text-align:center;">
    <span style="font-size:19px;"><strong>TANDA BUKTI PENDAFTARAN</strong> </span><br>
    <span style="font-size:17px;"><strong>SMK Wikrama Bogor TP.2023-2024</strong></span><br>
    </div><br><br>
   
    <table align="center" style="text-align:left; " >
        <tr>
            <td colspan="4"  bgcolor="#B2B2B2" width="700px"><strong>I. BIODATA CALON PESERTA DIDIK</strong></td>
        </tr> 
        <tr>
            <td><p></p></td>
        </tr>
      
        <div style="font-size:10px; ">
       
        <tr>
            <td><strong>TANGGAL DAFTAR</strong></td>
            <td>:</td>
            <td>{{$bukti->created_at->format('j F,Y') }}</td> 
            
        </tr>
        <tr>
            <td><strong>NOMOR SELEKSI</strong></td>
            <td>:</td>
            <td>{{$bukti->id}}</td>    
        </tr>
        <tr>
            <td><strong>NAMA LENGKAP</strong></td>
            <td>:</td> 
            <td>{{$bukti->nama}}</td> 
        </tr>
        <tr>
            <td><strong>NISN</strong></td>
            <td>:</td>  
            <td>{{$bukti->nisn}}</td> 
        </tr>
        <tr>
            <td><strong>ASAL SEKOLAH</strong></td>
            <td>:</td> 
            <td>{{$bukti->asal_sekolah}}({{$bukti->sekolah_lainnya}}</td>
            
        </tr>
        <tr>
            <td><strong>NO HP</strong></td>
            <td>:</td>  
            <td>{{$bukti->no_hp}}</td> 
          
        </tr>
        <tr>
            <td><strong>EMAIL</strong></td>
            <td>:</td>  
            <td >{{$bukti->email}}</td> 
        </tr>
        <tr>
            <td><strong>NO HP AYAH</strong></td>
           <td>:</td>
            <td>{{$bukti->no_ayah}}</td>  
        </tr>
        <tr>
            <td><strong>NO HP IBU</strong></td>
            <td>:</td>  
            <td >{{$bukti->no_ibu}}</td> 
        </tr>
        
        </div>
      
            <tr>
            <td><p></p></td>
        </tr>
        <tr>
            <td colspan="3"  bgcolor="#B2B2B2" width="700px"><strong>II. INFORMASI DAN PERSYARATAN</strong></td>
        </tr>
        <tr>
            <td><p></p></td>
        </tr>
        <tr>
            <td colspan="3"><span style="font-size:17px;"><strong>A. Akun Anda</strong></span><br></td>
        </tr>
        <tr>
            <td colspan="3">Akses <a href="/log-in" >ppdb-smkwikrama/student</a>,login gunakan</td>
        </tr>
        <tr>
            <td colspan="3">Email : {{$bukti->email}}</td>
        </tr>
        <tr>
            <td colspan="3">Password : {{$bukti->nisn}} <br></td>
        </tr>
        <tr>
            <td colspan="3">Akun ini digunakan untuk mengecek status pendaftaran pada SIM PPDB SMK Wikrama Bogor.</td>
        </tr>
        <tr>
            <td colspan="3"> <span style="font-size:17px;"><strong>B. Foto/Scan Dokumen yang Harus Dipersiapkan</strong></span></td>
        </tr>
        <tr>
            <td colspan="3">
            <ol>
                <li>Persyaratan satu</li>
                <li>Persyaratan satu</li>
                <li>Persyaratan satu</li>
            </ol>
            </td>
        </tr>
        <tr>
            <td colspan="3"><span style="font-size:17px;"><strong>C. Biaya Seleksi</strong></span></td>
        </tr>
        <tr>
            <td colspan="3">Pembayaran uang seleksi sebesar RP.200.000 melalui transfer bank:</td>
        </tr>
        <tr>
            <td colspan="3">Bank BNI : 1234567890 A.N SMK Wikrama Sekolah.</td>
        </tr>
    </table><br>
    
    
    <br><br><br><br><br><br><br><br>
    <script type="text/javascript">
        window.print();

    </script>
</body>
</html>