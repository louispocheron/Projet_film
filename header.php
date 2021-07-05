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

  <header class="header">
      <a href="/index" class="logo">Ciné.File</a>

      <input class="menu-btn" type="checkbox" id="menu-btn" />
      <label class="menu-icon" for="menu-btn"
        ><span class="navicon"></span
      ></label>
      <div class="container">
        <div class="searchInputWrapper">
          <input class="searchInput" type="text" placeholder='Recherchez'>
            <i class="searchInputIcon fa fa-search"></i>
          </input>
        </div>
      </div>
      <ul class="menu">
        <li><a href="/movie_list">Listes de films</a></li>
        <li><a href="/year_list">Année de sortie</a></li>
        <li><a href="/genre_list">Genres</a></li>
        <li><a href="/real_list">Réalisateurs</a></li>
      </ul>
    </header>