<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="{{asset('assets/img/Logo.png')}}" rel="icon">
	<title>PPDB WIKRAMA</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.0/css/all.min.css" integrity="sha512-3PN6gfRNZEX4YFyz+sIyTF6pGlQiryJu9NlGhu9LrLMQ7eDjNgudQoFDK3WSNAayeIKc6B8WXXpo4a7HqxjKwg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link rel="stylesheet" href="{{asset('assets/css/bootstrap.css')}}">
	<link rel="stylesheet" href="{{asset('assets/css/css/magnific-popup.css')}}">
	<link rel="stylesheet" href="{{asset('assets/css/main.css')}}">
	<link rel="stylesheet" href="{{asset('assets/css/owl.carousel.min.css')}}">
	<link rel="stylesheet" href="{{asset('assets/css/styles.css')}}">
	
</head>

<body>

	<!-- Navbar -->
	<header class="header_area sticky-header">
		<div class="main_menu">
			<nav class="navbar navbar-expand-lg navbar-light main_box">
				<div class="container">
					
					<a class="navbar-brand logo_h" href="/"><img width="50" src="{{asset('assets/img/Logo.png')}}" alt=""></a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
					 aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				
					<div class="collapse navbar-collapse offset" id="navbarSupportedContent">
						<ul class="nav navbar-nav menu_nav ml-auto">
							<li class="nav-item"><a class="nav-link" href="#beranda">Beranda</a></li>
							
							<li class="nav-item ">
								<a href="#jurusan" class="nav-link ">Jurusan</a>
								
							</li>
							<li class="nav-item">
								<a href="#tentang" class="nav-link dropdown-toggle" >Tentang Kami</a>
								
							</li>
							<li class="nav-item"><a class="nav-link" href="#testimoni">Testimoni</a></li>
							<li class="nav-item"><a class="nav-link" href="#hubungi">Hubungi Kami</a></li>
							<li class="nav-item"><a class="nav-link" href="/log-in">Login</a></li>
						</ul>
						
					</div>
				</div>
			</nav>
		</div>
	</header>
	<!-- End navbar-->


	<!-- halaman beranda -->
    <section id="beranda">
    <section id="hero">
      <div >
        <div class="carousel-item active" style="background-image: url(assets/img/gedungwikrama.jpg)">
          <div class="carousel-container">
            <div class="container">
              <h2>Welcome to <span>SMK Wikrama Bogor</span></h2>
              <p style="font-size:18px;">Ayo! segera daftarkan dirimu ke SMK Wikrama dengan cara klik <strong>PENDAFTARAN PPDB</strong> dibawah ini! <br>
                   <strong> Ilmu yang Amaliah, Amal yang Ilmiah, Akhlakul Karimah.</strong></p>
              <a href="/register" class="btn-get-started ">PENDAFTARAN PPDB</a>
            </div>
          </div>
        </div>

      </div>
      </section>
      
      <section id="featured-services" class="featured-services section-bg">
      <div class="container">

        <div class="row no-gutters">
          <div class="col-lg-4 col-md-6">
            <div class="icon-box">
              <h4 class="title"><a href="">MOTTO</a></h4>
              <p class="description">Ilmu yang Amaliah, Amal yang Ilmiah, Akhlaqul Karimah</p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="icon-box">
              <h4 class="title"><a href="">AFIRMASI</a></h4>
              <p class="description">Padamu negeri - kami berjanji - lulus Wikrama siap membangun negeri</p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="icon-box">
              <h4 class="title"><a href="">ATITUDE</a></h4>
              <p class="description">Aku ada lingkunganku bahagia</p>
            </div>
          </div>
        </div>

      </div>
    </section>

    </section>
	<!--end halaman beranda  -->


	<!--HALAMAN JURUSAN  -->
	<section id="jurusan">
	<section id="slider" class="pt-5">
  <div class="container"><br>
    <h1 class="text-center "><b>Jurusan</b></h1><br>
	  <div class="slider" >
				<div class="owl-carousel ">
					<div class="slider-card">
						<div class="d-flex justify-content-center align-items-center mb-4">
							<img src="{{asset('assets/img/rpl.JPG')}}" alt="" >
						</div>
						<h5 class="mb-0 text-center"><b>PPLG</b></h5>
						<h6 class="mb-0 text-center">Pengembangan Perangkat Lunak dan Gim</h6>
						<p class="text-center p-4">Desktop Programming, Web Programming, Mobile Programming, Bussiness Analyst, Database Administration.</p>
					</div>
					<div class="slider-card">
						<div class="d-flex justify-content-center align-items-center mb-4">
							<img src="{{asset('assets/img/DKV.JPG')}}" alt="">
						</div>
						<h5 class="mb-0 text-center"><b>DKV</b></h5>
						<h6 class="mb-0 text-center">Desain Komunikasi Visual</h6>
						<p class="text-center p-4">Periklanan, production house, radio & televisi, studio foto, percetakan grafis, corporate brand identity, penerbit majalan/Koran, dll.</p>
					</div>
					<div class="slider-card">
						<div class="d-flex justify-content-center align-items-center mb-4">
							<img src="{{asset('assets/img/tkj.JPG')}}" alt="">
						</div>
						<h5 class="mb-0 text-center"><b>TJKT</b></h5>
						<h6 class="mb-0 text-center">Teknik Jaringan Komputer dan Telekomunikasi</h6>
						<p class="text-center p-4">Memiliki sertifikasi internasional seperti CNAP (Cisco Networking Academy Program) dan MCNA (Mikrotik Certified Network Associate).</p>
					</div>
					<div class="slider-card">
						<div class="d-flex justify-content-center align-items-center mb-4">
							<img src="{{asset('assets/img/MPLB.JPG')}}" alt="">
						</div>
						<h5 class="mb-0 text-center"><b>MPLB</b></h5>
						<h6 class="mb-0 text-center">Manajemen Perkantoran dan Layanan Bisnis</h6>
						<p class="text-center p-4">Prestasi peserta didik seperti juara II lomba keterampilan siswa bidang lomba sekretaris tingkat provinsi tahun 2016 dan juara I lomba olimpiade sekretaris tingkat nasional tahun 2017</p>
					</div>
					<div class="slider-card">
						<div class="d-flex justify-content-center align-items-center mb-4">
							<img src="{{asset('assets/img/BDP.JPG')}}" alt="">
						</div>
						<h5 class="mb-0 text-center"><b>PMN</b></h5>
						<h6 class="mb-0 text-center">Pemasaran</h6>
						<p class="text-center p-4">Membuat desain untuk bisnis sendiri, creative content (berbasis media sosial/website), website berbasis toko online dengan bahasa pemrograman sederhana dan soft skill yang terdiri dari komunikasi, telemarketing dan marketing komunikasi.</p>
					</div>
					<div class="slider-card">
						<div class="d-flex justify-content-center align-items-center mb-4">
							<img src="{{asset('assets/img/hotel.JPG')}}" alt="">
						</div>
						<h5 class="mb-0 text-center"><b>HTL</b></h5>
						<h6 class="mb-0 text-center">Perhotelan</h6>
						<p class="text-center p-4">Siswa Perhotelan akan mampu bekerja di departemen yang ada di hotel dengan kompetensi yang mereka pelajari.</p>
					</div>
					<div class="slider-card">
						<div class="d-flex justify-content-center align-items-center mb-4">
							<img src="{{asset('assets/img/tbg.JPG')}}" alt="">
						</div>
						<h5 class="mb-0 text-center"><b>KLN</b></h5>
						<h6 class="mb-0 text-center">Kuliner</h6>
						<p class="text-center p-4">Mampu bekerja diberbagai bidang jasa boga seperti restoran, hotel, rumah sakit, katering sesuai dengan minat dan bakat yang telah dipelajari.</p>
					</div>
				</div>
			</div>				
		</div>
		</section>
		</section>
		<!-- END HALAMAN JURUSAN -->


		<!-- HALAMAN TENTANG KAMI -->
		<section id="tentang">
			<br><br><br>
		<section id="portfolio" class="portfolio">
			<div class="container">
				<h1 class="text-center "><b>Tentang Kami</b></h1><br>
				<div class="row portfolio-container">
			<div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="{{asset('assets/img/gedungwikrama.jpg')}}" class="img-fluid" alt="">
			  <div class="portfolio-info">
                <div class="portfolio-links">
                  <a target="_blank" href="{{asset('assets/img/gedungwikrama.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 3"><i class="fas fa-search"></i></a>
                 </div>
                </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="{{asset('assets/img/green.jpg')}}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <div class="portfolio-links">
                  <a target="_blank" href="{{asset('assets/img/green.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 3"><i class="fas fa-search"></i></a>
                 
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="{{asset('assets/img/gedungmewah.jpeg')}}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <div class="portfolio-links">
                  <a target="_blank" href="{{asset('assets/img/gedungmewah.jpeg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 3"><i class="fas fa-search"></i></a>
                </div>
              </div>
            </div>
          </div>
      </div>
      <div class="container text-center">
        <div class="row">
          <div class="col order-last">
            <iframe width="500" height="315" src="https://www.youtube.com/embed/h9LI6Y348vs" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          </div>
          <div class="col order-first">
            <iframe width="500" height="315" src="https://www.youtube.com/embed/6jGvss8_Jz8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          </div>
        </div>
      </div>
      
        </div>
    </section>
	</section><br><br>
	<!-- END HALAMAN TENTANG KAMI -->

	<!-- TESTIMONI -->
	<section id="testimoni">
		<section id="team" class="team">

      <div class="container" data-aos="fade-up">

        <header class="section-header">
		<h1 class="text-center "><b>Testimoni</b></h1><br><br><br>
        </header>

        <div class="row gy-4">

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
            <div class="member">
              <div class="member-info mt-4">
                <h4>Akhmad Munito</h4>
                <span>Administrasi Perkantoran (APK) / 2000</span>
                <p>Maju Terus Wikrama, dengan sekolah di Wikrama saya dibekali ilmu yg sangat bermanfaat dan akhlakul karimah bisa langsung bisa bersaing ke dunia kerja di era modern ini.</p>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
            <div class="member">
              <div class="member-info mt-4">
                <h4>Dwi Agustianto</h4>
                <span>Rekayasa Perangkat Lunak (RPL) / 2016</span>
                <p>I'm proud of can attend at SMK WIKRAMA BOGOR , here I can improve skills in Computer & Programming.</p>
              </div>
            </div>
          </div>

		  <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="400">
            <div class="member">
              <div class="member-info mt-4">
                <h4>Restina Safitri</h4>
                <span>Multimedia (MMD) / 2016</span>
                <p>Menciptakan lulusan-lulusan yang siap bekerja secara mandiri maupun bekerja secara team.</p>
              </div>
            </div>
          </div>


          <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="300">
            <div class="member">
              <div class="member-info mt-4">
                <h4>Aris Aditya Nugraha</h4>
                <span>Teknik Komputer dan Jaringan (TKJ) / 2015</span>
                <p>Wikrama adalah sekolah yang penting dan bagus bagi calon calon pekerja maupun kuliah atau bekerja, standar pendidikan bagus sesuai bidang keahlian yang d miliki.</p>
              </div>
            </div>
          </div>   
        </div>
      </div>
    </section>
	</section><br><br><br>
	<!-- END HALAMAN TESTIMONI -->

	<!-- HALAMAN CONTACT -->
	<section id="hubungi">
		<br><br><br>
	<section id="contact" class="contact">

