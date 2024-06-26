@extends('app.master')
@section('contenu')

<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs d-flex align-items-center" style="background-image: url({{ asset('assets-app/img/breadcrumbs-bg.jpg') }});">
      <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

        <h2>Environnement</h2>
        <ol>
          <li><a href="{{ route('index') }}">Accueil</a></li>
          <li>Environnement</li>
        </ol>

      </div>
    </div><!-- End Breadcrumbs -->


    <!-- ======= Alt Services Section 2 ======= -->
    <section id="alt-services-2" class="alt-services section-bg">
      <div class="container" data-aos="fade-up">

        <div class="row justify-content-around gy-4">
          <div class="col-lg-5 d-flex flex-column justify-content-center">
            <h3>Environement</h3>
            <p><h4> Etude d’Impact Environnemental et Social (E. I. E. S), déplacement involontairede population,
              salubrité publique, aménagement paysagiste.</h4></p>


            <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="200">
              <i class="bi bi-patch-check flex-shrink-0"></i>
              <div>
                <h4><a href="" class="stretched-link">Etude d’Impact Environnemental et Social (E. I. E. S), déplacement involontaire de
                  population,salubrité publique, aménagement paysagiste.</a></h4>
                <p></p>
              </div>
            </div><!-- End Icon Box -->

            <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="200">
              <i class="bi bi-patch-check flex-shrink-0"></i>
              <div>
                <h4><a href="" class="stretched-link">Suivi environnemental.</a></h4>
                <p></p>
              </div>
            </div><!-- End Icon Box -->

            <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="200">
              <i class="bi bi-patch-check flex-shrink-0"></i>
              <div>
                <h4><a href="" class="stretched-link">Surveillance environnementale.</a></h4>
                <p> </p>
              </div>
            </div><!-- End Icon Box -->

            <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="200">
              <i class="bi bi-patch-check flex-shrink-0"></i>
              <div>
                <h4><a href="" class="stretched-link">PGES chantier (Plan de Gestion Environnementale et Sociale de chantier).</a></h4>
                <p></p>
              </div>
            </div><!-- End Icon Box -->

            <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="200">
              <i class="bi bi-patch-check flex-shrink-0"></i>
              <div>
                <h4><a href="" class="stretched-link">Assainissement.</a></h4>
                <p></p>
              </div>
            </div><!-- End Icon Box -->
          </div>
          <div class="col-lg-6 img-bg" style="background-image: url({{ asset('assets-app/img/hero-carousel/environment.jpg') }});" data-aos="zoom-in" data-aos-delay="100"></div>

        </div>

      </div>
    </section><!-- End Alt Services Section 2 -->


    <section id="projects" class="projects">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Détails</h2>
        </div>

        <div class="portfolio-isotope" data-portfolio-filter="*" data-portfolio-layout="masonry" data-portfolio-sort="original-order">

          <div class="row gy-4 portfolio-container" data-aos="fade-up" data-aos-delay="200">

            <div class="col-lg-4 col-md-6 portfolio-item filter-remodeling">
              <div class="portfolio-content h-100">
                <img src="{{ asset('assets-app/img/projects/remodeling-1.jpg') }}" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Environnement</h4>
                  <p>Etude d’Impact Environnemental et Social (E. I. E. S), déplacement involontaire de
                  population,salubrité publique, aménagement paysagiste.</p>
                  <a href="{{ ('assets-app/img/projects/remodeling-1.jpg') }}" title="Remodeling 1" data-gallery="portfolio-gallery-remodeling" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="details" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div><!-- End Projects Item -->

            <div class="col-lg-4 col-md-6 portfolio-item filter-construction">
              <div class="portfolio-content h-100">
                <img src="{{ ('assets-app/img/projects/construction-1.jpg') }}" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Environnement</h4>
                  <p>Suivi environnemental.</p>
                  <a href="{{ ('assets-app/img/projects/construction-1.jpg') }}" title="Construction 1" data-gallery="portfolio-gallery-construction" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="details" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div><!-- End Projects Item -->

            <div class="col-lg-4 col-md-6 portfolio-item filter-remodeling">
              <div class="portfolio-content h-100">
                <img src="{{ ('assets-app/img/projects/remodeling-3.jpg') }}" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Environnement</h4>
                  <p>Surveillance environnementale.</p>
                  <a href="{{ ('assets-app/img/projects/remodeling-3.jpg') }}" title="Remodeling 3" data-gallery="portfolio-gallery-remodeling" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="details" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div><!-- End Projects Item -->

            <div class="col-lg-4 col-md-6 portfolio-item filter-construction">
              <div class="portfolio-content h-100">
                <img src="{{ ('assets-app/img/projects/construction-3.jpg') }}" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4> Environnement</h4>
                  <p>PGES chantier (Plan de Gestion Environnementale et Sociale de chantier).</p>
                  <a href="{{ ('assets-app/img/projects/construction-3.jpg') }}" title="Construction 3" data-gallery="portfolio-gallery-construction" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="details" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div><!-- End Projects Item -->

            <div class="col-lg-4 col-md-6 portfolio-item filter-repairs">
              <div class="portfolio-content h-100">
                <img src="{{ ('assets-app/img/projects/repairs-3.jpg') }}" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Environnement</h4>
                  <p>Assainissement</p>
                  <a href="{{ ('assets-app/img/projects/repairs-3.jpg') }}" title="Repairs 2" data-gallery="portfolio-gallery-repairs" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="{{route('details')}}" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div><!-- End Projects Item -->


          </div><!-- End Projects Container -->

        </div>

      </div>
    </section><!-- End Our Projects Section Environnement-->




  </main>

@endsection
