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
        <section class="section2_movie"       data-aos="fade-left"
      data-aos-duration="2000">
      <div class="movie_mobile_card">
        <div class="movie_mobile_grid">
          <p class="movie_mobile_card_title">Matrix</p>
          <img class="movie_mobile_card_cover" src="./img/img1.jpg" alt="Affiche du film" />
          <p class="movie_mobile_card_year">1999</p>
          <p class="movie_mobile_card_real">Les Soeurs Wachowski</p>
          <p class="movie_mobile_card_genre">Sci-Fi</p>
          <p class="movie_mobile_card_description">
            L'homme ouvre les yeux pour la première fois.
          </p>
          <img
            class="movie_mobile_card_trailer"
            src="./img/trailer.svg"
            alt="Trailer du film"
          />
        </div>
      </div>

      <div class="movie_desktop_card">
        <div class="movie_desktop_part1">
          <div class="movie_desktop_part1_grid">
            <p class="movie_desktop_card_title">Matrix</p>
            <img class="movie_desktop_card_cover" src="./img/img1.jpg" alt="Affiche du film" />
            <p class="movie_desktop_card_year">1999</p>
            <p class="movie_desktop_card_real">Les Soeurs Wachowski</p>
            <p class="movie_desktop_card_genre">Sci-Fi</p>
            <img
              class="movie_desktop_card_trailer"
              src="./img/trailer.svg"
              alt="Trailer du film"
            />
          </div>
        </div>
        <div class="movie_desktop_part2">
          <p class="movie_desktop_card_description">
            L'homme ouvre les yeux pour la première fois.
          </p>
        </div>
      </div>
    </section>
    <script src="script.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.18.0/TweenMax.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <script>
      AOS.init({
        once: true,
      });
    </script>