<div class="container" data-aos="fade-up">

  <header class="section-header">
  <h1 class="text-center "><b>Hubungi Kami</b></h1><br><br>
  </header>

  <div class="row gy-4">

	<div class="col-lg-6">

	  <div class="row gy-4">
		<div class="col-md-6">
		  <div class="info-box">
			<i class="bi bi-geo-alt"></i>
			<h3>Alamat</h3>
			<p>Jl.Raya Wangun No.21,<br>RT.O1/RW.06,Sindangsari</p>
		  </div>
		</div>
		<div class="col-md-6">
		  <div class="info-box">
			<i class="bi bi-telephone"></i>
			<h3>Kontak Kami</h3>
			<p>CS 1 = +1 5589 55488 55<br> CS 2 =+1 6678 254445 41</p>
		  </div>
		</div>
		<div class="col-md-6">
		  <div class="info-box">
			<i class="bi bi-envelope"></i>
			<h3>Email </h3>
			<p>contoh@smkwikram.sch.id<br>contact@example.com</p>
		  </div>
		</div>
		<div class="col-md-6">
		  <div class="info-box">
			<i class="bi bi-clock"></i>
			<h3>Alamat</h3>
			<p>Jl.Raya Wangun No.21,<br>RT.O1/RW.06,Sindangsari</p>
		  </div>
		</div>
	  </div>

	</div>

	<div class="col-lg-6">
	
	  <form action="{{route('contact.send')}}" method="POST" class="php-email-form" >
		@csrf
		<div class="row gy-4">
		@if (Session::get('kirimEmail'))
              <div class="alert alert-warning alert-dismissible fade show" role="alert">
              {{Session::get('kirimEmail')}}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
                @endif
		  <div class="col-md-12">
			<input type="text" name="name" class="form-control" placeholder="Your Name" >
		  </div>

		  <div class="col-md-12 ">
			<input type="email" class="form-control" name="email" placeholder="Your Email" >
		  </div>

		

		  <div class="col-md-12">
			<textarea class="form-control" name="message" rows="6" placeholder="Message" ></textarea>
		  </div>

		  <div class="col-md-12 text-center">
			
			<button type="submit">Send Message</button>
		  </div>

		</div>
	  </form>

	</div>

  </div>

