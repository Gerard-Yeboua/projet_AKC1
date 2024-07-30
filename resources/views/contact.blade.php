@extends('app.master')
@section('contenu')

<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs d-flex align-items-center" style="background-image: url('{{ asset('assets-app/img/breadcrumbs-bg.jpg') }}');">
      <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

        <h2>Contact</h2>
        <ol>
          <li><a href="{{ route('index') }}">Accueil</a></li>
          <li>Contact</li>
        </ol>

      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Contact Section ======= -->

    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">
          <div class="col-lg-6">
            <div class="info-item  d-flex flex-column justify-content-center align-items-center">
              <i class="bi bi-map"></i>
              <h3>Adresss</h3>
              <p>Siège social : Cocody 2 Plateaux Doui Cite Colombe, 01 BP 2554 Abijan 01</p>
            </div>
          </div><!-- End Info Item -->

          <div class="col-lg-3 col-md-6">
            <div class="info-item d-flex flex-column justify-content-center align-items-center">
              <i class="bi bi-envelope"></i>
              <h3>Email</h3>
              <p>akcsarl@gmail.com  </p>
            </div>
          </div><!-- End Info Item -->

          <div class="col-lg-3 col-md-6">
            <div class="info-item  d-flex flex-column justify-content-center align-items-center">
              <i class="bi bi-telephone"></i>
              <h3>Contact</h3>
              <p>+225 07 09 57 06 10 </p>
            </div>
          </div><!-- End Info Item -->

        </div>

        <div class="row gy-4 mt-1">

          <div class="col-lg-6 ">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3972.520946161327!2d-4.008155525101931!3d5.337134994641446!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xfc1eb9e5278be3d%3A0x6ea86d983ba0ab60!2sLARIT%20-%20Laboratoire%20de%20Recherche%20en%20Informatique%20et%20T%C3%A9l%C3%A9communication!5e0!3m2!1sfr!2sci!4v1683368939496!5m2!1sfr!2sci" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div><!-- End Google Maps -->

          <div class="col-lg-6">
          

            <form action="" method="post" role="form" class="php-email-form">
              <div class="row gy-4">
                <div class="col-lg-6 form-group">
                  <input type="text" name="nom" class="form-control" id="nom" placeholder="Nom" required>
                </div>
                <div class="col-lg-6 form-group">
                  <input type="text" name="prenom" class="form-control" id="prenom" placeholder="Prénom" required>
                </div>
                
                <div class="col-lg-6 form-group">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Email" required>
                </div>
                <div class="col-lg-6 form-group">
                  <input type="tel" class="form-control" name="numero" id="numero" placeholder="Téléphone" required>
                </div>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="objet" id="objet" placeholder="Objet" required>
              </div>
              <div class="form-group">
                <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Partientez</div>
                <div class="error-message"></div>
                <div class="sent-message">Votre message a été envoyé. Merci!</div>
              </div>
              <div class="text-center"><button type="submit">Envoyer</button></div>
            </form>
          
              
              <?php
                if (isset($_POST['message'])) {
                    
                    $message = "Ce message est envoyé depuis le site AKL.com

                    Nom : " . $_POST["nom"] ."
                    Prenom : " . $_POST["prenom"] ."
                    Email " . $_POST["email"] ."
                    Numero " . $_POST["numero"] ."
                    Objet " . $_POST["objet"] ."
                    Message " . $_POST["message"] ;
                    
                    $retour = mail('destinataire@free.fr', $_POST["objet"], $message, "From: emailsite.com" . 
                    "\r\n" . "Reply-to:" . $_POST["email"] );
                    if($retour){
                        echo '<p>Votre message a bien été envoyé.</p>';
                     }
              }
             ?>
          </div><!-- End Contact Form -->

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main>

@endsection