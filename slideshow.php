 <!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css" />
    <link rel="icon" type="image/svg" href="./img/favicon.svg" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <title>Ciné.File</title>
  </head>
  <body>
 <section class="section1">
      <section class="slideshow">
        <div class="slideshow-inner">
          <div class="slides">
            <div class="slide is-active">
              <div class="slide-content">
                <div class="caption">
                  <div class="title">Le Cinéma de Nolan</div>
                  <div class="text">
                    <p>Découvrez l'univers de Nolan</p>
                  </div>
                  <a href="/theme_nolan" class="btn">
                    <span class="btn-inner">En savoir plus</span>
                  </a>
                </div>
              </div>
              <div class="image-container">
                <img src="./img/nolan.jpg" alt="" class="image" />
              </div>
            </div>
            <div class="slide">
              <div class="slide-content">
                <div class="caption">
                  <div class="title">Le Cinéma d'animation</div>
                  <div class="text">
                    <p>
                      Découvrez les films d'animations qui ont bercé notre
                      enfance
                    </p>
                  </div>
                  <a href="/theme_animation" class="btn">
                    <span class="btn-inner">En savoir plus</span>
                  </a>
                </div>
              </div>
              <div class="image-container">
                <img src="./img/aniation.png" alt="" class="image" />
              </div>
            </div>
            <div class="slide">
              <div class="slide-content">
                <div class="caption">
                  <div class="title">La Sci-Fi</div>
                  <div class="text">
                    <p>Découvrez les classiques du genre</p>
                  </div>
                  <a href="/theme_sci_fi" class="btn">
                    <span class="btn-inner">En savoir plus</span>
                  </a>
                </div>
              </div>
              <div class="image-container">
                <img src="./img/actioner.jpg" alt="" class="image" />
              </div>
            </div>
            <div class="slide">
              <div class="slide-content">
                <div class="caption">
                  <div class="title">Le cinéma d'action</div>
                  <div class="text">
                    <p>BOOOOOOOOOOOOOOOOOOOOOOM</p>
                  </div>
                  <a href="/theme_action" class="btn">
                    <span class="btn-inner">En savoir plus</span>
                  </a>
                </div>
              </div>
              <div class="image-container">
                <img src="./img/matrix.jpg" alt="" class="image" />
              </div>
            </div>
          </div>
          <div class="pagination">
            <div class="item is-active">
              <span class="icon">1</span>
            </div>
            <div class="item">
              <span class="icon">2</span>
            </div>
            <div class="item">
              <span class="icon">3</span>
            </div>
            <div class="item">
              <span class="icon">4</span>
            </div>
          </div>
          <div class="arrows">
            <div class="arrow prev">
              <span class="svg svg-arrow-left">
                <svg
                  version="1.1"
                  id="svg4-Layer_1"
                  xmlns="http://www.w3.org/2000/svg"
                  xmlns:xlink="http://www.w3.org/1999/xlink"
                  x="0px"
                  y="0px"
                  width="14px"
                  height="26px"
                  viewBox="0 0 14 26"
                  enable-background="new 0 0 14 26"
                  xml:space="preserve"
                >
                  <path
                    d="M13,26c-0.256,0-0.512-0.098-0.707-0.293l-12-12c-0.391-0.391-0.391-1.023,0-1.414l12-12c0.391-0.391,1.023-0.391,1.414,0s0.391,1.023,0,1.414L2.414,13l11.293,11.293c0.391,0.391,0.391,1.023,0,1.414C13.512,25.902,13.256,26,13,26z"
                  />
                </svg>
                <span class="alt sr-only"></span>
              </span>
            </div>
            <div class="arrow next">
              <span class="svg svg-arrow-right">
                <svg
                  version="1.1"
                  id="svg5-Layer_1"
                  xmlns="http://www.w3.org/2000/svg"
                  xmlns:xlink="http://www.w3.org/1999/xlink"
                  x="0px"
                  y="0px"
                  width="14px"
                  height="26px"
                  viewBox="0 0 14 26"
                  enable-background="new 0 0 14 26"
                  xml:space="preserve"
                >
                  <path
                    d="M1,0c0.256,0,0.512,0.098,0.707,0.293l12,12c0.391,0.391,0.391,1.023,0,1.414l-12,12c-0.391,0.391-1.023,0.391-1.414,0s-0.391-1.023,0-1.414L11.586,13L0.293,1.707c-0.391-0.391-0.391-1.023,0-1.414C0.488,0.098,0.744,0,1,0z"
                  />
                </svg>
                <span class="alt sr-only"></span>
              </span>
            </div>
          </div>
        </div>
      </section>
    </section>
    <script src="script.js"></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.18.0/TweenMax.min.js"></script>
