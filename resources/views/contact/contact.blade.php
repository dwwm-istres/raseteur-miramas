@Extends('layouts\app')
@section('content')

    <div class="container">
      <div class="row align-items-stretch justify-content-center no-gutters">
        <div class="col-md-7 mb-5">
          <div class="form h-100 contact-wrap p-5 mt-4">
            <h3 class="text-center">Contactez-Nous</h3>
            <form class="mb-5" method="post" id="contactForm" name="contactForm">
              <div class="row">
                <div class="col-md-6 form-group mb-3">
                  <label for="" class="col-form-label">Nom *</label>
                  <input type="text" class="form-control" name="name" id="name" placeholder="Votre nom">
                </div>
                <div class="col-md-6 form-group mb-3">
                  <label for="" class="col-form-label">Email *</label>
                  <input type="email" class="form-control" name="email" id="email"  placeholder="Votre adresse mail">
                </div>
              </div>

              <div class="row">
                <div class="col-md-12 form-group mb-3">
                  <label for="budget" class="col-form-label">Objet</label>
                  <input type="text" class="form-control" name="subject" id="subject" placeholder="Objet du message">
                </div>
              </div>

              <div class="row mb-5">
                <div class="col-md-12 form-group mb-3">
                  <label for="message" class="col-form-label">Message *</label>
                  <textarea class="form-control" name="message" id="message" cols="30" rows="4"  placeholder="Écrivez votre message"></textarea>
                </div>
              </div>
              <div class="row justify-content-center">
                <div class="col-md-5 form-group text-center">
                  <input type="submit" value="Envoyer" class="btn-contact btn-block btn-primary rounded-0 py-2 px-4">
                  <span class="submitting"></span>
                </div>
              </div>
            </form>

            <div id="form-message-warning mt-4"></div> 
            <div id="form-message-success">
              Votre message a bien été envoyé.
            </div>

          </div>
        </div>
      </div>
    </div>

    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/main.js"></script>

@endsection