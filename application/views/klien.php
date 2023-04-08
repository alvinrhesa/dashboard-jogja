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
          <li><a class="nav-link scrollto active" href="<?php echo base_url('index.php/klien'); ?>">Klien</a></li>
          <li><a class="nav-link scrollto" href="<?php echo base_url('index.php/harga'); ?>">Harga</a></li>
          <li><a class="nav-link scrollto" href="<?php echo base_url('index.php/tentang'); ?>#">Tentang Kami</a></li>
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
  <section id="pricing" class="pricing">
      <div class="container" data-aos="fade-up">
        <div class="row">
        <div class="section-title">
          <h2 style="margin-bottom:10px">Testimoni</h2>
        </div>
          <div class="col-12 col-lg-12 center" data-aos="fade-up" data-aos-delay="100">
            <div class="row row-cols-1 row-cols-md-1 g-4">
              <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">

                  <div class="carousel-item active" data-bs-interval="10000" data-pause="hover">
                    <div class="row">
                      <div class="col">
                        <div class="card h-100">
                          <div class="card-body">
                            <p class="card-text">
                            Kerjasama dengan digito untuk pembuatan video learning, hasil videonya memuaskan, dan yang pasti staf yang ada di digito ramah banget dan siap membantu ketika ada part-part yang masih perlu disesuaikan. Selama proses pembuatan video dapat berjalan dengan baik. Terima kasih.
                            </p>
                            <div class="topcenter">
                              <p style="margin-top:40px">
                              <img src="<?php echo base_url(); ?>assets/img/man.png" class="card-img-top img-fluid" alt="">
                              <div class="stars">
                                <i class="bi bi-star-fill icon-yellow"></i>
                                <i class="bi bi-star-fill icon-yellow"></i>
                                <i class="bi bi-star-fill icon-yellow"></i>
                                <i class="bi bi-star-fill icon-yellow"></i>
                                <i class="bi bi-star-fill icon-yellow"></i>
                              </div>
                              <!-- <h5 class="card-title"><b>Andi Lukman</b></h5> -->
                              <strong style="color:#d3261e">Andi Lukman</strong><br>
                              <small class="text-muted">Assistant Manager</small><br>
                              <small class="text-muted txt">Bank Rakyat Indonesia
                              </small>
                              </p>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-4 col-md-12">
                        <div class="card h-100">
                          <div class="card-body">
                            <p class="card-text">Digito sangat detail dalam membuat video. Terima kasih Digito. <span style="color:#ffff"> asjnjdsajdjasdjs
                              djskadjsdkajsdkjad</span>
                              <br><br><br><br><br><br>
                            </p>
                            <p style="margin-bottom:10px">
                            <img src="<?php echo base_url(); ?>assets/img/man.png" class="card-img-top img-fluid" alt="">
                            <div class="stars">
                              <i class="bi bi-star-fill icon-yellow"></i>
                              <i class="bi bi-star-fill icon-yellow"></i>
                              <i class="bi bi-star-fill icon-yellow"></i>
                              <i class="bi bi-star-fill icon-yellow"></i>
                              <i class="bi bi-star-fill icon-yellow"></i>
                            </div>
                            <strong style="color:#d3261e">Heri Susianto</strong><br>
                            <!-- <h5 class="card-title"><b>Heri Susianto</b></h5> -->
                            <small class="text-muted">Kepala Departemen Transformation</span></small><br>
                            <small class="text-muted txt">Pegadaian</small>
                            </p>
                          </div>
                        </div>
                      </div>
                      <div class="col">
                        <div class="card h-100">
                          <div class="card-body">
                            <p class="card-text">Digito bisa memberikan advice dan solusi untuk kami di Manulife. Kerjasama erat dan komunikasi sangat lancar.
                              <br><br><br><br><br>
                            </p>
                            <p style="margin-top:40px">
                            <img src="<?php echo base_url(); ?>assets/img/man.png" class="card-img-top img-fluid" alt="">
                            <div class="stars">
                              <i class="bi bi-star-fill icon-yellow"></i>
                              <i class="bi bi-star-fill icon-yellow"></i>
                              <i class="bi bi-star-fill icon-yellow"></i>
                              <i class="bi bi-star-fill icon-yellow"></i>
                              <i class="bi bi-star-fill icon-yellow"></i>
                            </div>
                            <!-- <h5 class="card-title"><b>Gandung Bimananta</b></h5> -->
                            <strong style="color:#d3261e">Gandung Bimananta</strong><br>
                            <small class="text-muted">Program Development</small><br>
                            <small class="text-muted txt">Manulife indonesia </small>
                            </p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="carousel-item" data-bs-interval="10000">
                    <div class="row">
                      <div class="col">
                        <div class="card h-100">
                          <div class="card-body">
                            <p class="card-text">
                              Digito memberikan pelayanan dengan sangat baik. Setiap tahapan dari proses pembuatan video learning dijelaskan dengan sangat baik dan dengan sabar menunggu feedback dari users yang terkadang lewat dari timeline. <br><br>Komunikasi pun sangat terbuka dan hasil dari video learning pun berkualitas bagus. Fleksibilitas dan kerja sama antara tim Digito juga sangat tercermin termasuk penawaran yang menarik yang dapat digunakan untuk selanjutnya. Sangat puas bekerja sama dengan Digito.</p>
                            <p style="margin-top: 40px; ">
                              <img src="<?php echo base_url(); ?>assets/img/woman.png" class="card-img-top img-fluid" alt="">
                              <div class="stars">
                                <i class="bi bi-star-fill icon-yellow"></i>
                                <i class="bi bi-star-fill icon-yellow"></i>
                                <i class="bi bi-star-fill icon-yellow"></i>
                                <i class="bi bi-star-fill icon-yellow"></i>
                                <i class="bi bi-star-fill icon-yellow"></i>
                              </div>
                              <!-- <h5 class="card-title"><b>Stephanie Harto</b></h5> -->
                              <strong style="color:#d3261e">Stephanie Harto</strong><br>
                              <small class="text-muted">Learning & Enrichment Lead</small><br>
                              <small class="text-muted txt">Dana Indonesia
                              </small>
                            </p>
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-4 col-md-4">
                        <div class="card h-100">
                          <div class="card-body">
                            <p class="card-text">
                            Koordinasi sangat baik dan fast response, meskipun ada beberapa kendala selama proses persiapannya, namun video edukasi yang diproduksi berhasil di deliver dengan baik dan sesuai ekspektasi.
                            <span style="color:#ffff"> asjnjdsajdjasdjs
                              djskadjsdkajsdkjad</span>
                            <br><br><br><br><br><br><br>
                            </p>
                            <p style="margin-bottom:10px">
                            <img src="<?php echo base_url(); ?>assets/img/woman.png" class="card-img-top img-fluid" alt="">
                            <div class="stars">
                              <i class="bi bi-star-fill icon-yellow"></i>
                              <i class="bi bi-star-fill icon-yellow"></i>
                              <i class="bi bi-star-fill icon-yellow"></i>
                              <i class="bi bi-star-fill icon-yellow"></i>
                              <i class="bi bi-star-fill icon-yellow"></i>
                            </div>
                            <!-- <h5 class="card-title"><b>Khairani Pamudji</b></h5> -->
                            <strong style="color:#d3261e">Khairani Pamudji</strong><br>
                            <small class="text-muted">Merchant Training Success</small><br>
                            <small class="text-muted txt">Lummo Indonesia</small>
                            </p>
                          </div>
                        </div>
                      </div>
                      <!-- <div class="col">
                        <div class="card h-100">
                          <div class="card-body">
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            <p>
                            <img src="<?php echo base_url(); ?>assets/img/man.png" class="card-img-top img-fluid" alt="">
                            <div class="stars">
                              <i class="bi bi-star-fill"></i>
                              <i class="bi bi-star-fill"></i>
                              <i class="bi bi-star-fill"></i>
                              <i class="bi bi-star-fill"></i>
                              <i class="bi bi-star"></i>
                            </div>
                            <h5 class="card-title">Bri God</h5>
                            <small class="text-muted">Last updated 3 mins ago</small>
                            </p>
                          </div>
                        </div>
                      </div> -->
                    </div>
                  </div>
                </div>
              </div>
              
              
              <!-- <div class="col">
                <div class="card h-100">
                  <div class="card-body">
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    <p>
                    <img src="<?php echo base_url(); ?>assets/img/woman.png" class="card-img-top img-fluid" alt="">
                    <div class="stars">
                      <i class="bi bi-star-fill"></i>
                      <i class="bi bi-star-fill"></i>
                      <i class="bi bi-star-fill"></i>
                      <i class="bi bi-star-fill"></i>
                      <i class="bi bi-star"></i>
                    </div>
                    <h5 class="card-title">Bri God</h5>
                    <small class="text-muted">Last updated 3 mins ago</small>
                    </p>
                  </div>
                </div>
              </div> -->
              <!-- <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button> -->
              <div class="col-lg-12 col-md-6">
                <a class="btn btn-light mb-3 mr-1 position-relative " class="carousel-control-prev" role="button" data-bs-slide="prev" data-bs-target="#carouselExampleInterval">
                    <i class="fa fa-arrow-right"></i>
                </a>
                <a class="btn btn-light mb-3 " class="carousel-control-next" role="button" data-bs-slide="next" data-bs-target="#carouselExampleInterval">
                    <i class="fa fa-arrow-left"></i>
                </a>
            </div>
          </div>

      </div>
    </section>
    
    
    <section id="clients" class=" section">
      <div class="container">
      <div class="section-title">
          <h2>Klien Digito</h2>
        </div>
        <img src="<?php echo base_url(); ?>assets/img/bannerklien2.png" class="img-fluid text-center" alt="">
        <div class="row" >
          <img src="<?php echo base_url(); ?>assets/img/bannerklien2.png" class="img-fluid text-center" alt="">
          
              <!-- <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                <img src="<?php echo base_url(); ?>assets/img/clients/client-1.png" class="img-fluid" alt="">
              </div>

              <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                <img src="<?php echo base_url(); ?>assets/img/clients2/Pegadaian.png" class="img-fluid" alt="">
              </div>

              <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                <img src="<?php echo base_url(); ?>assets/img/clients2/Taspen.png" class="img-fluid" alt="">
              </div>  
         

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="<?php echo base_url(); ?>assets/img/clients/client-4.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="<?php echo base_url(); ?>assets/img/clients2/Pos.png" class="img-fluid" alt="">
          </div>
          

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="<?php echo base_url(); ?>assets/img/clients2/Astra.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="<?php echo base_url(); ?>assets/img/clients2/Manulife.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="<?php echo base_url(); ?>assets/img/clients/client-31.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="<?php echo base_url(); ?>assets/img/clients2/Radana.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="<?php echo base_url(); ?>assets/img/clients/client-7.png" class="img-fluid" alt="">
          </div>


          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="<?php echo base_url(); ?>assets/img/clients/client-8.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="<?php echo base_url(); ?>assets/img/clients2/PermataBank.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="<?php echo base_url(); ?>assets/img/clients/client-10.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="<?php echo base_url(); ?>assets/img/clients/client-34.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="<?php echo base_url(); ?>assets/img/clients/client-11.png" class="img-fluid" alt="">
          </div>

          

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="<?php echo base_url(); ?>assets/img/clients2/Linknet.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="<?php echo base_url(); ?>assets/img/clients2/Tokopedia.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="<?php echo base_url(); ?>assets/img/clients/client-14.webp" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="<?php echo base_url(); ?>assets/img/clients/client-33.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="<?php echo base_url(); ?>assets/img/clients2/tiket.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="<?php echo base_url(); ?>assets/img/clients2/Traveloka.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="<?php echo base_url(); ?>assets/img/clients2/Dana.png" class="img-fluid" alt="">
          </div>
          
          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="<?php echo base_url(); ?>assets/img/clients/client-29.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="<?php echo base_url(); ?>assets/img/clients2/erajaya.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="<?php echo base_url(); ?>assets/img/clients2/frisian-flag.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="<?php echo base_url(); ?>assets/img/clients/client-19.webp" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="<?php echo base_url(); ?>assets/img/clients/client-20.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="<?php echo base_url(); ?>assets/img/clients2/Ajinomoto.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="<?php echo base_url(); ?>assets/img/clients2/Cigna.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="<?php echo base_url(); ?>assets/img/clients/client-23.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="<?php echo base_url(); ?>assets/img/clients/client-24.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="<?php echo base_url(); ?>assets/img/clients2/BNI.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="<?php echo base_url(); ?>assets/img/clients2/Sinarmas.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="<?php echo base_url(); ?>assets/img/clients2/Binus.png" class="img-fluid" alt="">
          </div>
          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="<?php echo base_url(); ?>assets/img/clients/client-32.png" class="img-fluid" alt="">
          </div>

          


          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="<?php echo base_url(); ?>assets/img/clients2/Seras.png" class="img-fluid" alt="">
          </div>


         
         

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="<?php echo base_url(); ?>assets/img/clients2/Smilexpress.png" class="img-fluid" alt="">
          </div> -->

          
          

        </div>

      </div>
    </section><!-- End Cliens Section -->

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