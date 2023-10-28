@extends('layouts.frontend') <!-- Utilisation de la mise en page frontend -->

@section('content')
<!-- Section principale du contenu -->
<section>
    <div class="swiper-container">
        <div>
            <!-- Section Îles 1 -->
            <section class="islands">
                <img
                    src="{{ asset('frontend/assets/img/tunisia.jpg') }}"
                    alt=""
                    class="islands__bg"
                />
                <div class="bg__overlay">
                    <div class="islands__container container">
                        <div
                            class="islands__data"
                            style="z-index: 99; position: relative"
                        >
                            <h2 class="islands__subtitle">
                                Explorez
                            </h2>
                            <h1 class="islands__title">
                                Monde Merveilleux
                            </h1>
                            <p class="islands__description">
                                C'est le moment parfait pour voyager et
                                profiter de la <br />
                                beauté du monde.
                            </p>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</section>

<!-- Section Logos -->
<section class="logos" style="margin-top: 9rem; padding-bottom: 3rem">
    <div class="logos__container container grid">
        <div class="logos__img">
            <img src="{{ asset('frontend/assets/img/tunisair.jpg') }}" alt="" />
        </div>
        <div class="logos__img">
            <img src="{{ asset('frontend/assets/img/traveltudo.png') }}" alt="" />
        </div>
        <div class="logos__img">
            <img src="{{ asset('frontend/assets/img/booking.png') }}" alt="" />
        </div>
        <div class="logos__img">
            <img src="{{ asset('frontend/assets/img/icone-emirates-airline-2cbmmtk.jpg') }}" alt="" />
        </div>
    </div>
</section>

<!-- Section Populaire -->
<section class="section" id="popular">
    <div class="container">
        <span class="section__subtitle" style="text-align: center">
            Meilleur Choix
        </span>
        <h2 class="section__title" style="text-align: center">
            Endroits Populaires
        </h2>
        <div class="popular__container swiper">
    <div class="swiper-wrapper">
        @foreach($travel_packages as $travel_package)
            <article class="popular__card swiper-slide">
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
                        <h2 class="popular__price">
                            <span>$</span>{{ number_format($travel_package->price, 2) }}
                        </h2>
                        <h3 class="popular__title">
                            {{ $travel_package->location }}
                        </h3>
                        <p class="popular__description">{{ $travel_package->type }}</p>
                    </div>
                </a>
            </article>
        @endforeach
    </div>
</div>


            <div class="swiper-button-next">
                <i class="bx bx-chevron-right"></i>
            </div>
            <div class="swiper-button-prev">
                <i class="bx bx-chevron-left"></i>
            </div>
        </div>
    </div>
</section>

<!-- Section Valeur -->
<section class="value section" id="value">
    <div class="value__container container grid">
        <div class="value__images">
            <div class="value__orbe"></div>

            <div class="value__img">
                <img src="{{ asset('frontend/assets/img/team.jpg') }}" alt="" />
            </div>
        </div>

        <div class="value__content">
            <div class="value__data">
                <span class="section__subtitle">Pourquoi Nous Choisir</span>
                <h2 class="section__title">
                    L'Expérience Que Nous Vous Promettons
                </h2>
                <p class="value__description">
                    Nous sommes toujours prêts à vous servir en vous fournissant le meilleur
                    service. Nous faisons de bons choix pour
                    voyager à travers le monde.
                </p>
            </div>

            <div class="value__accordion">
                <!-- Accordéon des avantages -->
                <div class="value__accordion-item">
                    <header class="value__accordion-header">
                        <i class="bx bxs-shield-x value-accordion-icon"></i>
                        <h3 class="value__accordion-title">
                            Les Meilleurs Endroits du Monde
                        </h3>
                        <div class="value__accordion-arrow">
                            <i class="bx bxs-down-arrow"></i>
                        </div>
                    </header>

                    <div class="value__accordion-content">
                        <p class="value__accordion-description">
                            Nous offrons les meilleurs endroits du monde et avons une bonne qualité de service.
                        </p>
                    </div>
                </div>
                <!-- Fin de l'accordéon -->

                <!-- Accordéon des avantages -->
                <div class="value__accordion-item">
                    <header class="value__accordion-header">
                        <i class="bx bxs-x-square value-accordion-icon"></i>
                        <h3 class="value__accordion-title">
                            Prix Abordables pour Vous
                        </h3>
                        <div class="value__accordion-arrow">
                            <i class="bx bxs-down-arrow"></i>
                        </div>
                    </header>

                    <div class="value__accordion-content">
                        <p class="value__accordion-description">
                            Nous essayons de faire correspondre votre budget avec la
                            destination que vous souhaitez visiter.
                        </p>
                    </div>
                </div>
                <!-- Fin de l'accordéon -->

                <!-- Accordéon des avantages -->
                <div class="value__accordion-item">
                    <header class="value__accordion-header">
                        <i class="bx bxs-bar-chart-square value-accordion-icon"></i>
                        <h3 class="value__accordion-title">
                            Le Meilleur Plan pour Votre Temps
                        </h3>
                        <div class="value__accordion-arrow">
                            <i class="bx bxs-down-arrow"></i>
                        </div>
                    </header>

                    <div class="value__accordion-content">
                        <p class="value__accordion-description">
                            Nous vous fournissons un horaire adéquat.
                        </p>
                    </div>
                </div>
                <!-- Fin de l'accordéon -->

                <!-- Accordéon des avantages -->
                <div class="value__accordion-item">
                    <header class="value__accordion-header">
                        <i class="bx bxs-check-square value-accordion-icon"></i>
                        <h3 class="value__accordion-title">
                            Garantie de Sécurité
                        </h3>
                        <div class="value__accordion-arrow">
                            <i class="bx bxs-down-arrow"></i>
                        </div>
                    </header>

                    <div class="value__accordion-content">
                        <p class="value__accordion-description">
                            Nous nous assurons que nos services offrent une
                            bonne sécurité.
                        </p>
                    </div>
                </div>
                <!-- Fin de l'accordéon -->
            </div>
        </div>
    </div>
</section>

<!-- Section Blog -->
<section class="blog section" id="blog">
    <div class="blog__container container">
        <span class="section__subtitle" style="text-align: center">
            Notre Blog
        </span>
        <h2 class="section__title" style="text-align: center">
            Le Meilleur Voyage Pour Vous
        </h2>

        <div class="blog__content grid">
            @foreach($blogs as $blog)
                <article class="blog__card">
                    <div class="blog__image">
                        <img
                            src="{{ Storage::url($blog->image) }}"
                            alt=""
                            class="blog__img"
                        />
                        <a href="{{ route('blog.show', $blog->slug) }}" class="blog__button">
                            <i class="bx bx-right-arrow-alt"></i>
                        </a>
                    </div>

                    <div class="blog__data">
                        <h2 class="blog__title">
                            {{ $blog->title }}
                        </h2>
                        <p class="blog__description">
                            {{ $blog->excerpt }}
                        </p>

                        <div class="blog__footer">
                            <div class="blog__reaction">
                                {{ date('d M Y', strtotime($blog->created_at)) }}
                            </div>
                            <div class="blog__reaction">
                                <i class="bx bx-show"></i>
                                <span>{{ $blog->reads }}</span>
                            </div>
                        </div>
                    </div>
                </article>
            @endforeach
        </div>
    </div>
</section>
@endsection
