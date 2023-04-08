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
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/owl.carousel.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/5.3.45/css/materialdesignicons.css" integrity="sha256-NAxhqDvtY0l4xn+YVa6WjAcmd94NNfttjNsDmNatFVc=" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
  

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
          <li><a class="nav-link scrollto" href="<?php echo base_url('index.php/harga'); ?>">Harga</a></li>
          <li><a class="nav-link scrollto active" href="<?php echo base_url('index.php/tentang'); ?>">Tentang Kami</a></li>
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

    <!-- ======= Skills Section ======= -->
  <section id="skillsh" class="skillsh">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-lg-6 d-flex align-items-center" data-aos="fade-right" data-aos-delay="100">
            <img style="width:90%" src="<?php echo base_url(); ?>assets/img/tentangkami/tentangkami1.png" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 content " data-aos="fade-left; margin-top:100px" data-aos-delay="100">
            <h2 style="color:#d3261e; font-size: 30px; margin-left:0px; margin-top:50px; padding-bottom:10px;">Perjalanan Digito</h2>
            <p style="font-size:17px; text-align:justify">
            Berdiri pada tahun 2019, Digito hadir sebagai solusi pengembang materi pelatihan dan pembelajaran karyawan menjadi
            Digital Learning yang lebih interaktif dan 
            efektif dalam bentuk visual, audio dan video sesuai dengan kebutuhan perusahaan.
            <br> <br>
            Setiap layanan yang diberikan, Digito menawarkan pengalaman baru sesuai dengan trend dan 
            teknologi saat ini yang menggapai seluruh lingkungan Digital Learning
            </p>
            

            <div class="skills-content">
            

            </div>

          </div>
          
        </div>

      </div>
    </section> 
    
    <!-- End Skills Section -->
    
    <section id="skillsh" class="skillsh section-bg">
      <div class="container" data-aos="fade-up">

        <div class="row">
          
          <div class="col-lg-6 pt-4 pt-lg-0 content " data-aos="fade-left;" data-aos-delay="100">
            
            <p>
             <span style="color:red; font-weight: 600; font-size:30px">3+ tahun</span> <span style="font-size:17px; color:black; font-weight:100px">  Digito melayani lebih dari 30+ perusahaan diseluruh Indonesia. Lihat apa yang klien kami katakan!</span>
            </p>
            <div class="d-flex justify-content-center justify-content-lg-start">
              <a href="<?php echo base_url('index.php/klien'); ?>" class="btn-get-started scrollto">Klien</a>
            </div>
            <div class="skills-content">
            

            </div>

          </div>
          <div class="col-lg-6 d-flex align-items-center" data-aos="fade-right" data-aos-delay="100">
            <img style="" src="<?php echo base_url(); ?>assets/img/tentangkami/customer-love1.png" class="img-fluid" alt="">
          </div>
          
        </div>

      </div>
    </section><!-- End Skills Section -->

    <!-- add on -->

    <section id="" class="addon">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2 style="font-size:25px">Tidak hanya membuat konten Digital Learning, <br> Digito juga memberikan nilai disetiap layanan</h2>
          <p>
                <span>Nilai-nilai yang ingin Digito berikan disetiap konten Digital Learning yang dibuat </span>
                
          </p>
        </div>

        <div class="row">

          <!-- <div class="col-lg-6">
            <div class="member d-flex align-items-start" data-aos="zoom-in" data-aos-delay="100">
              <div class="pic"><img src="<?php echo base_url(); ?>assets/img/tentangkami/icon-good-deal.png" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Good Deal </h4>
                <span>Penawaran dan pelayanan yang terbaik akan selalu diberikan walaupun projek telah selesai</span>
              </div>
            </div>
          </div> -->
          <div class="col-lg-6 card border-0" data-aos="zoom-in" data-aos-delay="400">
            <div class="card-body border-0 ">
              <img src="<?php echo base_url(); ?>assets/img/tentangkami/icon-good-deal.png" class="img-fluid" alt="">
              <h4 style="color:#d3261e; font-weight:700">Penawaran Terbaik </h4>
              <span>Penawaran dan pelayanan yang terbaik akan selalu diberikan walaupun proyek telah selesai</span>
            </div>
          </div>

          <div class="col-lg-6 card border-0" data-aos="zoom-in" data-aos-delay="400">
            <div class="card-body">
              <img src="<?php echo base_url(); ?>assets/img/tentangkami/icon-best-quality.png" class="img-fluid" alt="">
              <h4 style="color:#d3261e; font-weight:700">Kualitas Unggul</h4>
                <span style="text-align:justify">Hasil Digital Learning sesuai dengan ekspektasi, detail, jelas, lengkap dan kemampuannya menyederhanakan
                  hal rumit dan membuat belajar menjadi lebih menyenangkan
                </span>
            </div>
          </div>

          <div class="col-lg-6 card border-0" data-aos="zoom-in" data-aos-delay="400">
            <div class="card-body">
              <img src="<?php echo base_url(); ?>assets/img/tentangkami/icon-advice.png" class="img-fluid" alt="">
              <h4 style="color:#d3261e; font-weight:700">Solusi Terbaik</h4>
              <span>Memberi solusi dan saran terbaik di setiap tahap produksi Digital Learning</span>
            </div>
          </div>

          <div class="col-lg-6 card border-0" data-aos="zoom-in" data-aos-delay="400">
            <div class="card-body">
              <img src="<?php echo base_url(); ?>assets/img/tentangkami/icon-ontime.png" class="img-fluid" alt="">
              <h4 style="color:#d3261e; font-weight:700">Tepat Waktu</h4>
                <span>Proyek diselesaikan tepat waktu sesuai dengan kebutuhan klien</span>
            </div>
          </div>

          <div class="col-lg-6 card border-0" data-aos="zoom-in" data-aos-delay="400">
            <div class="card-body">
              <img src="<?php echo base_url(); ?>assets/img/tentangkami/icon-guarantee.png" class="img-fluid" alt="">
              <h4 style="color:#d3261e; font-weight:700">Komunikatif</h4>
                <span>Komunikasi yang baik dan respon yang cepat dari tim penjualan dan produksi untuk mempercepat penyelesaian kendala
                  di setiap proyek
                </span>
            </div>
          </div>

          <div class="col-lg-6 card border-0" data-aos="zoom-in" data-aos-delay="400">
            <div class="card-body">
              <img src="<?php echo base_url(); ?>assets/img/baru/produklain-2.png" class="img-fluid" alt="">
              <h4 style="color:#d3261e; font-weight:700">Fleksibel</h4>
                <span>Untuk tetap memberikan pelayanan yang terbaik, Digito siap 
                  membantu memberikan solusi teknis dan perbaikan disetiap proyek Digital Learning. 
                </span>
            </div>
          </div>


          <!-- <div class="col-lg-6">
            <div class="member d-flex align-items-start" data-aos="zoom-in" data-aos-delay="300">
              <div class="pic"><img src="<?php echo base_url(); ?>assets/img/tentangkami/icon-best-quality.png" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Best Quality</h4>
                <span>Hasil video selesai sesuai dengan ekspektasi, detail, jelas, lengkap dan kemampuannya menyederhanakan
                  hal rumit dan membuat pembelajaran jadi lebih menyenangkan
                </span>
              </div>
            </div>
          </div> -->

          <!-- <div class="col-lg-6 mt-4">
            <div class="member d-flex align-items-start" data-aos="zoom-in" data-aos-delay="400">
              <div class="pic"><img src="<?php echo base_url(); ?>assets/img/tentangkami/icon-advice.png" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Advice</h4>
                <span>Memberi solusi dan saran terbaik di setiap tahap produksi video training</span>
              </div>
            </div>
          </div> -->

          <!-- <div class="col-lg-6 mt-4">
            <div class="member d-flex align-items-start" data-aos="zoom-in" data-aos-delay="400">
              <div class="pic"><img src="<?php echo base_url(); ?>assets/img/tentangkami/icon-ontime.png" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>On Time</h4>
                <span>Proyek diselesaikan ontime sesuai dengan timelane yang dibuat oleh tim produksi dan klien</span>
              </div>
            </div>
          </div> -->

          <!-- <div class="col-lg-6 mt-4">
            <div class="member d-flex align-items-start" data-aos="zoom-in" data-aos-delay="400">
              <div class="pic"><img src="<?php echo base_url(); ?>assets/img/tentangkami/icon-guarantee.png" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Active Communication</h4>
                <span>Komunikasi yang baik dan fast respond dari tim sales untuk mempermudah penyelesaian kendala
                  di setiap projek
                </span>
              </div>
            </div>
          </div>

          <div class="col-lg-6 mt-4">
            <div class="member d-flex align-items-start" data-aos="zoom-in" data-aos-delay="400">
              <div class="pic"><img src="<?php echo base_url(); ?>assets/img/baru/produklain-2.png" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Fleksible</h4>
                <span>Untuk tetap memberikan pelayanan yang terbaik, tim digito siap 
                  membantu permasalahan teknis maupun melakukan perbaikan terhadap materi video training walaupun telah selesai dari kontrak pengerjaan. 
                </span>
              </div>
            </div>
          </div> -->

        </div>

      </div>
    </section><!-- End Format Konten Section -->



    

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
        <h1>Tertarik Menjadi Mitra Bisnis Digito?</h1>
          <h2>Bisa kirimkan proposal kerjasama atau hubungi tim kami. Klik tombol</h2>
          <div class="d-flex justify-content-center justify-content-lg-start">
            <a href="https://mail.google.com/mail/?view=cm&fs=1&to=hello@digito.id" class="btn-get-started scrollto">Kontak</a>
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