@extends('app.master')
@section('contenu')

<!-- ======= Hero Section ======= -->
<section id="hero" class="hero">

    <div class="info d-flex align-items-center">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-6 text-center">
            <h2 data-aos="fade-down">Bienvenue sur <span>A.K.C. SARL</span></h2>
            <p data-aos="fade-up">A.K.C. SARL est une entreprise de construction, d'étude en ingénieurie et conseil dans les domaines suivants : Génie civil et BTP, environnement et energies nouvelles.</p>
            <!--a data-aos="fade-up" data-aos-delay="200" href="contact.php" class="btn-get-started">Demander un devis</!--a-->
          </div>
        </div>
      </div>
    </div>

    <div id="hero-carousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="5000">

      <div class="carousel-item active" style="background-image: url({{ asset('assets-app/img/hero-carousel/hero-carousel-1.jpg') }})"></div>
      <div class="carousel-item" style="background-image: url({{ asset('assets-app/img/hero-carousel/image1.jpg') }})"></div>
      <div class="carousel-item" style="background-image: url({{ asset('assets-app/img/hero-carousel/image1.jpg') }})"></div>
      <div class="carousel-item" style="background-image: url({{ asset('assets-app/img/hero-carousel/image1.jpg') }})"></div>
      <div class="carousel-item" style="background-image: url({{ asset('assets-app/img/hero-carousel/image1.jpg') }})"></div>
      <div class="carousel-item" style="background-image: url({{ asset('assets-app/img/hero-carousel/image1.jpg') }})"></div>
      <div class="carousel-item" style="background-image: url({{ asset('assets-app/img/hero-carousel/image1.jpg') }})"></div>
      <div class="carousel-item" style="background-image: url({{ asset('assets-app/img/hero-carousel/image1.jpg') }})"></div>


      <a class="carousel-control-prev" href="#hero-carousel" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
      </a>

      <a class="carousel-control-next" href="#hero-carousel" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
      </a>

    </div>

  </section><!-- End Hero Section -->

  <main id="main">

    

    <!-- ======= Constructions Section ======= -->
    <section id="constructions" class="constructions">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Nos services</h2>
          <!--p>Nulla dolorum nulla nesciunt rerum facere sed ut inventore quam porro nihil id ratione ea sunt quis dolorem dolore earum</p-->
        </div>

        <div class="row gy-4">

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
            <div class="card-item">
              <div class="row">
                <div class="col-xl-12">
                <a href="genie_civil.php"><div class="card-bg" style="background-image: url({{ asset('assets-app/img/hero-carousel/Geniecivil.jpg') }});" data-aos="zoom-in" data-aos-delay="100"></div></a>
                </div>
                <div class="col-xl-12 d-flex align-items-center">
                  <div class="card-body">
                    <h4 class="card-title" align="center"><a href="{{ route('genie_civil') }}"> Genie civil & BTP</a></h4>
                    <!--ul>
                      <li><i class="bi bi-check2-all"></i> Voirie (construction et réhabilitation de route, VRD).</li>
                      <li><i class="bi bi-check2-all"></i> Travaux de réhabilitation de bâtiment.</li>
                      
                    </ul-->
                  </div>
                </div>
              </div>
            </div>
          </div><!-- End Card Item -->

          <!--Essayer-->
          
          <!--Essayer-->
          
          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
            <div class="card-item">
              <div class="row">
                <div class="col-xl-12">
                <a href="environnement.php"> <div class="card-bg" style="background-image: url({{ asset('assets-app/img/hero-carousel/environment.jpg') }});" data-aos="zoom-in" data-aos-delay="100"></div></a>
                </div>
                <div class="col-xl-12 d-flex align-items-center">
                  <div class="card-body">
                    <h4 class="card-title" align="center"><a href="{{ route('environnement') }}">Environnement</a></h4>
                    <!--ul>
                      <li><i class="bi bi-check2-all"></i> Etude d’Impact Environnemental et Social (E. I. E. S), déplacement involontaire de population, salubrité publique, aménagement paysagiste ; </li>
                      <li><i class="bi bi-check2-all"></i> Suivi environnemental.</li>
                      <li><i class="bi bi-check2-all"></i> Surveillance environnementale.</li>
                      <li><i class="bi bi-check2-all"></i> PGES chantier (Plan de Gestion Environnementale et Sociale de chantier).</li>
                      <li><i class="bi bi-check2-all"></i> Assainissement.</li>

                    </ul-->
                  </div>
                </div>
              </div>
            </div>
          </div><!-- End Card Item -->
    
          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
            <div class="card-item">
              <div class="row">
                <div class="col-xl-12">
                <a href="energie.php"><div class="card-bg" style="background-image: url({{ asset('assets-app/img/hero-carousel/energie2.jpg') }});" data-aos="zoom-in" data-aos-delay="100"></div></a>
                </div>
                <div class="col-xl-12 d-flex align-items-center">
                  <div class="card-body">
                    <h4 class="card-title" align="center"><a href="{{ route('energie') }}">Energie</a></h4>
                    <!--ul>
                      <li><i class="bi bi-check2-all"></i> Electrification. </li>
                      <li><i class="bi bi-check2-all"></i> Energie renouvelable (Solaire, Bioénergie,…).</li>
                    </ul-->
                  </div>
                </div>
              </div>
            </div>
          </div><!-- End Card Item -->

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
            <div class="card-item">
              <div class="row">
                <div class="col-xl-12">
                <a href="travaux_public.php"><div class="card-bg" style="background-image: url({{ asset('assets-app/img/hero-carousel/Travaux-Public-Couverture_1~2.jpg') }});" data-aos="zoom-in" data-aos-delay="100"></div></a>
                </div>
                <div class="col-xl-12 d-flex align-items-center">
                  <div class="card-body">
                    <h4 class="card-title" align="center"><a href="{{ route('travaux_public') }}">Travaux publics</a></h4>
                    <!--p>Fuga in dolorum et iste et culpa. Commodi possimus nesciunt modi voluptatem placeat deleniti adipisci. Cum delectus doloribus non veritatis. Officia temporibus illo magnam. Dolor eos et.</p-->
                  </div>
                </div>
              </div>
            </div>
          </div><!-- End Card Item -->
    </section><!-- End Constructions Section -->
    
     <!-- ======= Stats Counter Section ======= -->
     <section id="stats-counter" class="stats-counter section-bg">
      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-3 col-md-6">
            <div class="stats-item d-flex align-items-center w-100 h-100">
              <i class="bi bi-emoji-smile color-blue flex-shrink-0"></i>
              <div>
                <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1" class="purecounter"></span>
                <p> Nombre de clients</p>
              </div>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-3 col-md-6">
            <div class="stats-item d-flex align-items-center w-100 h-100">
              <i class="bi bi-journal-richtext color-orange flex-shrink-0"></i>
              <div>
                <span data-purecounter-start="0" data-purecounter-end="100" data-purecounter-duration="1" class="purecounter"></span>
                <p>Projets Réalisés</p>
              </div>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-3 col-md-6">
            <div class="stats-item d-flex align-items-center w-100 h-100">
              <i class="bi bi-headset color-green flex-shrink-0"></i>
              <div>
                <span data-purecounter-start="0" data-purecounter-end="50" data-purecounter-duration="1" class="purecounter"></span>
                <p>Nombre de partenaires</p>
              </div>
            </div>
          </div><!--End Stats Item -->

          <div class="col-lg-3 col-md-6">
            <div class="stats-item d-flex align-items-center w-100 h-100">
              <i class="bi bi-people color-pink flex-shrink-0"></i>
              <div>
                <span data-purecounter-start="0" data-purecounter-end="15" data-purecounter-duration="1" class="purecounter"></span>
                <p>Années d'expériences</p>
              </div>
            </div>
          </div><!-- End Stats Item -->

        </div>
        
      </div>
    </section><!-- End Stats Counter Section -->

  <!-- ======= Our Projects Section ======= -->
     <section id="projects" class="projects">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Projets réalisés</h2>
          <!--p>Consequatur libero assumenda est voluptatem est quidem illum et officia imilique qui vel architecto accusamus fugit aut qui distinctio</p-->
        </div>

        <div class="portfolio-isotope" data-portfolio-filter="*" data-portfolio-layout="masonry" data-portfolio-sort="original-order">

          <ul class="portfolio-flters" data-aos="fade-up" data-aos-delay="100">
            <li data-filter="*" class="filter-active">TOUS</li>
            <li data-filter=".filter-remodeling">GENIE CIVIL & BTP</li>
            <li data-filter=".filter-construction">ENVIRONNEMENT</li>
            <li data-filter=".filter-repairs">ENERGIE</li>
            <li data-filter=".filter-design">TRAVAUX PUBLICS</li>
          </ul><!-- End Projects Filters -->

          <div class="row gy-4 portfolio-container" data-aos="fade-up" data-aos-delay="200">

            <div class="col-lg-4 col-md-6 portfolio-item filter-remodeling">
              <div class="portfolio-content h-100">
                <img src="{{ asset('assets-app/img/projects/btp10.jpg') }}" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Remodeling 1</h4>
                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                  <a href="{{ asset('assets-app/img/projects/btp10.jpg') }}" title="Remodeling 1" data-gallery="portfolio-gallery-remodeling" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="project-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div><!-- End Projects Item -->

            <div class="col-lg-4 col-md-6 portfolio-item filter-construction">
              <div class="portfolio-content h-100">
                <img src="{{ asset('assets-app/img/projects/construction-3.jpg') }}" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Construction 1</h4>
                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                  <a href="{{ asset('assets-app/img/projects/construction-3.jpg') }}" title="Construction 1" data-gallery="portfolio-gallery-construction" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="project-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div><!-- End Projects Item -->

            <div class="col-lg-4 col-md-6 portfolio-item filter-repairs">
              <div class="portfolio-content h-100">
                <img src="{{ asset('assets-app/img/projects/btp2.jpg') }}" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Repairs 1</h4>
                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                  <a href="{{ asset('assets-app/img/projects/btp2.jpg') }}" title="Repairs 1" data-gallery="portfolio-gallery-repairs" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="project-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div><!-- End Projects Item -->

            <div class="col-lg-4 col-md-6 portfolio-item filter-design">
              <div class="portfolio-content h-100">
                <img src="{{ asset('assets-app/img/projects/btp4.jpg') }}" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Design 1</h4>
                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                  <a href="{{ asset('assets-app/img/projects/btp4.jpg') }}" title="Repairs 1" data-gallery="portfolio-gallery-book" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="project-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div><!-- End Projects Item -->

            <div class="col-lg-4 col-md-6 portfolio-item filter-remodeling">
              <div class="portfolio-content h-100">
                <img src="{{ asset('assets-app/img/projects/btp6.jpg') }}" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Remodeling 2</h4>
                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                  <a href="{{ asset('assets-app/img/projects/btp6.jpg') }}" title="Remodeling 2" data-gallery="portfolio-gallery-remodeling" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="project-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div><!-- End Projects Item -->

            <div class="col-lg-4 col-md-6 portfolio-item filter-construction">
              <div class="portfolio-content h-100">
                <img src="{{ asset('assets-app/img/projects/construction-2.jpg') }}" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Construction 2</h4>
                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                  <a href="{{ asset('assets-app/img/projects/construction-2.jpg') }}" title="Construction 2" data-gallery="portfolio-gallery-construction" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="project-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div><!-- End Projects Item -->

            <div class="col-lg-4 col-md-6 portfolio-item filter-repairs">
              <div class="portfolio-content h-100">
                <img src="{{ asset('assets-app/img/projects/btp7.jpg') }}" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Repairs 2</h4>
                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                  <a href="{{ asset('assets-app/img/projects/btp7.jpg') }}" title="Repairs 2" data-gallery="portfolio-gallery-repairs" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="project-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div><!-- End Projects Item -->

            <div class="col-lg-4 col-md-6 portfolio-item filter-design">
              <div class="portfolio-content h-100">
                <img src="{{ asset('assets-app/img/projects/btp9.jpg') }}" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Design 2</h4>
                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                  <a href="{{ asset('assets-app/img/projects/btp9.jpg') }}" title="Repairs 2" data-gallery="portfolio-gallery-book" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="project-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div><!-- End Projects Item -->

            

            

          </div><!-- End Projects Container -->

        </div>

      </div>
    </section><!-- End Our Projects Section -->

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Témoignages</h2>
          <p>Ils nous font confiance. </p>
        </div>

        <div class="slides-2 swiper">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <img src="{{ asset('assets-app/img/team/Informaticien-1~2.png') }}" class="testimonial-img" alt="">
                  <h3>Gerard Yeboua</h3>
                  <h4>Développeur </h4>
                  <div class="stars">
                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                  </div>
                  <p>
                    <i class="bi bi-quote quote-icon-left"></i>
                    Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
                    <i class="bi bi-quote quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <img src="{{ asset('assets-app/img/team/Informaticien-2~2.jpeg') }}" class="testimonial-img" alt="">
                  <h3>Edmond Kouassi</h3>
                  <h4>Développeur</h4>
                  <div class="stars">
                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                  </div>
                  <p>
                    <i class="bi bi-quote quote-icon-left"></i>
                    Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
                    <i class="bi bi-quote quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <img src="{{ asset('assets-app/img/team/Directeur-informatique&communication~2.png') }}" class="testimonial-img" alt="">
                  <h3>Ibo Rolland</h3>
                  <h4>Directeur Informatique</h4>
                  <div class="stars">
                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                  </div>
                  <p>
                    <i class="bi bi-quote quote-icon-left"></i>
                    Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.
                    <i class="bi bi-quote quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <img src="{{ asset('assets-app/img/team/Assistant-DAF~2.jpeg') }}" class="testimonial-img" alt="">
                  <h3>Gbané Gbédé Sylvain</h3>
                  <h4>Assistant Directeur Administratif et Financier</h4>
                  <div class="stars">
                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                  </div>
                  <p>
                    <i class="bi bi-quote quote-icon-left"></i>
                    Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.
                    <i class="bi bi-quote quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <img src="{{ asset('assets-app/img/team/Commercial-2~2.png') }}" class="testimonial-img" alt="">
                  <h3>Koné Odjouma Adama</h3>
                  <h4>Assistant Commercial</h4>
                  <div class="stars">
                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                  </div>
                  <p>
                    <i class="bi bi-quote quote-icon-left"></i>
                    Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.
                    <i class="bi bi-quote quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Testimonials Section -->

   
  </main>

@endsection