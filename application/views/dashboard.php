<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title> Digito </title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="<?php echo base_url(); ?>assets/img/lgosmall.png" rel="icon">
  <link href="<?php echo base_url(); ?>assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="<?php echo base_url(); ?>https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?php echo base_url(); ?>assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

  <!-- Template Main CSS File -->
  <link href="<?php echo base_url(); ?>assets/css/style.css" rel="stylesheet">
  <script src="<?php echo base_url(); ?>https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="<?php echo base_url(); ?>https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center">

      
      <!-- Uncomment below if you prefer to use an image logo -->
      <a href="<?php echo base_url('index.php/dashboard'); ?>" class="logo me-auto"><img src="<?php echo base_url(); ?>assets/img/logo.png" alt="" class="img-fluid"></a>

      <nav id="navbar" class="navbar">
        <ul>
        <li class="dropdown"><a href="<?php echo base_url(); ?>#"><span>Layanan</span> </a>
            <ul>
              <li><a href="<?php echo base_url('index.php/videosiappakai'); ?>">Video Siap Pakai</a></li>
              <li><a href="<?php echo base_url('index.php/shooting'); ?>">Video Shooting</a></li>
              <li><a href="<?php echo base_url('index.php/animasi'); ?>">Video Animasi</a></li>
              <li><a href="<?php echo base_url('index.php/modul'); ?>">Modul Interaktif</a></li>
              <li><a href="<?php echo base_url('index.php/podcast'); ?>">Video Podcast</a></li>
              <li><a href="<?php echo base_url('index.php/produklain'); ?>">Produk Lain</a></li>
            </ul>
          </li>
          <li><a class="nav-link scrollto" href="<?php echo base_url('index.php/klien'); ?>">Klien</a></li>
          <li><a class="nav-link scrollto" href="<?php echo base_url('index.php/Harga'); ?> ">Harga</a></li>
          <li><a class="nav-link scrollto" href="<?php echo base_url('index.php/tentang'); ?>">Tentang Kami</a></li>
          <li><a class="nav-link scrollto" href="<?php echo base_url('index.php/blog'); ?>">Blog</a></li>
          <li><a class="nav-link scrollto" href="<?php echo base_url('index.php/karir'); ?>">Karir</a></li>
          
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- Modal -->
	<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-dialog-scrollable modal-xl">
		<div class="modal-content">
    <div class="modal-header">
			
			<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
		</div>
		<div class="modal-body">
			<section class="post-area section-gap1" >
				<div class="container">
        <section id="faq" class="faq section">
            <div class="container" data-aos="fade-up">

              <div class="section-title">
                <h2>Pertanyaan Yang Sering Diajukan</h2>
              </div>

              <div class="faq-list">
                <ul>
                  <li data-aos="fade-up" data-aos-delay="100">
                    <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" class="collapse" data-bs-target="#faq-list-1">Apa saja support yang diberikan Digito?<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                    <div id="faq-list-1" class="collapse show" data-bs-parent=".faq-list">
                      <p>
                      Tiga kali revisi major, tidak ada batasan revisi minor sampai approved. Support revisi hingga video konten selesai, walaupun kontrak kerjasama sudah selesai.
                      </p>
                    </div>
                  </li>

                  <li data-aos="fade-up" data-aos-delay="200">
                    <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-2" class="collapsed">Apa bisa menjadi partner? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                    <div id="faq-list-2" class="collapse" data-bs-parent=".faq-list">
                      <p>
                      Bisa, silakan kirimkan company profile ke email marketing@digito.id
                      </p>
                    </div>
                  </li>

                  <li data-aos="fade-up" data-aos-delay="300">
                    <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-3" class="collapsed">Bagaimana proses pembayaran?<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                    <div id="faq-list-3" class="collapse" data-bs-parent=".faq-list">
                      <p>
                      Term of payment disesuaikan dengan kesepakatan bersama dengan klien. Bisa melalui DP atau pelunasan. 
                      </p>
                    </div>
                  </li>

                  <li data-aos="fade-up" data-aos-delay="400">
                    <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-4" class="collapsed">Berapa lama proses pengerjaan? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                    <div id="faq-list-4" class="collapse" data-bs-parent=".faq-list">
                      <p>
                        <img src="<?php echo base_url(); ?>assets/img/durasi.jpg" class="" style="width:100%" alt="">
                    </div>
                  </li>

                  <li data-aos="fade-up" data-aos-delay="500">
                    <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-5" class="collapsed">Apa produk bisa di update ke format lainnya? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                    <div id="faq-list-5" class="collapse" data-bs-parent=".faq-list">
                      <p>
                      Bisa, melalui kesepakatan kedua belah pihak
                      </p>
                    </div>
                  </li>

                  <li data-aos="fade-up" data-aos-delay="600">
                    <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-6" class="collapsed">Apa saja format yang disediakan? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                    <div id="faq-list-6" class="collapse" data-bs-parent=".faq-list">
                      <p>
                      <img src="<?php echo base_url(); ?>assets/img/circle.png" style="width:10px; margin-bottom:7px" alt=""> &nbsp; Video Animasi  <br>
                      <img src="<?php echo base_url(); ?>assets/img/circle.png" style="width:10px; margin-bottom:7px" alt=""> &nbsp; Video shooting  <br>
                      <img src="<?php echo base_url(); ?>assets/img/circle.png" style="width:10px; margin-bottom:7px" alt=""> &nbsp; Video Podcast  <br>
                      <img src="<?php echo base_url(); ?>assets/img/circle.png" style="width:10px; margin-bottom:7px" alt=""> &nbsp; Module Interaktif <br>
                      <img src="<?php echo base_url(); ?>assets/img/circle.png" style="width:10px; margin-bottom:7px" alt=""> &nbsp; Infografik <br>
                      <img src="<?php echo base_url(); ?>assets/img/circle.png" style="width:10px; margin-bottom:7px" alt=""> &nbsp; Video Editing <br>
                      <img src="<?php echo base_url(); ?>assets/img/circle.png" style="width:10px; margin-bottom:7px" alt=""> &nbsp; Cinematic Video <br>
                      <img src="<?php echo base_url(); ?>assets/img/circle.png" style="width:10px; margin-bottom:7px" alt=""> &nbsp; Gamifikasi <br><br>

                      Kebutuhan durasi lebih 10 menit, silakan diskusi bersama tim sales kami
                      </p>
                    </div>
                  </li>

                  <li data-aos="fade-up" data-aos-delay="700">
                    <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-7" class="collapsed">Bagaimana tahapan pembuatan konten? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                    <div id="faq-list-7" class="collapse" data-bs-parent=".faq-list">
                      <p>
                      <img src="<?php echo base_url(); ?>assets/img/alur.jpg" class="" style="width:100%" alt="">
                      </p>
                    </div>
                  </li>

                  <li data-aos="fade-up" data-aos-delay="800">
                    <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-8" class="collapsed">Apa saja industri yang telah bekerjasama? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                    <div id="faq-list-8" class="collapse" data-bs-parent=".faq-list">
                    
                    
                      <img src="<?php echo base_url(); ?>assets/img/circle.png" style="width:10px; margin-bottom:7px" alt=""> &nbsp; FMCG <br>
                      <img src="<?php echo base_url(); ?>assets/img/circle.png" style="width:10px; margin-bottom:7px" alt=""> &nbsp; Fintech <br>
                      <img src="<?php echo base_url(); ?>assets/img/circle.png" style="width:10px; margin-bottom:7px" alt=""> &nbsp; Logistic <br>
                      <img src="<?php echo base_url(); ?>assets/img/circle.png" style="width:10px; margin-bottom:7px" alt=""> &nbsp; Banking <br>
                      <img src="<?php echo base_url(); ?>assets/img/circle.png" style="width:10px; margin-bottom:7px" alt=""> &nbsp; Insurance <br> 
                      <img src="<?php echo base_url(); ?>assets/img/circle.png" style="width:10px; margin-bottom:7px" alt=""> &nbsp; Education <br>
                      <img src="<?php echo base_url(); ?>assets/img/circle.png" style="width:10px; margin-bottom:7px" alt=""> &nbsp; Ecommerce <br>
                      <img src="<?php echo base_url(); ?>assets/img/circle.png" style="width:10px; margin-bottom:7px" alt=""> &nbsp; Multi Finance <br>
                      <img src="<?php echo base_url(); ?>assets/img/circle.png" style="width:10px; margin-bottom:7px" alt=""> &nbsp; Manufacturing <br>
                      <img src="<?php echo base_url(); ?>assets/img/circle.png" style="width:10px; margin-bottom:7px" alt=""> &nbsp; Technology Company <br>
                      <img src="<?php echo base_url(); ?>assets/img/circle.png" style="width:10px; margin-bottom:7px" alt=""> &nbsp; State owned company <br>
                      <img src="<?php echo base_url(); ?>assets/img/circle.png" style="width:10px; margin-bottom:7px" alt=""> &nbsp; Internet Service Provider <br>      
                      
                    </div>
                  </li>

                </ul>
              </div>

            </div>
          </section><!-- End Frequently Asked Questions Section -->
				</div>
			</section>
		</div>
		<div class="modal-footer">
			
      
		</div>
		</div>
	</div>
	</div>

  <!-- ======= Hero Section Option 1 ======= -->
  <section id="hero" class="d-flex align-items-center">

     <div class="container">
      <div class="row">
        <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
          <h1>Ubah Konten Pelatihanmu Menjadi Lebih Menarik dan Menyenangkan</h1>
          <!-- <ul style="list-style-type:none; padding:0; font-size:1.1rem; color:#2b2b2b">
            <li>
              <i><img style="margin-bottom:9px" width="30px" src="<?php echo base_url(); ?>assets/img/ceklis.png" alt=""></i>
              <span>Membosankan</span>
            </li>
            <li>
              <i><img style="margin-bottom:9px" width="30px" src="<?php echo base_url(); ?>assets/img/ceklis.png" alt=""></i>
              <span>Materi susah dimengerti</span>
            </li>
            <li>
              <i><img style="margin-bottom:9px" width="30px" src="<?php echo base_url(); ?>assets/img/ceklis.png" alt=""></i>
              <span>Gaya belajar yang berbeda</span>
            </li>
          </ul> -->
          <!-- <p>
          <img style="margin-bottom:9px; float:left" width="30px" src="<?php echo base_url(); ?>assets/img/ceklis.png" alt="">
            &nbsp; Membosankan
          </p>
          <p>
          <img style="margin-bottom:9px; float:left" width="30px" src="<?php echo base_url(); ?>assets/img/ceklis.png" alt="">
            &nbsp; materi susah dimengerti 
            

          </p>
          <p>
          <img style="margin-bottom:9px; float:left" width="30px" src="<?php echo base_url(); ?>assets/img/ceklis.png" alt="">
            &nbsp; gaya belajar yang berbeda

          </p> -->

          <h2 style="text-align:justify">Ciptakan konten pelatihan dan pengembangan karyawan yang mudah diakses dimana saja, kapan saja dan dengan perangkat apa saja.</h2>
          <div class="d-flex justify-content-center justify-content-lg-start">
            <a href="https://mail.google.com/mail/?view=cm&fs=1&to=hello@digito.id" class="btn-get-started scrollto">Kontak</a>
          </div>
        </div>
        <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
          <img src="<?php echo base_url(); ?>assets/img/baru/banner.png" class="img-fluid" alt="">
        </div>
      </div>
    </div>

  </section> <!-- End Hero Option 1 -->

  <!-- ======= Hero Section Option 2 ======= -->
  <!--<section id="hero2" class="d-flex align-items-center">

    <div class="container">
      <div class="row">
        <div class="col-lg-12 d-flex flex-column justify-content-center align-items-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
          <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
            <img style="margin-top:20px" src="<?php echo base_url(); ?>assets/img/banner13.png" class="img-fluid animated center" alt="">
          </div>
        </div>
        <div class="col-lg-12 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 align-items-center order-lg-1" data-aos="fade-up" data-aos-delay="200">
          <h1>Ubah Konten Training Mu Jadi Lebih Menarik</h1>
          <h2>Ciptakan program training dan pengembangan karyawan yang lebih menyenangkan, mudah dan efektif bersama digito</h2>
          <div class="d-flex justify-content-center justify-content-lg-start">
            <a href="<?php echo base_url(); ?>#promo" class="btn-get-started scrollto">Kontak</a>
          </div>
        </div>
      </div>
    </div>

  </section> -->
  
  <!-- End Hero Option 2 -->

  <main id="main">

    <!-- ======= Clients Section ======= -->
    <!-- <section id="clients" class="clients section-bg">
      <div class="container">

        <div class="row" data-aos="zoom-in">

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="<?php echo base_url(); ?>assets/img/clients/client-1.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="<?php echo base_url(); ?>assets/img/clients/client-2.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="<?php echo base_url(); ?>assets/img/clients/client-3.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="<?php echo base_url(); ?>assets/img/clients/client-4.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="<?php echo base_url(); ?>assets/img/clients/client-5.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="<?php echo base_url(); ?>assets/img/clients/client-6.png" class="img-fluid" alt="">
          </div>

        </div>

      </div>
    </section> --> <!-- End Cliens Section -->

    <!-- ======= Promo Section ======= -->
    <section id="promo" class="promo">
      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <h2>Temukan pilihan promo terbaru dari Digito</h2>
        </div> 
          
        <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel" data-pause="hover">
         
          <div class="carousel-inner">
            <div class="carousel-item active rounded-corners" data-bs-interval="5000">
              <img style="width:100%; height:30" src="<?php echo base_url(); ?>assets/img/newyear.png" class="d-block ">
            </div>
            <!-- <div class="carousel-item rounded-corners" data-bs-interval="5000">
              <img src="<?php echo base_url(); ?>assets/img/promo/promo-agustus1.jpg" class="d-block w-60">
            </div>
            <div class="carousel-item rounded-corners" data-bs-interva="5000">
              <img src="<?php echo base_url(); ?>assets/img/promo/promo3.png" class="d-block w-60">
            </div> -->
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
       

      </div>
    </section><!-- End Promo Section -->

    <!-- ======= Fromat Konten Section ======= -->
    <section id="services" class="services section-bg">
      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <h2>Format Konten Digito</h2>
        </div> 

        <div class="row">

         <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-md-0 center" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box">
              <div class="icon"><img style="width:100px; margin-left:50px" class="mx-auto d-block" src="<?php echo base_url(); ?>assets/img/baru/siappakai1.png" alt=""></i></div>
              <h4 style="text-align:center"><a href="<?php echo base_url('index.php/videosiappakai');?>">Video Siap Pakai</a></h4>
            </div>
          </div>
         

          <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-md-0 center" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box">
              <div class="icon"><img style="width:100px; margin-left:50px" class="mx-auto d-block" src="<?php echo base_url(); ?>assets/img/baru/vshootingnew1.png" alt=""></div>
              <h4 style="text-align:center"><a href="<?php echo base_url('index.php/shooting');?>">Video Shooting</a></h4>
            </div>
          </div>

          <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0 center" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon-box">
              <div class="icon"><img style="width:100px; margin-left:50px" class="mx-auto d-block" src="<?php echo base_url(); ?>assets/img/baru/vanimasi2.png" alt=""></div>
              <h4 style="text-align:center"><a href="<?php echo base_url('index.php/animasi');?>">Video Animasi</a></h4>
            </div>
          </div>
          


        </div>
        <div class="row">

        <div class="col-xl-3 col-md-6 d-flex align-items-stretch center" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box">
              <div class="icon center"><img style="width:100px; margin-left:50px" class="mx-auto d-block" src="<?php echo base_url(); ?>assets/img/baru/modulinteraktifnew.png" alt=""></div>
              <h4 style="text-align:center"><a href="<?php echo base_url('index.php/modul');?>">Modul Interaktif</a></h4>
            </div>
          </div>

         <div class="col-xl-3 col-md-6 d-flex align-items-stretch center" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box centered">
              <div class="icon center"><img style="width:100px; margin-left:50px" class="mx-auto d-block" src="<?php echo base_url(); ?>assets/img/baru/podcast1.png" alt=""></div>
              <h4 style="text-align:center"><a href="<?php echo base_url('index.php/podcast');?>">Video Podcast</a></h4>
            </div>
          </div>


          <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0 center" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon-box">
              <div class="icon"><img style="width:100px; margin-left:50px" class="mx-auto d-block" src="<?php echo base_url(); ?>assets/img/baru/produklain.png" alt=""></div>
              <h4 style="text-align:center"><a href="<?php echo base_url('index.php/produklain');?>">Produk Lain</a></h4>
            </div>
          </div>
          


        </div>

      </div>
    </section><!-- End Format Konten Section -->

    <!-- ======= Mengapa digito Section ======= -->
    <section id="services" class="servicesmengapa section-bg-m">
      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <h2>Mengapa Digito</h2>
        </div> 

        <div class="row">
          <div class="col-xl-3 col-md-6 d-flex align-items-stretch center" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box">
              <div class="icon center"><img style="width:100px; margin-left:50px" class="mx-auto d-block" src="<?php echo base_url(); ?>assets/img/baru/Icon-Video[2]-01.png" alt=""></div>
              <h4 style="text-align:center; font-size:45px"><strong><a href="">500+</a></strong></h4>
              <p style="text-align:center">Materi pelatihan yang telah diproduksi
                menjadi video learning yang menarik</p>
            </div>
          </div>

          <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-md-0 center" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box">
              <div class="icon"><img style="width:70px; margin-bottom: 30px; margin-top:20px;  margin-left:50px" class="mx-auto d-block" src="<?php echo base_url(); ?>assets/img/baru/Icon-Durasi[3]-01.png" alt=""></div>
              <h4 style="text-align:center;font-size:45px"><strong><a href="">5.000+</a></strong></h4>
              <p style="text-align:center">Menit total durasi video learning yang
                Digito kembangkan</p>
            </div>
          </div>

          <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0 center" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon-box">
              <div class="icon"><img style="width:100px; margin-left:50px" class="mx-auto d-block" src="<?php echo base_url(); ?>assets/img/baru/Icon-User[5]-01.png" alt=""></div>
              <h4 style="text-align:center;font-size:45px"><strong><a href="">100.000+</a></strong></h4>
              <p style="text-align:center">Karyawan yang menggunakan video learning dari Digito</p>
            </div>
          </div>


        </div>

      </div>
    </section>

    <section id="servicess" class="servicess section-bg-m">
      <div class="container" data-aos="fade-up">
      <div class="section-title">
          <h2>Digito Mendukung Kebutuhan Konten E-Learning Perusahaan Anda</h2>
        </div> 

        <div class="row justify-content-center align-items-center text-center">
         
          <div class="col-lg-3 col-md-6 d-flex align-items-center mt-4 mt-xl-0" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box">
            <div class="icon"><img src="<?php echo base_url(); ?>assets/img/services_onboarding.png" class="img-fluid" alt=""> </div>
              <strong><h4 style="margin-top:10px">On Boarding</h4></strong>
            </div>
          </div>


          <div class="col-lg-3 col-md-6 d-flex align-items-center mt-4 mt-xl-0 text-center" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box">
            <div class=""><img class="mx-auto d-block" style="width: 100px;" src="<?php echo base_url(); ?>assets/img/baru/Icon Hard Skill[3]-01.png" class="img-fluid" alt=""> </div>
              <strong><h4 style="margin-top:10px">Hard Skill</h4></strong>
              
            </div>
          </div>

          <div class="col-lg-3 col-md-4 d-flex align-items-stretch mt-4 mt-xl-0 " data-aos="zoom-in" data-aos-delay="300">
            <div class="icon-box">
            <div class=""><img class="mx-auto d-block" style="width: 100px; " src="<?php echo base_url(); ?>assets/img/baru/Icon-Soft Skill[3]-01.png" class="img-fluid" alt=""> </div>
              <strong><h4 style="margin-top:10px">Soft Skills</h4></strong>
            </div>
          </div>
          
          
          <div class="row justify-content-center align-items-center">
            <div class="col-lg-3 col-md-4 d-flex align-items-left mt-4 mt-xl-0 " data-aos="zoom-in" data-aos-delay="300">
                <div class="icon-box">
                <div class=""><img src="<?php echo base_url(); ?>assets/img/services_products.png" class="img-fluid" alt=""> </div>
                <strong> <h4 style="margin-top:10px">Product Services</h4></strong>
                </div>
            </div>

            <div class="col-lg-3 col-md-4 d-flex align-items-stretch mt-4 mt-xl-0  " data-aos="zoom-in" data-aos-delay="300">
                <div class="icon-box">
                <div class="picm"><img src="<?php echo base_url(); ?>assets/img/services_safety1.png" class="img-fluid" alt=""> </div>
                <strong> <h4 style="margin-top:10px">Safety Inductions</h4></strong>
                </div>
              </div>

            </div>

          
          


        </div>

        <div class="row">
          

            
        </div>

      </div>
    </section>
   

    <section id="hero" class="d-flex align-items-center">

     <div class="container">
      <div class="row">
        <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
          <!-- <h1 >Ubah Konten Training Mu Jadi Lebih Menarik</h1>
          <h2>Ciptakan program training dan pengembangan karyawan yang lebih menyenangkan, mudah dan efektif bersama Digito</h2>
          <div class="d-flex justify-content-center justify-content-lg-start">
            <a href="<?php echo base_url(); ?>#promo" class="btn-get-started scrollto">Kontak</a>
          </div> -->
          <img src="<?php echo base_url(); ?>assets/img/baru/footernew1.png" class="img-fluid" alt="">
        </div>
        <div class="col-lg-6 order-2 order-lg-1 hero-img" data-aos="zoom-in" data-aos-delay="200">
        <h1 class="ctr">Tertarik Menjadi Mitra Bisnis Kami?</h1>
          <h2>Buat materi pelatihan pelanggan mu lebih menarik  </h2>
          <div class="d-flex justify-content-center justify-content-lg-start">
            <a href="https://mail.google.com/mail/?view=cm&fs=1&to=hello@digito.id" class="btn-get-started scrollto" target="_blank">Kontak</a>
          </div>
        </div>
      </div>
    </div>

  </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h4>PT. Digital Kreasi Mediatama</h4>
            <p>
              Gedung Setiabudi 2 lantai 2<br> 
              Suite 207 B-C <br>
              Jl. HR Rasuna Said Kav. 62<br>
              Jakarta Selatan 12920 <br><br>
              
            </p>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Produk</h4>
            <ul>
            <li><i class="bx bx-chevron-right"></i> <a href="<?php echo base_url('index.php/videosiappakai'); ?>">Video Siap Pakai</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="<?php echo base_url('index.php/shooting'); ?>">Video Shooting</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="<?php echo base_url('index.php/animasi'); ?>">Video Animasi</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="<?php echo base_url('index.php/modul'); ?>">Modul Interaktif</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="<?php echo base_url('index.php/podcast'); ?>">Video Podcast</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="<?php echo base_url('index.php/produklain'); ?>">Produk Lain</a></li>
            </ul>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Bantuan</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="<?php echo base_url('index.php/klien'); ?>">Klien</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="<?php echo base_url('index.php/harga'); ?>">Harga</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="<?php echo base_url('index.php/tentang'); ?>">Tentang Kami</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="<?php echo base_url('index.php/karir'); ?>">Karir</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="<?php echo base_url('index.php/blog'); ?>">Blog</a></li>
              
            </ul>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Layanan</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal">FAQ</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="https://mail.google.com/mail/?view=cm&fs=1&to=hello@digito.id">Email</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="<?php echo base_url(); ?>">Tim Sales </a></li>
              
            </ul>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Sosial Media</h4>
            
            <div class="social-links mt-3">
              
              
              <a href="https://instagram.com/digito.info?igshid=YmMyMTA2M2Y=" class="instagram"><i class="bx bxl-instagram"></i></a>
             
              <a href="https://www.linkedin.com/company/digitastudio/mycompany/" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
          </div>

        </div>
      </div>
    </div>

    <!-- <a class="open-button" onclick="openForm()"><i class="bi bi-whatsapp"></i></a> -->

    <div class="chat-popup card" id="myForm" data-aos="fade-up">
      <form action="/action_page.php" class="form-container">
      <h5 class="card-header" style="background-color:#25d366; color:white; text-align:center">Nomor WA Sales</h5>
        <div class="card-body">
          <div class="d-flex flex-row align-items-center p-1" style="gap: 5px">
            <i class="bi bi-whatsapp" style="font-size:38px"></i>
            <div class="d-flex flex-column">
              <div class="waMember"><a href="https://wa.me/6287832494887"> Clara Oktaviana</a></div>
              
            </div>
          </div>

          <div class="d-flex flex-row align-items-center p-1" style="gap: 5px">
            <i class="bi bi-whatsapp" style="font-size:38px"></i>
            <div class="d-flex flex-column">
              <div class="waMember"><a href="https://wa.me/6281219848043">Widodo Bintiharto</a></div>
              
            </div>
          </div>
          
          
          
        </div>
        <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
      </form>
    </div>

    <div class="container footer-bottom clearfix">
      <div class="copyright">
        &copy; Copyright <strong><span>Digito</span></strong>. All Rights Reserved
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a onclick="openForm()" class="open-button  d-flex align-items-center justify-content-center"><i class="bi bi-whatsapp"></i></a>
  

  <!-- Vendor JS Files -->
  <script src="<?php echo base_url(); ?>assets/vendor/aos/aos.js"></script>
  <script src="<?php echo base_url(); ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="<?php echo base_url(); ?>assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="<?php echo base_url(); ?>assets/js/main.js"></script>
  <script src="/build/constrast-bootstrap-pro/js/cdb.js"></script>
  <script>
    const stepButtons = document.querySelectorAll('.step-button');
    const progress = document.querySelector('#progress');

    Array.from(stepButtons).forEach((button,index) => {
        button.addEventListener('click', () => {
            progress.setAttribute('value', index * 100 /(stepButtons.length - 1) );//there are 3 buttons. 2 spaces.

            stepButtons.forEach((item, secindex)=>{
                if(index > secindex){
                    item.classList.add('done');
                }
                if(index < secindex){
                    item.classList.remove('done');
                }
            })
        })
    })

    function openForm() {
  document.getElementById("myForm").style.display = "block";
  }

  function closeForm() {
    document.getElementById("myForm").style.display = "none";
  }
    </script>

</body>

</html>