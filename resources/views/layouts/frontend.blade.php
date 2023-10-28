<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />

        <!--=============== BOXICONS ===============-->
        <link
            href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css"
            rel="stylesheet"
        />

        <!--=============== SWIPER CSS ===============-->
        <link
            rel="stylesheet"
            href="{{ asset('frontend/assets/libraries/swiper-bundle.min.css') }}"
        />

        <!--=============== CSS ===============-->
        <link rel="stylesheet" href="{{ asset('frontend/assets/css/style.css') }}" />
        @stack('style-alt')
        <title>Tunisie Voyage</title>
    </head>
    <body>
        <!--==================== HEADER ====================-->
        <header class="header" id="header">
            <nav class="nav container">
                <a href="{{ route('homepage') }}" class="nav__logo"
                    ><i class="bx bxs-map"></i> Tunisie Voyage </a
                >

                <div class="nav__menu">
                    <ul class="nav__list">
                        <li class="nav__item">
                            <a href="{{ route('homepage') }}" class="nav__link {{ request()->is('/') ? ' active-link' : '' }}">
                                <i class="bx bx-home-alt"></i>
                                <span>Accueil</span>
                            </a>
                        </li>
                        <li class="nav__item">
                            <a href="{{ route('travel_package.index') }}" class="nav__link {{ request()->is('travel-packages') || request()->is('travel-packages/*')  ? ' active-link' : '' }}">
                                <i class="bx bx-building-house"></i>
                                <span>Voyages</span>
                            </a>
                        </li>
                        <li class="nav__item">
                            <a href="{{ route('blog.index') }}" class="nav__link {{ request()->is('blogs') || request()->is('blogs/*')  ? ' active-link' : '' }}">
                                <i class="bx bx-award"></i>
                                <span>Blog</span>
                            </a>
                        </li>
                        <li class="nav__item">
                            <a href="{{ route('contact') }}" class="nav__link {{ request()->is('contact') ? ' active-link' : '' }}">
                                <i class="bx bx-phone"></i>
                                <span>Contact</span>
                            </a>
                        </li>
                    </ul>
                </div>

                <!-- thème -->
                <i class="bx bx-moon change-theme" id="theme-button"></i>

                <a target="_blank" href="{{ route('contact') }}" class="button nav__button">Réserver maintenant</a>
             <!-- Boutons d'authentification -->
        @guest
        <a href="{{ route('login') }}" class="button nav__button">Connexion</a>
        <a href="{{ route('register') }}" class="button nav__button">Inscription</a>
        @else
        <!-- Ajoutez un bouton de déconnexion ou un lien vers le profil de l'utilisateur s'il est connecté -->
        <!-- Exemple d'un bouton de déconnexion -->
        <a href="{{ route('logout') }}" class="button nav__button"
           onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
            Déconnexion
        </a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
        <!-- Vous pouvez également ajouter un lien vers le profil de l'utilisateur ici -->
        @endguest
            </nav>
        </header>

        <!--==================== MAIN ====================-->
        <main class="main">
            @yield('content')
        </main>

        <!--==================== FOOTER ====================-->
        <footer class="footer section">
            <div class="footer__container container grid">
                <div>
                <a href="{{ route('homepage') }}" class="nav__logo"
                    ><i class="bx bxs-map"></i> Tunisie Voyage </a
                >
                    <p class="footer__description">
                    Notre vision est d'aider les gens à trouver les <br>
                    meilleurs endroits pour voyager en toute sécurité.
                    </p>
                </div>

                <div class="footer__content">
                    <div>
                        <h3 class="footer__title">Informations utiles</h3>

                        <ul class="footer__links">
                            <li>
                                <a href="#" class="footer__link">Qui sommes-nous ?</a>
                            </li>
                            <li>
                                <a href="#" class="footer__link">Fonctionnalités</a>
                            </li>
                            <li>
                                <a href="#" class="footer__link">Actualités et Blog</a>
                            </li>
                        </ul>
                    </div>
                  
                    <div>
                        <h3 class="footer__title">Contact</h3>

                        <ul class="footer__links">
                            <li>
                                <a href="#" class="footer__link">FAQs</a>
                            </li>
                            <li>
                                <a href="#" class="footer__link"
                                    >Centre de support
                                </a>
                            </li>
                            <li>
                                <a href="#" class="footer__link"> Contactez-nous</a>
                            </li>
                        </ul>
                    </div>
                    <div>
                        <h3 class="footer__title">Suivez-nous</h3>

                        <ul class="footer__social">
                            <a href="#" class="footer__social-link">
                                <i class="bx bxl-facebook-circle"></i>
                            </a>
                            <a href="#" class="footer__social-link">
                                <i class="bx bxl-instagram-alt"></i>
                            </a>
                            <a href="#" class="footer__social-link">
                                <i class="bx bxl-pinterest"></i>
                            </a>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="footer__info container">
                <span class="footer__copy">
                    &#169; Tunisie_Voyage. Tous droits réservés
                </span>
                <div class="footer__privacy">
                    <a href="#">Conditions et accords</a>
                    <a href="#">Politique de confidentialité</a>
                </div>
            </div>
        </footer>

        <!--========== SCROLL UP ==========-->
        <a href="#" class="scrollup" id="scroll-up">
            <i class="bx bx-chevrons-up"></i>
        </a>

        <!--=============== SCROLLREVEAL ===============-->
        <script src="{{ asset('frontend/assets/libraries/scrollreveal.min.js') }}"></script>

        <!--=============== SWIPER JS ===============-->
        <script src="{{ asset('frontend/assets/libraries/swiper-bundle.min.js') }}"></script>

        <!--=============== MAIN JS ===============-->
        <script src="{{ asset('frontend/assets/js/main.js') }}"></script>
        @stack('script-alt')
    </body>
</html>
