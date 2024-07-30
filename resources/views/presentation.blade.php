@extends('app.master')
@section('contenu')

<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs d-flex align-items-center" style="background-image: url('{{ asset('assets-app/img/breadcrumbs-bg.jpg') }}');">
      <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

        <h2>Présentation</h2>
        <ol>
          <li><a href="{{ route('index') }}">Accueil</a></li>
          <li>Présentation</li>
        </ol>

      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="row position-relative">

          <div class="col-lg-7 about-img" >
            <video width="450" height="500" controls autoplay>
              <source src="{{ asset('assets-app/video/video3.mp4') }}" type=video/mp4>
            </video>
          </div>

          <div class="col-lg-7">
            <h2>A.K.C. SARL</h2>
            <div class="our-story">
              <h3>Présentation</h3>
              <h4></h4>
              <p></span></li>
                <!--li><i class="bi bi-check-circle"></i>style="background-image: url(assets/img/hero-carousel/image5.jpg);" <span>Ullamco laboris nisi ut aliquip ex ea</span></li-->
              </ul>
              <p>A.K.C. SARL est une entreprise de construction, d'étude en ingénieurie et conseil dans les domaines suivants : Génie civil et BTP, environnement et energies nouvelles.</p>

              <div class="watch-video d-flex align-items-center position-relative">
                <i class="bi bi-play-circle"></i>
                <a href="{{ asset('assets-app/video/video3.mp4') }}" class="glightbox stretched-link">Lire la Video</a>
              </div>
              <div class="watch-video d-flex align-items-center position-relative">
                <i class="bi bi-play-circle"></i>
                <a href="{{ asset('assets-app/video/video1.mp4') }}" class="glightbox stretched-link">Lire la Video</a>
              </div>
              <div class="watch-video d-flex align-items-center position-relative">
                <i class="bi bi-play-circle"></i>
                <a href="{{ asset('assets-app/video/video2.mp4') }}" class="glightbox stretched-link">Lire la Video</a>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section>
    <!-- End About Section -->

        <!-- ======= Constructions Section ======= -->
        <section id="constructions" class="constructions">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Nos services</h2>
          <p>Le Département des Travaux du « SOCIETE AKC Sarl » sis à Cocody - Deux Plateaux « Dokui cité colombe », est une entreprise de construction, d’études en Ingénierie et Conseil dans les domaines suivants :</p>
        </div>

        <div class="row gy-4">

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
            <div class="card-item">
              <div class="row">
                <div class="col-xl-12">
                <a href="{{ route('genie_civil') }}"><div class="card-bg" style="background-image: url('{{ asset('assets-app/img/hero-carousel/Geniecivil.jpg') }}');" data-aos="zoom-in" data-aos-delay="100"></div></a>
                </div>
                <div class="col-xl-12 d-flex align-items-center">
                  <div class="card-body">
                    <h4 class="card-title"><a href="{{ route('genie_civil') }}"> Genie civil & BTP</a></h4>
                    <!--ul>
                      <li><i class="bi bi-check2-all"></i> Voirie (construction et réhabilitation de route, VRD).</li>
                      <li><i class="bi bi-check2-all"></i> Travaux de réhabilitation de bâtiment.</li>

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
                <a href="{{ route('environnement') }}"> <div class="card-bg" style="background-image: url({{ asset('assets-app/img/hero-carousel/environment.jpg') }});" data-aos="zoom-in" data-aos-delay="100"></div></a>
                </div>
                <div class="col-xl-12 d-flex align-items-center">
                  <div class="card-body">
                    <h4 class="card-title"><a href="{{ route('environnement') }}">Environnement</a></h4>
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
                <a href="{{ route('energie') }}"><div class="card-bg" style="background-image: url({{ asset('assets-app/img/hero-carousel/energie2.jpg') }});" data-aos="zoom-in" data-aos-delay="100"></div></a>
                </div>
                <div class="col-xl-12 d-flex align-items-center">
                  <div class="card-body">
                    <h4 class="card-title"><a href="{{ route('energie') }}">Energie</a></h4>
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
                <a href="{{ route('travaux_public') }}"><div class="card-bg" style="background-image: url({{ asset('assets-app/img/hero-carousel/Travaux-Public-Couverture_1~2.jpg') }});" data-aos="zoom-in" data-aos-delay="100"></div></a>
                </div>
                <div class="col-xl-12 d-flex align-items-center">
                  <div class="card-body">
                    <h4 class="card-title"><a href="{{ route('travaux_public') }}">Travaux publics</a></h4>
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
                <p>Meilleurs clients</p>
              </div>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-3 col-md-6">
            <div class="stats-item d-flex align-items-center w-100 h-100">
              <i class="bi bi-journal-richtext color-orange flex-shrink-0"></i>
              <div>
                <span data-purecounter-start="0" data-purecounter-end="100" data-purecounter-duration="1" class="purecounter"></span>
                <p>Project réalisés</p>
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
          </div><!-- End Stats Item -->

          <div class="col-lg-3 col-md-6">
            <div class="stats-item d-flex align-items-center w-100 h-100">
              <i class="bi bi-people color-pink flex-shrink-0"></i>
              <div>
                <span data-purecounter-start="0" data-purecounter-end="15" data-purecounter-duration="1" class="purecounter"></span>
                <p>Année d'expériences</p>
              </div>
            </div>
          </div><!-- End Stats Item -->

        </div>

      </div>
    </section><!-- End Stats Counter Section -->


    <!-- === Our Team Section ======= -->
    <section id="team" class="team">
      <div class="container" data-aos="fade-up"><br>

        <hr>

        <br>
        <div class="section-header">
          <h2>Organigramme de notre entre entreprise</h2>
          <img src="{{ asset('assets-app/img/blog/AKC_SARL.png') }}" alt="Organigramme" width="1000" height="500"><br>
          <img src="{{ asset('assets-app/img/blog/Image4_.png') }}" alt="Organigramme 2" width="1300" height="250">
        </div>
        <div class="row gy-10">

        <div class="section-header">
          <h2>Notre équipe</h2>
        </div>

          <div class="col-lg-4 col-md-6 member" data-aos="fade-up" data-aos-delay="100">
            <div class="member-img">
              <img src="{{ asset('assets-app/img/team/Directeur-general~2.jpg') }}" class="img-fluid" alt="">
              <div class="social">
                <a href="#"><i class="bi bi-twitter"></i></a>
                <a href="#"><i class="bi bi-facebook"></i></a>
                <a href="#"><i class="bi bi-instagram"></i></a>
                <a href="#"><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
            <div class="member-info text-center">
              <h4>COULIBALY ADAMA</h4>
              <span>DG</span>
              <p>Directeur Général</p>
            </div>
          </div><!-- End Team Member -->

          <div class="col-lg-4 col-md-6 member" data-aos="fade-up" data-aos-delay="200">
            <div class="member-img">
              <img src="{{ asset('assets-app/img/team/femme_avatar.jpg') }}" class="img-fluid" alt="">
              <div class="social">
                <a href="#"><i class="bi bi-twitter"></i></a>
                <a href="#"><i class="bi bi-facebook"></i></a>
                <a href="#"><i class="bi bi-instagram"></i></a>
                <a href="#"><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
            <div class="member-info text-center">
              <h4>MANSA ROXANNE GNIZAKO</h4>
              <span>SS</span>
              <p> Service Secrétariat</p>
            </div>
          </div><!-- End Team Member -->

          <div class="col-lg-4 col-md-6 member" data-aos="fade-up" data-aos-delay="300">
            <div class="member-img">
              <img src="{{ asset('assets-app/img/team/homme_avatar.png') }}" class="img-fluid" alt="">
              <div class="social">
                <a href="#"><i class="bi bi-twitter"></i></a>
                <a href="#"><i class="bi bi-facebook"></i></a>
                <a href="#"><i class="bi bi-instagram"></i></a>
                <a href="#"><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
            <div class="member-info text-center">
              <h4>AVIT JOËL</h4>
              <span>SJ</span>
              <p>Service Juridique</p>
            </div>
          </div><!-- End Team Member -->
          <hr>

          <div class="col-lg-4 col-md-6 member" data-aos="fade-up" data-aos-delay="400">
            <div class="member-img">
              <img src="{{ asset('assets-app/img/team/Cisse_siaka.jpg') }}" class="img-fluid" alt="">
              <div class="social">
                <a href="#"><i class="bi bi-twitter"></i></a>
                <a href="#"><i class="bi bi-facebook"></i></a>
                <a href="#"><i class="bi bi-instagram"></i></a>
                <a href="#"><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
            <div class="member-info text-center">
              <h4>CISSE SIAKA</h4>
              <span>CON</span>
              <p>Conseiller</p>
            </div>
          </div><!-- End Team Member -->

          <div class="col-lg-4 col-md-6 member" data-aos="fade-up" data-aos-delay="500">
            <div class="member-img">
              <img src="{{ asset('assets-app/img/team/Assistant-DAF~2.jpeg') }}" class="img-fluid" alt="">
              <div class="social">
                <a href="#"><i class="bi bi-twitter"></i></a>
                <a href="#"><i class="bi bi-facebook"></i></a>
                <a href="#"><i class="bi bi-instagram"></i></a>
                <a href="#"><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
            <div class="member-info text-center">
              <h4>GBAME GBEDE SYLVAIN</h4>
              <span>DGA</span>
              <p>Directeur Général Adjoin</p>
            </div>
          </div><!-- End Team Member -->


          <div class="col-lg-4 col-md-6 member" data-aos="fade-up" data-aos-delay="600">
            <div class="member-img">
              <img src="{{ asset('assets-app/img/team/femme_avatar.jpg') }}" class="img-fluid" alt="">
              <div class="social">
                <a href="#"><i class="bi bi-twitter"></i></a>
                <a href="#"><i class="bi bi-facebook"></i></a>
                <a href="#"><i class="bi bi-instagram"></i></a>
                <a href="#"><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
            <div class="member-info text-center">
              <h4>DIALLO AISSATOU</h4>
              <span>DCM</span>
              <p>Direction Commerciale et Marketing </p>
            </div>
          </div><!--End Member section-->
          <hr>

          <div class="col-lg-4 col-md-6 member" data-aos="fade-up" data-aos-delay="700">
            <div class="member-img">
              <img src="{{ asset('assets-app/img/team/Directeur-technique~2.jpg') }}" class="img-fluid" alt="">
              <div class="social">
                <a href="#"><i class="bi bi-twitter"></i></a>
                <a href="#"><i class="bi bi-facebook"></i></a>
                <a href="#"><i class="bi bi-instagram"></i></a>
                <a href="#"><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
            <div class="member-info text-center">
              <h4>DRAMANE OUATTARA</h4>
              <span>DTER</span>
              <p>Direction Technique, d’Etudes et de Réalisation </p>
            </div>
          </div><!-- End Team Member -->

          <div class="col-lg-4 col-md-6 member" data-aos="fade-up" data-aos-delay="800">
            <div class="member-img">
              <img src="{{ asset('assets-app/img/team/Commercial-2~2.png') }}" class="img-fluid" alt="">
              <div class="social">
                <a href="#"><i class="bi bi-twitter"></i></a>
                <a href="#"><i class="bi bi-facebook"></i></a>
                <a href="#"><i class="bi bi-instagram"></i></a>
                <a href="#"><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
            <div class="member-info text-center">
              <h4>KONE ODJOUMAN ADAMA</h4>
              <span>S.LOG</span>
              <p>Service Logistique </p>
            </div>
          </div><!-- End Team Member -->


          <div class="col-lg-4 col-md-6 member" data-aos="fade-up" data-aos-delay="700">
            <div class="member-img">
              <img src="{{ asset('assets-app/img/team/Directeur-commercial~3.jpg') }}" class="img-fluid" alt="">
              <div class="social">
                <a href="#"><i class="bi bi-twitter"></i></a>
                <a href="#"><i class="bi bi-facebook"></i></a>
                <a href="#"><i class="bi bi-instagram"></i></a>
                <a href="#"><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
            <div class="member-info text-center">
              <h4>JIMOH BAMIDELE ALIOU </h4>
              <span>SO</span>
              <p>Service Ouvrages </p>
            </div>
          </div><!-- End Team Member -->
          <hr>

          <div class="col-lg-4 col-md-6 member" data-aos="fade-up" data-aos-delay="700">
            <div class="member-img">
              <img src="{{ asset('assets-app/img/team/Directeur-informatique&communication~2.jpg') }}" class="img-fluid" alt="">
              <div class="social">
                <a href="#"><i class="bi bi-twitter"></i></a>
                <a href="#"><i class="bi bi-facebook"></i></a>
                <a href="#"><i class="bi bi-instagram"></i></a>
                <a href="#"><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
            <div class="member-info text-center">
              <h4>IBO ROLLAND STEPHANE </h4>
              <span>DI</span>
              <p>Direction Informatique </p>
            </div>
          </div><!-- End Team Member -->


          <div class="col-lg-4 col-md-6 member" data-aos="fade-up" data-aos-delay="900">
            <div class="member-img">
              <img src="{{ asset('assets-app/img/team/Informaticien-1~2.jpeg') }}" class="img-fluid" alt="">
              <div class="social">
                <a href="https://www.twitter.com/gerardkra@"><i class="bi bi-twitter"></i></a>
                <a href="https://www.facebook.com/profile.php?id=100091909403723"><i class="bi bi-facebook"></i></a>
                <a href="https://www.instagram.com/gerard.yeboua.7"><i class="bi bi-instagram"></i></a>
                <a href="https://www.linkedin.com/in/koffi-kra-gerard-yeboua-590497255"><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
            <div class="member-info text-center">
              <h4> YEBOUA KOFFI KRA GERARD </h4>
              <span>SD</span>
              <p>Service développement </p>
            </div>
          </div><!-- End Team Member -->

          <div class="col-lg-4 col-md-6 member" data-aos="fade-up" data-aos-delay="800">
            <div class="member-img">
              <img src="{{ asset('assets-app/img/team/Informaticien-2~2.jpeg') }}" class="img-fluid" alt="">
              <div class="social">
                <a href="#"><i class="bi bi-twitter"></i></a>
                <a href="#"><i class="bi bi-facebook"></i></a>
                <a href="#"><i class="bi bi-instagram"></i></a>
                <a href="#"><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
            <div class="member-info text-center">
              <h4>KOUASSI KOUASSI EDMOND</h4>
              <span>SR</span>
              <p>Service Réseau </p>
            </div>
          </div><!-- End Team Member -->
          <hr>


          <div class="col-lg-4 col-md-6 member" data-aos="fade-up" data-aos-delay="900">
            <div class="member-img">
              <img src="{{ asset('assets-app/img/team/DAF~2.jpg') }}" class="img-fluid" alt="">
              <div class="social">
                <a href="https://www.twitter.com/gerardkra@"><i class="bi bi-twitter"></i></a>
                <a href="https://www.facebook.com/profile.php?id=100091909403723"><i class="bi bi-facebook"></i></a>
                <a href="https://www.instagram.com/gerard.yeboua.7"><i class="bi bi-instagram"></i></a>
                <a href="https://www.linkedin.com/in/koffi-kra-gerard-yeboua-590497255"><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
            <div class="member-info text-center">
              <h4>ADJA MARC GHISLAIN JOËL</h4>
              <span>DAF</span>
              <p>Direction Administrative et Financière  </p>
            </div>
          </div><!-- End Team Member -->

          <div class="col-lg-4 col-md-6 member" data-aos="fade-up" data-aos-delay="1000" >
            <div class="member-img">
              <img src="{{ asset('assets-app/img/team/femme_avatar.jpg') }}" class="img-fluid" alt="" >
              <div class="social">
                <a href="#"><i class="bi bi-twitter"></i></a>
                <a href="#"><i class="bi bi-facebook"></i></a>
                <a href="#"><i class="bi bi-instagram"></i></a>
                <a href="#"><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
            <div class="member-info text-center">
              <h4>TOKPA ROSALIE</h4>
              <span>SRH</span>
              <p>	Service des Ressources Humaines </p>
            </div>
          </div><!-- End Team Member -->

        </div>

      </div>
    </section><!-- End Our Team Section -->



  </main>

@endsection
