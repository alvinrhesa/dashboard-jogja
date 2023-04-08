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
  

  <!-- Template Main CSS File -->
  <link href="<?php echo base_url(); ?>assets/css/style.css" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/font-awesome.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/magnific-popup.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/owl.carousel.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/animate.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/nice-select.css">	
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/linearicons.css">
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
          <li><a class="nav-link scrollto" href="<?php echo base_url('index.php/tentang'); ?>">Tentang Kami</a></li>
          <li><a class="nav-link scrollto" href="<?php echo base_url('index.php/blog'); ?>">Blog</a></li>
          <li><a class="nav-link scrollto active" href="<?php echo base_url(); ?>#contact">Karir</a></li>
          
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div> 
  </header><!-- End Header -->

  <!-- Modal -->
	<div class="modal fade" id="exampleModal11" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
  	

	<!-- Modal -->
	<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-dialog-scrollable modal-xl">
		<div class="modal-content">
		<div class="modal-header">
			<h5 class="modal-title text-center" id="exampleModalLabel">Job Description</h5>
			<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
		</div>
		<div class="modal-body">
			<section class="post-area section-gap1" >
				<div class="container">
					<div class="col-lg-12 col-sm-12 post-list">
						<div class="single-post d-flex flex-row">
							<span>Admin Sales &nbsp;&nbsp; |</span> 
							<span>&nbsp;&nbsp; Work from Office &nbsp;&nbsp; |</span>
							<span> &nbsp;&nbsp; Probation 3 months &nbsp;&nbsp;</span> 
						</div>
						<div class="single-post job-experience">
								<h4 class="single-title">Requirements</h4>
								<ol>
									<li>
										
										<span>Female</span>
									</li>
									<li>
										
										<span>Maximum 25 years old</span>
									</li>
									<li>
										
										<span>Bachelor's Degree from any major, preferably have work experience</span>
									</li>	
									<li>
										
										<span>Able to operate Google Drive, Google Workspace (Spreadsheet, Docs, etc), Ms.Office (Ms.Word & Ms.Excel)</span>
									</li>
									<li>
										
										<span>Good and detail administrative skill</span>
									</li>
									<li>
										
										<span>Good and detail administrative skill</span>
									</li>	
									<li>
										
										<span>Good communicative skill</span>
									</li>																											
								</ol>
							</div>
							<div class="single-post job-experience">
								<h4 class="single-title">Job Description</h4>
								<ol>
									<li>
										
										<span>Maintaining good relationships with existing clients </span>
									</li>
									<li>
										
										<span>Work closely with the Sales B2B and finance team</span>
									</li>
									<li>
										
										<span>
										Creating, monitoring and checking the completeness Sales B2B activity and coordinate with existing clients in the payment process. E.g: Preparing all Agreement, Berita Acara Serah Terima (BAST), Invoice, Tax Invoice, receipt, and requesting Purchase Order (PO) & Withholding Tax Slip for existing clients
										</span>
									</li>	
									<li>
										
										<span>Contribute to Sales B2B projects</span>
									</li>													
								</ol>
							</div>	
					</div>
				</div>
			</section>
		</div>
		<div class="modal-footer">
			
			<a type="button" class="btn btn-danger" href="https://mail.google.com/mail/?view=cm&fs=1&to=hello@digito.id&su=Admin Sales">Apply now</a>
		</div>
		</div>
	</div>
	</div>

	<div class="modal fade" id="exampleModal3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-dialog-scrollable modal-xl">
		<div class="modal-content">
		<div class="modal-header">
			<h5 class="modal-title text-center" id="exampleModalLabel">Job Description</h5>
			<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
		</div>
		<div class="modal-body">
			<section class="post-area section-gap1" >
				<div class="container">
					<div class="col-lg-12 post-list">
						<div class="single-post d-flex flex-row">
							<span>Customer Succes Associate &nbsp;&nbsp; |</span> 
							<span>&nbsp;&nbsp; Work from Office &nbsp;&nbsp; |</span>
							<span> &nbsp;&nbsp; Probation 3 months &nbsp;&nbsp;</span> 
						</div>
						<div class="single-post job-experience">
								<h4 class="single-title">Requirements</h4>
								<ol>
									<li>
										
										<span>Female maximum age 25 years old</span>
									</li>
									<li>
										
										<span>Fresh graduate or bachelor of any major</span>
									</li>
									<li>
										
										<span>Able to work as a team</span>
									</li>	
									<li>
										
										<span>Fast learner and attention to detail</span>
									</li>
									<li>
										
										<span>Good communication skill and attitude</span>
									</li>
									<li>
										
										<span>Fast response and proactively provide clear communication upon any changing prioritie</span>
									</li>	
									<li>
										
										<span>Have knowledge or interest in Shooting video</span>
									</li>																											
								</ol>
							</div>
							<div class="single-post job-experience">
								<h4 class="single-title">Job Description</h4>
								<ol>
									<li>
										
										<span>Creating, updating, and monitoring project timeline</span>
									</li>
									<li>
										
										<span>Responded to additional detail request from client</span>
									</li>
									<li>
										
										<span>
										Sending materials (Script, Storyboard, Video, Timeline, Design, Backsound, etc) to client
										</span>
									</li>	
									<li>
										
										<span>Follow up feedback and approval materials from client and partner</span>
									</li>	
									<li>
										
										<span> Coordination with production team for sending materials to client</span>
									</li>	
									<li>
										
										<span> Coordination and report to business team throughout the Project is running</span>
									</li>	
									
																					
								</ol>
							</div>	
					</div>
				</div>
			</section>
		</div>
		<div class="modal-footer">
			
			<a type="button" class="btn btn-danger" href="https://mail.google.com/mail/?view=cm&fs=1&to=hello@digito.id&su=Learning Spesialist">Apply now</a>
		</div>
		</div>
	</div>
	</div>

	<div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-dialog-scrollable modal-xl">
		<div class="modal-content">
		<div class="modal-header">
			<h5 class="modal-title text-center" id="exampleModalLabel">Job Description</h5>
			<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
		</div>
		<div class="modal-body">
			<section class="post-area section-gap1" >
				<div class="container">
					<div class="col-lg-12 post-list">
						<div class="single-post d-flex flex-row">
							<span>Learning Specialist  &nbsp;&nbsp; |</span> 
							<span>&nbsp;&nbsp; Work from Home &nbsp;&nbsp; |</span>
							<span> &nbsp;&nbsp; Probation 3 months &nbsp;&nbsp;</span> 
						</div>
						<div class="single-post job-experience">
								<h4 class="single-title">Responsibilities</h4>
								<ol>
									<li>
										
										<span>Review initial material from client & Subject Matter Expert (Module, key learning, syllabus) for each learning topic</span>
									</li>
									<li>
										
										<span>Identify learning targets, analyze abilities, knowledge, and behavior of learners</span>
									</li>
									<li>
										
										<span>Collaborate with SME to produce script or pointer for shooting needs</span>
									</li>	
									<li>
										
										<span>Help SME develop structured course materials</span>
									</li>
									<li>
										
										<span>Creating key learning point based on module, quiz, assignment and learning flow</span>
									</li>
									<li>
										
										<span>Responsible for maintaining content quantity & quality further research of the content if needed</span>
									</li>	
																																			
								</ol>
							</div>
							<div class="single-post job-experience">
								<h4 class="single-title">Requirements</h4>
								<ol>
									<li>
										
										<span>Bachelor's degree in literature majors, Education, communication, or related field Curious to gain more knowledge from the content</span>
									</li>
									<li>
										
										<span>Experienced in conducting Training Need Analysis</span>
									</li>
									<li>
										
										<span>
											Experienced in delivering end-to-end learning or training activities
										</span>
									</li>	
									<li>
										
										<span>Pay attention to details</span>
									</li>
									<li>
										
										<span>Good work ethics</span>
									</li>
									<li>
										
										<span>Good communication skills Manage time effectively, able to multitask and meet deadlines</span>
									</li>
									<li>
										
										<span>Previous work experience as a learning content writer is a plus</span>
									</li>													
								</ol>
							</div>	
					</div>
				</div>
			</section>
		</div>
		<div class="modal-footer">
			
			<a type="button" class="btn btn-danger" href="https://mail.google.com/mail/?view=cm&fs=1&to=hello@digito.id&su=Customer Success Associate">Apply now</a>
		</div>
		</div>
	</div>
	</div>

	<div class="modal fade" id="exampleModal4" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-dialog-scrollable modal-xl">
		<div class="modal-content">
		<div class="modal-header">
			<h5 class="modal-title text-center" id="exampleModalLabel">Job Description</h5>
			<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
		</div>
		<div class="modal-body">
			<section class="post-area section-gap1" >
				<div class="container">
					<div class="col-lg-12 post-list">
						<div class="single-post d-flex flex-row">
							<span>Quality Assurance for Training Video  &nbsp;&nbsp; |</span> 
							<span>&nbsp;&nbsp; Work from Home &nbsp;&nbsp; |</span>
							<span> &nbsp;&nbsp;  &nbsp;&nbsp;</span> 
						</div>
						<div class="single-post job-experience">
								<h4 class="single-title">Criteria</h4>
								<ol>
									<li>
										
										<span>Female, single (not married yet)</span>
									</li>
									<li>
										
										<span>Bachelor Degree, all majors</span>
									</li>
									<li>
										
										<span>Have a good communication skill</span>
									</li>	
									<li>
										
										<span>High-oriented on details</span>
									</li>
									<li>
										
										<span>Have excellent knowledge in script (Indonesia and English) and design for training video (especially animation video)</span>
									</li>
									<li>
										
										<span>Able to work independently and team</span>
									</li>	
																																			
								</ol>
							</div>
							<div class="single-post job-experience">
								<h4 class="single-title">Job Description</h4>
								<ol>
									<li>
										
										<span>Quality assurance script, storyline, storyboard, and video</span>
									</li>
									<li>
										
										<span>Coordination with production team, CSA, and vendor</span>
									</li>
																				
								</ol>
							</div>	
					</div>
				</div>
			</section>
		</div>
		<div class="modal-footer">
			
			<a type="button" class="btn btn-danger" href="https://mail.google.com/mail/?view=cm&fs=1&to=project@digito.id&su=Quality Assurance for Training Video">Apply now</a>
		</div>
		</div>
	</div>
	</div>

	<div class="modal fade" id="exampleModal5" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-dialog-scrollable modal-xl">
		<div class="modal-content">
		<div class="modal-header">
			<h5 class="modal-title text-center" id="exampleModalLabel">Job Description</h5>
			<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
		</div>
		<div class="modal-body">
			<section class="post-area section-gap1" >
				<div class="container">
					<div class="col-lg-12 post-list">
						<div class="single-post d-flex flex-row">
							<span>Sales Development Representative  &nbsp;&nbsp; |</span> 
							<span>&nbsp;&nbsp; Work from Office &nbsp;&nbsp; |</span>
							<span> &nbsp;&nbsp;  &nbsp;&nbsp;</span> 
						</div>
						<div class="single-post job-experience">
								<h4 class="single-title">Criteria</h4>
								<ol>
									<li>
										
										<span>Female, Fresh Graduate from all Major</span>
									</li>
									<li>
										
										<span>Good Organizational and Communication skills</span>
									</li>
									<li>
										
										<span>Focus on the daily and monthly target</span>
									</li>	
									<li>
										
										<span>Can work with other teams of the inside or outside sales team to help them reach target prospects</span>
									</li>
									
																																			
								</ol>
							</div>
							<div class="single-post job-experience">
								<h4 class="single-title">Responsibilities</h4>
								<ol>
									<li>
										
										<span>Sourcing new sales opportunities through emails, social media, and partner strategies on a daily basis</span>
									</li>
									<li>
										
										<span>Implement strategies and programs to increase sales target</span>
									</li>
									<li>
										
										<span>Maintain a good relationship with customers and partner</span>
									</li>
																				
								</ol>
							</div>	
					</div>
				</div>
			</section>
		</div>
		<div class="modal-footer">
			
			<a type="button" class="btn btn-danger" href="https://mail.google.com/mail/?view=cm&fs=1&to=hello@digito.id&su=Sales Development Representative">Apply now</a>
		</div>
		</div>
	</div>
	</div>

	<div class="modal fade" id="exampleModal6" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-dialog-scrollable modal-xl">
		<div class="modal-content">
		<div class="modal-header">
			<h5 class="modal-title text-center" id="exampleModalLabel">Job Description</h5>
			<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
		</div>
		<div class="modal-body">
			<section class="post-area section-gap1" >
				<div class="container">
					<div class="col-lg-12 post-list">
						<div class="single-post d-flex flex-row">
							<span>Full Stack Web Developer  &nbsp;&nbsp; |</span> 
							<span>&nbsp;&nbsp; Work from Home &nbsp;&nbsp; |</span>
							<span> &nbsp;&nbsp;  &nbsp;&nbsp;</span> 
						</div>
						<div class="single-post job-experience">
								<h4 class="single-title">Job Description</h4>
								<ol>
									<li>
										
										<span>Proficiency in converting a design to a web interface and has a good design sense</span>
									</li>
									<li>
										
										<span>Developing and testing UI/UX for the mobile and desktop web version</span>
									</li>
									<li>
										
										<span>Creating report related to web development projects</span>
									</li>	
									<li>
										
										<span>Responsible for maintaining and developing all features of the website </span>
									</li>
									<li>
										
										<span>Plan and execute data model structures for scalability  </span>
									</li>
									
																																			
								</ol>
							</div>
							<div class="single-post job-experience">
								<h4 class="single-title">Qualification</h4>
								<ol>
									<li>
										
										<span>Min s1 education, majoring in informatics engineering, information systems, computer engineering or equivalent</span>
									</li>
									<li>
										
										<span>Freshgraduate or final year students are welcome </span>
									</li>
									<li>
										
										<span>Having in depth knowledge of PHP, HTML, CSS, Java Script, Framework Codeigniter, MySQL and Web Development</span>
									</li>
									<li>
										
										<span>Enjoy working remotely or Work From Home</span>
									</li>
									<li>
										<span>
										Excellent communication and teamwork skills
										</span>
									</li>
									<li>
										<span>Great attention to detail</span>
									</li>
																				
								</ol>
							</div>	
					</div>
				</div>
			</section>
		</div>
		<div class="modal-footer">
			
			<a type="button" class="btn btn-danger" href="https://mail.google.com/mail/?view=cm&fs=1&to=marketing@digito.id&su=Full Stack Developer">Apply now</a>
		</div>
		</div>
	</div>
	</div>

	<div class="modal fade" id="exampleModal7" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-dialog-scrollable modal-xl">
		<div class="modal-content">
		<div class="modal-header">
			<h5 class="modal-title text-center" id="exampleModalLabel">Job Description</h5>
			<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
		</div>
		<div class="modal-body">
			<section class="post-area section-gap1" >
				<div class="container">
					<div class="col-lg-12 post-list">
						<div class="single-post d-flex flex-row">
							<span>Quality Control Training Animated Video   &nbsp;&nbsp; |</span> 
							<span>&nbsp;&nbsp; Work from Home &nbsp;&nbsp; </span>
							<span> &nbsp;&nbsp;  &nbsp;&nbsp;</span> 
						</div>
						<div class="single-post job-experience">
								<h4 class="single-title">Requirements</h4>
								<ol>
									<li>
										
										<span>Male or Female, max 25 years old.</span>
									</li>
									<li>
										
										<span>Bachelor degree, all major</span>
									</li>
									<li>
										
										<span>Have a good communication skill</span>
									</li>	
									<li>
										
										<span>High-oriented on details </span>
									</li>
									<li>
										
										<span>Have excellence knowledge in script (Indonesia and English) and design for training video (Especially animation video)  </span>
									</li>
									<li>
										
										<span>Able to work independently and team</span>
									</li>
									
																																			
								</ol>
							</div>
							<div class="single-post job-experience">
								<h4 class="single-title">Job Description</h4>
								<ol>
									<li>
										
										<span>Quality assurance script, storyline, storyboard, and video</span>
									</li>
									<li>
										
										<span>Coordination with production team, CSA, and vendor</span>
									</li>
									
																				
								</ol>
							</div>	
					</div>
				</div>
			</section>
		</div>
		<div class="modal-footer">
			
			<a type="button" class="btn btn-danger" href="https://mail.google.com/mail/?view=cm&fs=1&to=project@digito.id&su=Quality Control Training Animated Video">Apply now</a>
		</div>
		</div>
	</div>
	</div>

	<div class="modal fade" id="exampleModal8" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-dialog-scrollable modal-xl">
		<div class="modal-content">
		<div class="modal-header">
			<h5 class="modal-title text-center" id="exampleModalLabel">Job Description</h5>
			<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
		</div>
		<div class="modal-body">
			<section class="post-area section-gap1" >
				<div class="container">
					<div class="col-lg-12 post-list">
						<div class="single-post d-flex flex-row">
							<span>Video Editor   &nbsp;&nbsp; |</span> 
							<span>&nbsp;&nbsp; Remote &nbsp;&nbsp; </span>
							<span> &nbsp;&nbsp;  &nbsp;&nbsp;</span> 
						</div>
						<div class="single-post job-experience">
								<h4 class="single-title">Qualification</h4>
								<ol>
									<li>
										
										<span>Bachelor's degree in any major</span>
									</li>
									<li>
										
										<span>Professional mastery of video and audio editing software and programs</span>
									</li>
									<li>
										
										<span>Experience editing various video project and inserting sound effects, music and transitions</span>
									</li>	
									<li>
										
										<span>Proficient in creating board of concept and other visual representation of pla </span>
									</li>
									<li>
										
										<span>Excellent communication skills are required to have a solid understanding of project scope and implementation</span>
									</li>
									<li>
										
										<span>Ability to meet deadlines</span>
									</li>
									
																																			
								</ol>
							</div>
							
					</div>
				</div>
			</section>
		</div>
		<div class="modal-footer">
			
			<a type="button" class="btn btn-danger" href="https://mail.google.com/mail/?view=cm&fs=1&to=hello@digito.id&su=Video Editor">Apply now</a>
		</div>
		</div>
	</div>
	</div>
  

    
  <section class="banner-area relative" id="home">	
    
        <div class="container">
        <div class="row d-flex align-items-center justify-content-center">
          <div class="about-content col-lg-12">
            <h1 class="text-white">
              <!-- Job category				 -->
            </h1>	
          </div>											
        </div>
   
  </section>
 

	<section>
		<div class="our-services section-pad-t30">
            <div class="container">
                <!-- Section Tittle -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-tittle text-center">
                            <span></span>
                            <h2>Karir Digito </h2>
                        </div>
                    </div>
                </div>
                <div class="row d-flex justify-contnet-center">
                    <div class="col-xl-6 col-lg-3 col-md-4 col-sm-6">
                        <div class="single-services text-center mb-30">
                            <div class="services-ion">
                                <span class="flaticon-tour"></span>
                            </div>
                            <div class="services-cap">
                               <h5><a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal">Admin Sales</a></h5>
                                <span>
								<ul style="list-style:none">
										<li> <span class="bi bi-geo-alt-fill"> </span> &nbsp; Yogyakarta </li>
										<li><span class="bi bi-briefcase-fill"></span> &nbsp; Work From Home</li>
										<li><span class="address"><span class="bi bi-calendar3"></span> &nbsp; Probation 3 Months</li>
										<br>
										<div class="items-link items-link2 f-left">
											<a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal" class="">Details</a>
										</div>
									</ul>
									
								</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-3 col-md-4 col-sm-6">
                        <div class="single-services text-center mb-30">
                            <div class="services-ion">
                                <span class="flaticon-cms"></span>
                            </div>
                            <div class="services-cap">
                               <h5><a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal2">Learning Spesialist</a></h5>
							   <span>
							   <ul style="list-style:none">
										<li> <span class="bi bi-geo-alt-fill"> </span> &nbsp; Yogyakarta </li>
										<li><span class="bi bi-briefcase-fill"></span> &nbsp; Work From Home</li>
										<li><span class="address"><span class="bi bi-calendar3"></span> &nbsp; Probation 3 Months</li>
										<br>
										<div class="items-link items-link2 f-left">
											<a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal2" class="">Details</a>
										</div>
									</ul>
								</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-3 col-md-4 col-sm-6">
                        <div class="single-services text-center mb-30">
                            <div class="services-ion">
                                <span class="flaticon-report"></span>
                            </div>
                            <div class="services-cap">
                               <h5><a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal3">Customer Success Associate</a></h5>
							   <span>
							   <ul style="list-style:none">
										<li> <span class="bi bi-geo-alt-fill"> </span> &nbsp; Yogyakarta </li>
										<li><span class="bi bi-briefcase-fill"></span> &nbsp; Work From Home</li>
										<li><span class="address"><span class="bi bi-calendar3"></span> &nbsp; Probation 3 Months</li>
										<br>
										<div class="items-link items-link2 f-left">
											<a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal3" class="">Details</a>
										</div>
									</ul>
								</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-3 col-md-4 col-sm-6">
                        <div class="single-services text-center mb-30">
                            <div class="services-ion">
                                <span class="flaticon-app"></span>
                            </div>
                            <div class="services-cap">
                               <h5><a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal4">Quality Assurance for Training Video</a></h5>
							   <span>
							   <ul style="list-style:none">
										
										<li><span class="bi bi-briefcase-fill"></span> &nbsp; Work From Home</li>
										<br>
										<br>
										<br>
										<div class="items-link items-link2 f-left">
											<a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal4" class="">Details</a>
										</div>
									</ul>
								</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-3 col-md-4 col-sm-6">
                        <div class="single-services text-center mb-30">
                            <div class="services-ion">
                                <span class="flaticon-helmet"></span>
                            </div>
                            <div class="services-cap">
                               <h5><a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal5">Sales Development Representative</a></h5>
                               <span>
							   <ul style="list-style:none">
										<li> <span class="bi bi-geo-alt-fill"> </span> &nbsp; Yogyakarta </li>
										<li><span class="bi bi-briefcase-fill"></span> &nbsp; Work From Office</li>
										<br>
										<br>
										<div class="items-link items-link2 f-left">
											<a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal5" class="">Details</a>
										</div>
									</ul>
								</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-3 col-md-4 col-sm-6">
                        <div class="single-services text-center mb-30">
                            <div class="services-ion">
                                <span class="flaticon-high-tech"></span>
                            </div>
                            <div class="services-cap">
                               <h5><a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal6">Full Stack Web Developer</a></h5>
							   
                                <span>
								<ul style="list-style:none">
										
										<li><span class="bi bi-briefcase-fill"></span> &nbsp; Work From Home</li>
										<br>
										<br>
										<br>
										<div class="items-link items-link2 f-left">
											<a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal6" class="">Details</a>
										</div>
									</ul>
								</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-3 col-md-4 col-sm-6">
                        <div class="single-services text-center mb-30">
                            <div class="services-ion">
                                <span class="flaticon-real-estate"></span>
                            </div>
                            <div class="services-cap">
                               <h5><a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal7">Quality Control Training Animated Video</a></h5>
                                <span>
								<ul style="list-style:none">
										
										<li><span class="bi bi-briefcase-fill"></span> &nbsp; Work From Home</li>
										<br>
										<br>
										<br>
										<div class="items-link items-link2 f-left">
											<a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal7" class="">Details</a>
										</div>
									</ul>
								</span>
								
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-3 col-md-4 col-sm-6">
                        <div class="single-services text-center mb-30">
                            <div class="services-ion">
                                <span class="flaticon-content"></span>
                            </div>
                            <div class="services-cap">
                               <h5><a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal8">Video Editor</a></h5>
                                <span>
								<ul style="list-style:none">
										
										<li><span class="bi bi-briefcase-fill"></span> &nbsp; Remote</li>
										<br>
										<br>
										<br>
										<div class="items-link items-link2 f-left">
											<a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal8" class="">Details</a>
										</div>
									</ul>
								</span>
								
                            </div>
                        </div>
                    </div>
                </div>
                <!-- More Btn -->
                <!-- Section Button -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="browse-btn2 text-center mt-50">
                            
                        </div>
                    </div>
                </div>
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
              <li><i class="bx bx-chevron-right"></i> <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal11">FAQ</a></li>
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