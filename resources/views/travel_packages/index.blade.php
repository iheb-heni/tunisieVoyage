@extends('layouts.frontend')

@section('content')
 <!--==================== ACCUEIL ====================-->
 <section>
        <div class="swiper-container gallery-top">
          <div class="swiper-wrapper">
            <section class="islands swiper-slide">
              <img src="{{ asset('frontend/assets/img/OMRA.jpg') }}" alt="" class="islands__bg" />

              <div class="islands__container container">
                <div class="islands__data">
                  <h1 class="islands__title">العروض</h1>
                  <h1 class="islands__subtitle"> كل ما تحتاج معرفته حول مناسك أداء العمرة وزيارة المسجد النبوي. قم بزيارة موقعنا الان. أول منصة رسمية للتخطيط والحجز للعمرة في تونس</h1>
                </div>
              </div>
            </section>
          </div>
        </div>
      </section>

      <!--==================== POPULAIRE ====================-->
      <section class="section" id="popular">
        <div class="container">
          <span class="section__subtitle" style="text-align: center">Toutes</span>
          <h2 class="section__title" style="text-align: center">
            OFFRES
          </h2>

          <div class="popular__all">
            @foreach($travel_packages as $travel_package)
                <article class="popular__card">
                <a href="{{ route('travel_package.show', $travel_package->slug) }}">
                @if ($travel_package->galleries->isNotEmpty())
                        <img
                            src="{{ Storage::url($travel_package->galleries->first()->images) }}"
                            alt="not found"
                            class="popular__img"
                        />
                    @else
                        <img
                            src="{{ asset('frontend/assets/img/hero.jpg') }}"
                            alt="Image par défaut"
                            class="popular__img"
                        />
                    @endif
                    <div class="popular__data">
                    <h2 class="popular__price"><span>$</span>{{ number_format($travel_package->price,2) }}</h2>
                    <h3 class="popular__title">{{ $travel_package->location }}</h3>
                    <p class="popular__description">{{ $travel_package->type }}</p>
                    </div>
                </a>
                </article>
            @endforeach
          </div>
        </div>
      </section>
@endsection
