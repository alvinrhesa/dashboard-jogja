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
          <li><a class="nav-link scrollto active" href="<?php echo base_url('index.php/harga'); ?>">Harga</a></li>
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
  
  <!-- ======= Skills Section ======= -->
  <section id="harga" class="skills">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-lg-6 d-flex align-items-center" data-aos="fade-right" data-aos-delay="100">
            <img src="<?php echo base_url(); ?>assets/img/baru/bannerharga.png" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 content " data-aos="fade-left; margin-top:20px" data-aos-delay="100">
            <h3 style="margin-left:0px; padding-bottom:40px">Isi form berikut, untuk mengetahui harga <br> pembuatan konten</h3>
            

            <div class="skills-content">
            <!-- <img src="<?php echo base_url(); ?>assets/img/artboard.png" alt=""> -->
            <?php 
              echo $this->session->flashdata('email_sent'); 
              echo form_open('/Harga/SendMail'); 
            ?> 
            <form class="full" action="" method="post">
              
                <div class="form-group col-md-12">
                    <label for="exampleFormControlInput1"></label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Nama" required>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1"></label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Perusahaan" required>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1"></label>
                    <input type="tel" class="form-control" id="exampleFormControlInput1" placeholder="Nomer HP" required>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1"></label>
                    <input type="email" name="email" class="form-control" id="exampleFormControlInput1" placeholder="Email Perusahaan" required>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlSelect1"></label>
                    <select class="form-control" id="exampleFormControlSelect1">
                    <option value="" disabled selected hidden>Harga</option>
                    <option>Video Podcast</option>
                    <option>Video Shooting</option>
                    <option>Video Animasi</option>
                    <option>Modul Interaktif</option>
                    <option>Video Siap Pakai</option>
                    <option>Produk Lain</option>
                    <option></option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlSelect1"></label>
                    <select class="form-control" id="exampleFormControlSelect1">
                    <option value="" disabled selected hidden>Durasi Video</option>
                    <option>10 Menit</option>
                    <option>30 Menit</option>
                    <option>60 Menit</option>
                    <option>> 60 Menit</option>
                    <option></option>
                    </select>
                </div>
                
                <div class="form-group row">
                  <div class="col-sm-10">
                    <button name="" style="margin-top:20px; float:right;" type="submit" class="btn btn-danger mb-2">Kirim</button>
                  </div>
                </div>
                </form>
                <?php 
                  echo form_close(); 
                ?> 
            </div>

          </div>
        </div>

      </div>
    </section><!-- End Skills Section -->


    <div class="modal fade bd-example-modal-lg" id="" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          
        </div>
      </div>
    </div>

    <!-- ======= Frequently Asked Questions Section ======= -->

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
          <h2>Bisa kirimkan proposal kerjasama atau hubungi tim kami. Klik tombol </h2>
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
              <li><i class="bx bx-chevron-right"></i> <a href="<?php echo base_url(); ?>#">Email</a></li>
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
    </script>
</body>
</html>