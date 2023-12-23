@extends('layouts.frontend')

@section('content')
<!--==================== HOME ====================-->
<section>
  <div class="swiper-container gallery-top">
    <div class="swiper-wrapper">
      <!--========== ISLANDS 1 ==========-->
      <section class="islands swiper-slide">
        <img
          src="{{ asset('frontend/assets/img/contact-hero.jpg') }}"
          alt=""
          class="islands__bg"
        />
        <div class="bg__overlay">
          <div class="islands__container container">
            <div class="islands__data">
              <h2 class="islands__subtitle">Besoin de Voyage</h2>
              <h1 class="islands__title">Contactez-nous</h1>
            </div>
          </div>
        </div>
      </section>
    </div>
  </div>
</section>

<!--==================== CONTACT ====================-->
<section class="contact section" id="contact">
  <div class="contact__container container grid">
    <div class="contact__images">
      <div class="contact__orbe"></div>

      <div class="contact__img">
        <img src="{{ asset('frontend/assets/img/contact.jpg') }}" alt="" />
      </div>
    </div>

    <div class="contact__content">
      <div class="contact__data">
        <span class="section__subtitle">Besoin d'aide</span>
        <h2 class="section__title">N'hésitez pas à nous contacter</h2>
        <p class="contact__description">
          Rencontrez-vous des problèmes pour trouver des endroits pour votre prochain voyage ? Avez-vous besoin d'un guide pour votre premier voyage ou d'une consultation sur les voyages ? Contactez-nous simplement.
        </p>
      </div>

      <div class="contact__card">
        <div class="contact__card-box">
          <div class="contact__card-info">
            <i class="bx bxs-phone-call"></i>
            <div>
              <h3 class="contact__card-title">Appel</h3>
              <p class="contact__card-description">+216 54 670 322</p>
            </div>
          </div>

          <button class="button contact__card-button">Appeler maintenant</button>
        </div>
        <div class="contact__card-box">
          <div class="contact__card-info">
            <i class="bx bxs-message-rounded-dots"></i>
            <div>
              <h3 class="contact__card-title">Whatsapp</h3>
              <p class="contact__card-description">+216 54 670 322</p>
            </div>
          </div>

          <button class="button contact__card-button">Discuter maintenant</button>
        </div>
        <div class="contact__card-box">
          <div class="contact__card-info">
            <i class="bx bxs-video"></i>
            <div>
              <h3 class="contact__card-title">Appel vidéo</h3>
              <p class="contact__card-description">+216 54 670 322</p>
            </div>
          </div>

          <button class="button contact__card-button">Appel vidéo maintenant</button>
        </div>
        <div class="contact__card-box">
          <div class="contact__card-info">
            <i class="bx bxs-phone-call"></i>
            <div>
              <h3 class="contact__card-title">Message</h3>
              <p class="contact__card-description">+216 54 670 322</p>
            </div>
          </div>

          <button class="button contact__card-button">Message maintenant</button>
        </div>
      </div>
      
      <!-- Formulaire de contact -->
      <div class="card">
    <div class="card-body">
        <h3 class="card-title">Formulaire de Contact</h3>
        <div class="package-travel">
            <div class="card">
                <form action="{{ route('declaration.store') }}" method="post">
                    @csrf 
                    <input type="text" name="name" placeholder="Votre Nom" required/>
                    <input type="text" name="last_name" placeholder="Votre prénom" required />
                    <input type="email" name="email" placeholder="Votre Email" required />
                    <input type="text" name="message" placeholder="Votre message" required/>
                   
                    <button type="submit" class="button button-booking">Envoyer</button>
                </form>
            </div>
        </div>
    </div>
</div>

</section>
@endsection
