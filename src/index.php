<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://fonts.googleapis.com/css2?family=Lora:wght@700&family=Ubuntu:wght@300;400&display=swap"
      rel="stylesheet"
    />

    <link rel="stylesheet" href="/node_modules/flexslider/flexslider.css" />
    <link
      rel="stylesheet"
      href="/node_modules/@fancyapps/fancybox/dist/jquery.fancybox.min.css"
    />
    <link rel="stylesheet" href="/node_modules/aos/dist/aos.css" />
    <link rel="stylesheet" href="style.css" />
    <script src="/node_modules/jquery/dist/jquery.min.js"></script>

    <title>Chalets</title>
  </head>
  <body>
    <nav id="main-nav">
      <div class="container">
        <img data-aos="zoom-in"
          id="logo-tp"
          class="logo"
          src="/img/chalets-gardenia-logo-tp.png"
          alt="Chalets logo"
        />
        <img data-aos="zoom-in"
          id="logo"
          class="logo"
          src="/img/chalets-gardenia-logo.png"
          alt="Chalets logo"
        />
        <button class="hamburger hamburger--stand" type="button">
          <span class="hamburger-box">
            <span class="hamburger-inner"></span>
          </span>
          <span class="menu-text">Menu</span>
        </button>

        <div id="menu">
          <ul>
            <li><a href="#about">Čo je Chalet?</a></li>
            <li><a href="#gallery">Galéria</a></li>
            <li><a href="#contact">Kontakt</a></li>
            <li><a href="#order-form-section">Rezervácia</a></li>
            <li><span id="language-switcher"  data-lang='sk'>Slovenčina 
              </span>
              <svg width="14" height="10" viewBox="0 0 14 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M1 1L7.31579 9L13 1" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            <ul class="sub-menu">
              <li><span id='set-language'>English</span></li>
            </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <header class="header-section">
      <div class="header-text">
        <p data-aos="fade-up" class="section-subtitle">
          <span>Jedinečná lokalita</span><span>Jedinečný zážitok</span>
        </p>
        <h1 data-aos="fade-up" class="main-title">Chalets Gardenia</h1>
        <p data-aos="fade-up" class="main-desc">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum
          vulputate tempus odio, sed sollicitudin tellus. Vivamus porta
          ullamcorper ante imperdiet eleifend. Aliquam erat volutpat. Cras mi
          enim, dictum quis bibendum nec, tristique vel velit.
        </p>
      </div>
    </header>
    <section id="request-form-section">
      <div class="container">
        <form id="request-form">
          <div class="form-row">
            <label for="arrival-date">Dátum príchodu</label>
            <input id="arrival-date" type="date" name="arrival-date" />
          </div>
          <div class="form-row">
            <label for="departure-date">Dátum príchodu</label>
            <input id="departure-date" type="date" name="departure-date" />
          </div>
          <div class="form-row">
            <label for="persons">Počet osôb</label>
            <input id="persons" type="number" name="persons" min="1" max="10" />
          </div>
          <div class="form-row btn-row">
            <button id="request-btn" type="button" class="btn btn-y">
              Odoslať dopyt
            </button>
          </div>
        </form>
      </div>
    </section>
    <section id="about" class="section-white flex">
      <div class="container">
        <div data-aos="fade-right" class="left-content flex-child">
          <p class="section-subtitle">Chalet</p>
          <h2 class="section-title">Čo je Chalets Gardenia?</h2>
          <div class="section-content">
            <p>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce
              vitae lacus in elit lacinia viverra nec eu diam. Etiam bibendum
              eget velit et suscipit. Aliquam ut magna nulla. Curabitur at
              tellus ut metus finibus interdum id quis dui. Nunc dapibus
              pulvinar sollicitudin. Phasellus sodales facilisis nibh sed
              fermentum.
            </p>
            <p>
              Curabitur sodales bibendum magna. Morbi dolor sem, placerat nec
              nisl a, pretium lacinia orci. Suspendisse maximus dolor risus,
              vitae consectetur dolor sagittis in. Fusce hendrerit sapien sed
              nisl congue gravida. Aliquam pellentesque nunc vel venenatis
              egestas. Curabitur ultrices pretium nulla, nec auctor arcu
              molestie id. Maecenas vehicula porta venenatis.
            </p>
            <p>
              Orci varius natoque penatibus et magnis dis parturient montes,
              nascetur ridiculus mus. Nulla pulvinar justo a sapien auctor
              posuere.
            </p>
            <div class="symbol"></div>
          </div>
        </div>
        <div class="right-content flex-child">
          <hr class="gray-line" />
          <div class="icons">
            <div class="icon-box">
              <img
                data-aos="zoom-in"
                class="svg-icon"
                src="/img//svg/spalne.svg"
                alt="spálne"
              />
              <p class="icon-desc">3 spálne</p>
            </div>
            <div class="icon-box">
              <img
                data-aos="zoom-in"
                class="svg-icon"
                src="/img//svg/vyhlad.svg"
                alt="výhľad na hory"
              />
              <p class="icon-desc">Výhľad na hory</p>
            </div>
            <div class="icon-box">
              <img
                data-aos="zoom-in"
                class="svg-icon"
                src="/img//svg/kupelna.svg"
                alt="kúpelňa"
              />
              <p class="icon-desc">2 Kúpelne</p>
            </div>
            <div class="icon-box">
              <img
                data-aos="zoom-in"
                class="svg-icon"
                src="/img//svg/kuchyna.svg"
                alt="kuchyňa"
              />
              <p class="icon-desc">Kuchyňa</p>
            </div>
            <div class="icon-box">
              <img
                data-aos="zoom-in"
                class="svg-icon"
                src="/img//svg/wifi.svg"
                alt="wifi"
              />
              <p class="icon-desc">Free wifi</p>
            </div>
            <div class="icon-box">
              <img
                data-aos="zoom-in"
                class="svg-icon"
                src="/img//svg/parking.svg"
                alt="parkovanie"
              />
              <p class="icon-desc">Parkovanie</p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section id="gallery" class="section-dark">
      <div class="container">
        <div class="flexslider-content">
          <!-- Place somewhere in the <body> of your page -->
          <div class="flexslider" data-aos="zoom-in" data-aos-offset="200">
            <ul class="slides">
              <li>
                <a
                  href="/img/gallery/chalets-gardenia-2.jpg"
                  data-fancybox="gallery"
                  data-caption=""
                >
                  <img src="/img/gallery/chalets-gardenia-2.jpg" />

                  <p class="flex-caption">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    Vestibulum vulputate tempus odio, sed sollicitudin tellus.
                    Vivamus porta ullamcorper ante imperdiet eleifend. Aliquam
                    erat volutpat. Cras mi enim, dictum quis bibendum nec,
                    tristique vel velit.
                  </p>
                </a>
              </li>
              <li>
                <a
                  href="/img/gallery/chalets-gardenia-3.jpg"
                  data-fancybox="gallery"
                  data-caption=""
                >
                  <img src="/img/gallery/chalets-gardenia-3.jpg" />
                  <p class="flex-caption">
                    Vivamus porta ullamcorper ante imperdiet eleifend. Aliquam
                    erat volutpat. Cras mi enim, dictum quis bibendum nec,
                    tristique vel velit.
                  </p>
                </a>
              </li>
              <li>
                <a
                  href="/img/gallery/chalets-gardenia-4.jpg"
                  data-fancybox="gallery"
                  data-caption=""
                >
                  <img src="/img/gallery/chalets-gardenia-4.jpg" />
                  <p class="flex-caption">
                    Cras mi enim, dictum quis bibendum nec, tristique vel velit.
                  </p>
                </a>
              </li>
              <li>
                <a
                  href="/img/gallery/chalets-gardenia-5.jpg"
                  data-fancybox="gallery"
                  data-caption=""
                >
                  <img src="/img/gallery/chalets-gardenia-5.jpg" />
                  <p class="flex-caption">
                    Cras mi enim, dictum quis bibendum nec, tristique vel velit.
                  </p>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </section>
    <section class="section-white flex">
      <div class="container">
        <div class="left-content flex-child">
          <p class="section-subtitle">Donovaly</p>
          <h2 class="section-title">Kde nás nájdete?</h2>
          <div class="section-content">
            <p>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce
              vitae lacus in elit lacinia viverra nec eu diam. Etiam bibendum
              eget velit et suscipit. Aliquam ut magna nulla. Curabitur at
              tellus ut metus finibus interdum id quis dui. Nunc dapibus
              pulvinar sollicitudin. Phasellus sodales facilisis nibh sed
              fermentum.
            </p>
            <p>
              Curabitur sodales bibendum magna. Morbi dolor sem, placerat nec
              nisl a, pretium lacinia orci. Suspendisse maximus dolor risus,
              vitae consectetur dolor sagittis in. Fusce hendrerit sapien sed
              nisl congue gravida. Aliquam pellentesque nunc vel venenatis
              egestas. Curabitur ultrices pretium nulla, nec auctor arcu
              molestie id. Maecenas vehicula porta venenatis.
            </p>
            <p>
              Orci varius natoque penatibus et magnis dis parturient montes,
              nascetur ridiculus mus. Nulla pulvinar justo a sapien auctor
              posuere.
            </p>
            <div class="symbol"></div>
          </div>
        </div>
        <div class="right-content flex-child">
          <img  class="map" src="img/mapa-gardenia.png" alt="mapa" />
        </div>
      </div>
    </section>
    <section id="contact" class="white-section">
      <div class="container">
        <div class="address-icons">
          <div data-aos="flip-left" data-aos-offset="300" class="address-icon">
            <img class="svg-icon" src="/img/svg/poloha.svg" alt="poloha" />
            <p class="icon-desc">
              <span>Donovaly 12345</span><span>976 39 Donovaly, SK</span>
            </p>
          </div>
          <div data-aos="flip-left" data-aos-offset="300" class="address-icon">
            <img class="svg-icon" src="/img/svg/email.svg" alt="email" />
            <p class="icon-desc">info@chaletsgardenia.sk</p>
          </div>
          <div data-aos="flip-left" data-aos-offset="300" class="address-icon">
            <img class="svg-icon" src="/img/svg/telefon.svg" alt="telefón" />
            <p class="icon-desc">+421 901 722 855</p>
          </div>
          <div data-aos="flip-left" data-aos-offset="300" class="address-icon">
            <img class="svg-icon" src="/img/svg/gps.svg" alt="gps" />
            <p class="icon-desc">
              <span>48°52'35.6"N</span><span>19°13'33.8"E</span>
            </p>
          </div>
        </div>
      </div>
    </section>
    <section id="order-form-section" class="section-dark">
      <div class="container">
        <h2 class="section-title">Nezáväzná rezervácia</h2>
        <form id="order-form" method="POST">
          <div class="form-col-wrapper">
            <div class="form-col">
              <div class="form-row">
                <label for="order-name">Meno a priezvisko</label>
                <input
                  id="order-name"
                  type="text"
                  name="order-name"
                  placeholder="Pavel Novák"
                />
              </div>
              <div class="form-row">
                <label for="order-email">Email</label>
                <input
                  id="order-email"
                  type="email"
                  name="order-email"
                  placeholder="pavel@novak.sk"
                />
              </div>
            </div>

            <div class="form-col">
              <div class="form-row">
                <label for="order-phone">Telefón</label>
                <input
                  id="order-phone"
                  type="text"
                  name="order-phone"
                  placeholder="+421 905 243 246"
                />
              </div>
              <div class="form-row">
                <label for="order-arrival-date">Dátum príchodu</label>
                <input
                  id="order-arrival-date"
                  type="date"
                  name="order-arrival-date"
                />
              </div>
            </div>

            <div class="form-col">
              <div class="form-row">
                <label for="order-departure-date">Dátum odchodu</label>
                <input
                  id="order-departure-date"
                  type="date"
                  name="order-departure-date"
                />
              </div>
              <div class="form-row">
                <label for="order-persons">Počet osôb</label>
                <input
                  id="order-persons"
                  type="number"
                  name="order-persons"
                  min="1"
                  max="10"
                />
              </div>
            </div>
          </div>

          <div class="form-row">
            <label class="checkbox-wrapper"
              >Oboznámil som sa s
              <a href="#">podmienkami spracovania údajov</a> a súhlasím s nimi
              <input type="checkbox" />
              <span class="checkmark"></span>
            </label>
          </div>
          <div class="form-row btn-row">
            <button id="send-email" type="submit" class="btn btn-y">Odoslať dopyt</button>
          </div>
        </form>
      </div>
    </section>
    <footer class="section-white flex">
      <div class="container">
        <div class="footer-left flex-child">
          Prevádzkovateľ: FinMedia, a.s., IČO: 35770201
        </div>
        <div class="footer-right flex-child">
          <a href="#">Obchodné a storno podmienky</a>
          <a href="#">Podmienky spracovania osobných údajov</a>
        </div>
      </div>
    </footer>
    <script src="/node_modules/flexslider/jquery.flexslider.js"></script>
    <script src="/node_modules/@fancyapps/fancybox/dist/jquery.fancybox.min.js"></script>
    <script src="/node_modules/aos/dist/aos.js"></script>
    <script src="scripts.js"></script>
  </body>
</html>
