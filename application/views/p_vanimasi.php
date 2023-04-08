<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

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
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/owl.carousel.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
  

  <!-- Template Main CSS File -->
  <link href="<?php echo base_url(); ?>assets/css/style.css" rel="stylesheet">
  <script src="<?php echo base_url(); ?>https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="<?php echo base_url(); ?>https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" ></script>
</head>
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
          <li><a class="nav-link scrollto" href="<?php echo base_url('index.php/harga'); ?>">Harga</a></li>
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
  
  <!-- <section id="" class="product section">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="psection-title">
            <h3 style="margin-top:50px"><b> Materi Pelatihan Lebih Menarik dengan Motion Graphic Video</b></h3>
           
          </div> 
          <img style="width:50%;" class="center" src="<?php echo base_url(); ?>assets/img/product/VideoPodcast.png" alt="">
          <h5 style="text-align:center">Video Animasi adalah video yang memadukan audio dan visual untuk menarik perhatian pembelajar <br> yang mampu menyajikan objek secara detail dan dapat membantu memahami materi pelatihan yang sulit.
            </h5>
        </div>
      </div>
    </section>End Skills Section -->

    <section id="" class="section product">
      <div class="container" data-aos="fade-up">

        <div style="margin-top:90px; margin-bottom:80px" class="row">
        <div class="col-lg-6 pt-4 pt-lg-0 content" data-aos="fade-left;" data-aos-delay="100">
            <h3 style="text-align:justify; margin-top:40px; padding-bottom:10px"><b> Materi Pelatihan Lebih Menarik dengan Motion Graphic Video </b></h3>
            <p style="text-align:left;">
            <h5 style="text-align:justify; ">Video Animasi adalah video yang memadukan audio dan visual untuk menarik perhatian pembelajar yang mampu menyajikan objek secara detail dan dapat membantu memahami materi pelatihan yang sulit.
            </h5>
            </p>
          </div>
          <div class="col-lg-6 d-flex align-items-center" data-aos="fade-right" data-aos-delay="100">
            <img style="width:100%" src="<?php echo base_url(); ?>assets/img/product/VideoPodcast.png" class="img-fluid" alt="">
          </div>
          
        </div>
    </section>

    <section id="" class="product section-bg">
      <div class="container" data-aos="fade-up">

        <div class="row">
          
          <div class="col-lg-12 pt-4 pt-lg-0 content " data-aos="fade-left;" data-aos-delay="100">
            <h3 style="font-weight:600; margin-top:48px; text-align:center; color:#ef3c2d; line-height:40px">Kenapa Format Video Animasi Lebih Unggul?</h3>
            

          </div>
          <div class="col-lg-12 d-flex justify-content-center " class="mx-auto d-block" data-aos="fade-right" data-aos-delay="100">
            <img style="margin-top:0px; width:800px" src="<?php echo base_url(); ?>assets/img/baru/Table[5]-01.png" class="img-fluid mx-auto d-block" alt="">
          </div>
          
        </div>

      </div>
    </section>
    <section class="playlist">
      <div class="row">
      <div class="psection-title">
          <p style="font-weight: 600">
            <span style="color:red; font-size:27px; font-weight: 600">1 menit video animasi</span><span style="font-size:27px; font-weight: 600" > sama seperti</span> <span style="color:red; font-size:27px; font-weight: 600">1.8 juta</span> <span style="font-size:27px; font-weight: 600" >kata</span> <br>
            <span style="font-size:24px">Demo Video Animasi</span>
            <br><br>
          </p>
        </div> 
        
        <div class="container">

            <div class="main-video-container">
              <video src="<?php echo base_url(); ?>assets/video/animasi-intro.mp4" loop controls class="main-video" ></video>
              <h3 class="main-vid-title">Video Animasi - Dental Video Animation</h3>
            </div>

            <div class="video-list-container">

              <div class="list active">
                  <video src="<?php echo base_url(); ?>assets/video/animasi-intro.mp4" class="list-video" poster="<?php echo base_url(); ?>assets/img/product/thumbnail/vanimasi-digito.jpg"></video>
                  <h3 class="list-title">Video Animasi - Dental Video Animation</h3>
              </div>

              <div class="list">
                  <video src="<?php echo base_url(); ?>assets/video/safety-induction.mp4" poster="<?php echo base_url(); ?>assets/img/product/thumbnail/vanimasi-dental.jpg" class="list-video"></video>
                  <h3 class="list-title">Video Animasi - Digito PresenT</h3>
              </div>

              <div class="list">
                  <video src="<?php echo base_url(); ?>assets/video/safety-induction.mp4" poster="<?php echo base_url(); ?>assets/img/product/thumbnail/vanimasi-safety.jpg" class="list-video"></video>
                  <h3 class="list-title">Video Animasi - Safety Induction</h3>
              </div>

            

            </div>

          </div>
        

    </section>


    <section class="animasi2">
      <div class="container">
        <div class="row d-flex justify-content-center mt-100 mb-100">
            <h3> <b> Alur Pengerjaan Video Animasi </b></h3>
            
            <div class="row d-flex justify-content-center mt-100 mb-100">  
                        <div class="col-lg-12">
                           <div class="card">
                               <ul class="list-style-none">
                                   <li class="d-flex no-block card-body">
                                       <i class=""><img style="width:75px" src="<?php echo base_url(); ?>assets/img/product/check/c1.png" style="" alt=""></i>
                                       <div style="margin-top:10px">
                                           <a class="m-b-0 font-medium p-0" data-abc="true">Materi pelatihan</a>
                                           <span class="">Kamu cukup mengirimkan materi pembelajaran, seperti format pdf, word, ppt dan lain-lain </span>
                                       </div>
                                   </li>
                                   <li class="d-flex no-block card-body">
                                       <i class=""><img style="width:75px" src="<?php echo base_url(); ?>assets/img/product/check/c2.png" alt=""></i>
                                       <div style="margin-top:10px">
                                           <a class="m-b-0 font-medium p-0" data-abc="true">Script</a>
                                           <span class=""> Pembuatan narasi dan alur cerita hingga menghasilkan alur materi yang mudah dipahami</span>
                                       </div>
                                
                                   </li>
                                   <li class="d-flex no-block card-body">
                                       <i class=""><img style="width:75px" src="<?php echo base_url(); ?>assets/img/product/check/c3.png" alt=""></i>
                                       <div style="margin-top:10px">
                                           <a class="m-b-0 font-medium p-0" data-abc="true">Storyboard</a>
                                           <span class="">Penambahan visual agar materi lebih jelas dan mudah dipahami </span>
                                       </div>
                                      
                                   </li>
        
                                   <li class="d-flex no-block card-body ">
                                       <i class=""><img style="width:75px" src="<?php echo base_url(); ?>assets/img/product/check/c4.png" alt=""></i>
                                       <div style="margin-top:10px">
                                           <a class="m-b-0 font-medium p-0" data-abc="true">Editing Offline & Online</a>
                                           <span class="">proses penyuntingan dan penambahan grafis mendukung materi pelatihan menjadi lebih mudah dipahami</span>
                                       </div>
                                       
                                   </li>
                               </ul>
                           </div>
   
                       </div>
                       </div>                
        </div>  
      </div>
    </section>

   




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
            <h4>Layanan</h4>
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
              <li><i class="bx bx-chevron-right"></i> <a href="<?php echo base_url(); ?>#">Tim Sales </a></li>
              
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

    <div class="container footer-bottom clearfix">
      <div class="copyright">
        &copy; Copyright <strong><span>Digito</span></strong>. All Rights Reserved
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="<?php echo base_url(); ?>#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-whatsapp"></i></a>

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
  <script src="<?php echo base_url(); ?>https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" ></script>
  <script>
    document.querySelectorAll('.play-video').forEach(videos => {
      videos.addEventListener('click', () => {
        var src = videos.getAttribute('src');
        document.querySelector('.vid').src = src;
      })
    })
  </script>
  <script src="/build/constrast-bootstrap-pro/js/cdb.js"></script>
  <script>
    // Open the Modal
    function openModal() {
      document.getElementById("myModal").style.display = "block";
    }

    // Close the Modal
    function closeModal() {
      document.getElementById("myModal").style.display = "none";
    }

    var slideIndex = 1;
    showSlides(slideIndex);

    // Next/previous controls
    function plusSlides(n) {
      showSlides(slideIndex += n);
    }

    // Thumbnail image controls
    function currentSlide(n) {
      showSlides(slideIndex = n);
    }

    function showSlides(n) {
      var i;
      var slides = document.getElementsByClassName("mySlides");
      var dots = document.getElementsByClassName("demo");
      var captionText = document.getElementById("caption");
      if (n > slides.length) {slideIndex = 1}
      if (n < 1) {slideIndex = slides.length}
      for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
      }
      for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
      }
      slides[slideIndex-1].style.display = "block";
      dots[slideIndex-1].className += " active";
      captionText.innerHTML = dots[slideIndex-1].alt;
    }

    var video_player = document.getElementById("video_player"),
    links = video_player.getElementsByTagName('a');
    for (var i=0; i<links.length; i++) {
      links[i].onclick = handler;
    }

    function handler(e) {
      e.preventDefault();
      videotarget = this.getAttribute("href");
      filename = videotarget.substr(0, videotarget.lastIndexOf('.')) || videotarget;
      video = document.querySelector("#video_player video");
      video.removeAttribute("controls");
      video.removeAttribute("poster");
      source = document.querySelectorAll("#video_player video source");
      source[0].src = filename + ".mp4";
      source[1].src = filename + ".webm";
      video.load();
      video.play();    
    }
    </script>
</body>
</html>