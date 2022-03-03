@extends('layouts/main')
@section('container')
    {{-- jumbotron --}}
    <div class="container-fluid ">
        <section class="text-center mb-3">
            <div class="row pl-2">
                <div class="col-md-5">
                    <img src="img/LOGO.png" class="" alt="hmp-si" width="70%" class="shadow-lg">
                </div>
                <div class="col-md-6 pt-mb-5">
                    <h1 class="mt-5 text-md-start" >SELAMAT DATANG <br>
                        DI WEBSITE RESMI HMP-SI 
                    </h1>
                    <h2 class="text-md-start">
                        HIMPUNAN MAHASISWA PRODI SISTEM INFORMASI
                    </h2>
                    <h3 class="text-md-start">
                        Universitas Islam Kalimantan Muahammad Arsyad Al-Banjari	
                    </h3>
                    <a class="align-items-lg-start" href="">
                        <div class="btn float-lg-start mt-lg-5 mt-2 py-lg-4 py-2 shadow-lg "><i class="bi bi-people-fill"></i>My Profile</div>
                    </a>
                    <a class="align-items-lg-start" href="">
                        <div class="btn float-lg-start mt-lg-5 mt-2 py-lg-4 py-2 shadow-lg"> Call ME</div>
                    </a>
                </div>
            </div>
		</section>
        {{-- akhir jumbo tron --}}
    </div>
        <div class="container-fluid pt-5 pb-4 py-0" style="background-color: #eaeaea">
            <div class="row text-center pb-3">
                    <div class="col">
                        <h2>About Me</h2>
                    </div>
                </div>
                <div class="row mb-4">
                    <div class="col-lg-8 offset-lg-2">
                        <div class="card-profile shadow p-4 m-auto w-32">
                            <h3 class="text-center mb-3">Profile</h3>
                            <p>HMP-SI merupakan sebuah organisasi kependidikan, sosial, dan wadah bagi mahasiswa Fakultas Teknologi Informasi untuk menumbuh kembangkan kreatifitasnya. HMP-SI didirikan pada tanggal 26 Mei 2012 dari hasil Musyawarah besar seluruh ORMA TEKNIK UNISKA. HMP-TI dibentuk oleh para pelopor yang memiliki visi dan misi yang sama untuk memajukan fakultas khususnya jurusan Sistem Informasi.</p>
                        </div>
                    </div>
                </div>
                <div class="row text-justify justify-content-center">
                    <div class="col-lg-4 p-3">
                        <div class="card-profile w-32 shadow p-4">
                            <h3 class="text-center mb-3">Visi</h3>
                            <p>Menjadikan HMPSI sebagai wadah organisasi yang memiliki pribadi-pribadi kreatif, inovatif dan berkarakter, serta berjiwa kepemimpinan yang menjunjung tinggi nilai kekeluargaan.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 p-3">
                        <div class="card-profile shadow-lg p-4">
                            <h3 class="text-center mb-3">Misi</h3>
                            <ul>
                                <li>Meningkatkan kualitias prestasi mahasiswa sistem informasi dan anggota hmpsi di bidang akedemik maupun non akedemik.</li>
                                <li>Menjadikan himpunan sebagai wadah bagi mahasiswa prodi sistem informasi untuk berperan aktif, kreatif, serta inovatif dalam menyalurkan minat dan bakat di berbagai bidang.</li>
                                <li>Menjadikan Himpunan sebagai kumpulan yang berpribadi Amanah  dan tanggung jawab</li>
                                <li>Menjadikan Himpunan sebagai wadah aspirasi mahasiswa dan membuat media pembelajaran  untuk mahasiswa sesuai dengan jurusan prodi sistem informasi.</li>
                                <li>Menjalankan kegiatan Himpunan dengan baik serta memperat kekeluargaan Himpunan Program Studi Sistem Informasi</li>
                            </ul>
                        </div>
                    </div>
            </div>      
        </div>  
        <div class="container-fluid pt-5 pb-5" style="background-color: #040924">
            <div class="row">
                <div class="col-12">
                    <h2 class="text-center font-bold text-light">Divis-divisi HMP-SI 2021</h2>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-3 mb-3">
                    <div class="card2 p-3">
                        <h3 class="text-center mb-0"><u>KOMINFO</u></h3>
                        <P class="text-center mb-4">Komunikasi & Informasi</P>
                        <div class="row justify-content-center mt-3 mb-3">
                            <img src="icon/kominfo.png" alt="" width="100px" style="margin: auto; width:150px">
                        </div>
                        <p class="text-center">
                            Divisi Kominfo Merupakan singkatan dari Komunikasi dan Informasi, Memiliki tujuan untuk menjalin komunikasi dan menyebarkan informasi ke arah internal dan eksternal yaitu menyebarkan informasi yang bisa diterima didalam Lingkup mahasiswa dan masyarakat luas.
                        </p>
                    </div>                
                </div>
                <div class="col-lg-3 mb-3">
                    <div class="card2 p-3">
                        <h3 class="text-center mb-0"><u>Divis HUMAS</u></h3>
                        <P class="text-center mb-4">Hubungan Masyarakat</P>
                        <div class="row justify-content-center mt-3 mb-3">
                            <img src="icon/humas.png" alt="" width="100px" style="margin: auto; width:150px">
                        </div>
                        <p class="text-center">
                            Humas merupakan divisi yang bertanggung jawab untuk melakukan interaksi, hubungan, dan kerjasama dengan masyarakat maupan lembaga-lambaga yang terkait dengan kegiatan-kegiata yang dilaksanakan dalam organisasi .

                        </p>
                    </div>         
                </div>
                <div class="col-lg-3 mb-3">
                    <div class="card2 p-3">
                        <h3 class="text-center mb-0"><u>Divis MIKAT</u></h3>
                        <P class="text-center mb-4">Minat & Bakat</P>
                        <div class="row justify-content-center mt-3 mb-3">
                            <img src="icon/mikat.png" alt="" width="100px" style="margin: auto; width:150px">
                        </div>
                        <p class="text-center">
                            Divisi mikat adalah wadah bagi para mahasiswa Departemen Teknik Elektro dan Teknologi Informasi untuk menuangkan minat dan bakatnya.
                        </p>
                    </div>                      
                </div>
            </div>
        </div>
            <div class="container-fluid pt-5 pb-3" style="background-color: #eaeaea;">
                <div class="container">
                    <div class="row align-contont-lg-center mb-3">
                        <div class="col-12 text-center">
                            <h3 class="">Our Partner</h3>
                        </div>
                    </div>                    
                    <div class="row justify-content-center p-2">
                        <div class="col-md-2 col-6 mb-3">      
                            <img class="img-thumbnail rounded-circle" src="img/DPM-FTI-LOGO.png" alt="DPM FTI">
                        </div>
                        <div class="col-md-2 col-6 mb-3">
                            <img class="img-thumbnail rounded-circle" src="img/DPM-FTI-LOGO.jpg" alt="DPM FTI">
                        </div>
                        <div class="col-md-2 col-6 mb-3">
                            <img class="img-thumbnail rounded-circle" src="img/HMPTI-LOGO.jpg" alt="DPM FTI">
                        </div>
                        <div class="col-md-2 col-6 mb-3">
                            <img class="img-thumbnail rounded-circle" src="img/UNISKA-LOGO.jpg" alt="DPM FTI">
                        </div>
                    </div>    
                </div>
            </div>   
        </div>
        <div class="container-fluid py-0 pt-5 pb-3">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12">
                        <h1 class="text-center">BERITA FTI</h1>
                    </div>
                </div>
                <div class="row align-content-center">
                    @foreach ($post as $p)
                    <div class="col-lg-3 col-md-6 mb-4 ">
                        <div class="card shadow-lg" style="width: 18rem; border">
                            <img src="https://source.unsplash.com/500x400?technologi" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5>{{ $p }}</h5>
                              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                            <div class="card-footer">
                                <p>Sabtu, 23 Okteber 2022</p>
                            </div>
                        </div>
                    </div>                        
                    @endforeach
                </div>
                <div class="row mt-5 justify-content-center">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="card-tittle">
                                    <h2>Contrac Me</h2>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Email address</label>
                                    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label>
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
        </div> 
        </div>
@endsection