</div>

</section>
	
	</section>
	<!-- END HALAMAN CONTACT -->


	<!-- HALAMAN  -->
	<footer id="footer" class="footer">
	
<div class="footer-top">
  <div class="container">
	<div class="row gy-4">
	  <div class="col-lg-5 col-md-12 footer-info">
		<a href="index.html" class="logo d-flex align-items-center">
		  <img  src="assets/img/logoWK.png" alt="">
		  <span>SMK WIKRAMA BOGOR</span>
		</a>
		<p>Ilmu yang Amaliah, Amal yang Ilmiah, Akhlaqul Karimah</p>
		<div class="social-links mt-3">
		  <a href="#" ><i class="bi bi-twitter"></i></a>
		  <a href="#" ><i class="bi bi-facebook"></i></a>
		  <a href="#"><i class="bi bi-instagram"></i></a>
		  <a href="#"><i class="bi bi-linkedin"></i></a>
		</div>
	  </div>

	  <div class="col-lg-2 col-6 footer-links">
		<h4>Tautan</h4>
		<ul>
		  <li><i class="bi bi-chevron-right"></i> <a href="#beranda">Beranda</a></li>
		  <li><i class="bi bi-chevron-right"></i> <a href="#jurusan">Jurusan</a></li>
		  <li><i class="bi bi-chevron-right"></i> <a href="#tentang">Tentang Kami</a></li>
		  <li><i class="bi bi-chevron-right"></i> <a href="#testimoni">Testimoni</a></li>
		  <li><i class="bi bi-chevron-right"></i> <a href="#hubungi">Hubungi Kami</a></li>
		</ul>
	  </div>

	  
	  <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start" style="font-size:25px;">
            <h4>Sosial Media</h4>
            <a href="#" class="instagram"><i class="fab fa-instagram"></i></a>
        <a href="#" class="linkedin"><i class="fab fa-linkedin"></i></a>
        <a href="#" class="facebook"><i class="fab fa-facebook-square"></i></a>


          </div>
	 
	</div>
  </div>
</div>

<div class="container">
  <div class="copyright">
	 Copyright &copy; 2022<strong><span>-Siti Nuraeni</span></strong>. All Rights Reserved
  </div>
</div>
</footer><!-- End Footer -->



	
	

	<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" ></script> 
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" ></script>
	<script src="{{asset('assets/js/ovl.carousel.min.js')}}"></script>
	<script src="{{asset('assets/js/script.js')}}"></script>
	<script src="{{asset('assets/js/vendor/jquery-2.2.4.min.js')}}"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4"
	 crossorigin="anonymous"></script>
	<script src="{{asset('assets/js/vendor/bootstrap.min.js')}}"></script>
	<script src="{{asset('assets/js/jquery.ajaxchimp.min.js')}}"></script>
	<script src="{{asset('assets/js/jquery.nice-select.min.js')}}"></script>
	<script src="{{asset('assets/js/jquery.sticky.js')}}"></script>
	<script src="{{asset('assets/js/nouislider.min.js')}}"></script>
	<script src="{{asset('assets/js/countdown.js')}}"></script>
	<script src="{{asset('assets/js/jquery.magnific-popup.min.js')}}"></script>
	<script src="{{asset('assets/js/owl.carousel.min.js')}}"></script>
	
	<script src="{{asset('assets/js/main.js')}}"></script>
</body>

</html>