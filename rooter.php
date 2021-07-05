<?php

$url = '';
if(isset($_SERVER['REQUEST_URI'])){
  $url = explode('/', $_SERVER['REQUEST_URI']);
}



switch ($url) {
  case $url[2] == 'index':
  require "index.php";
  break;
case $url[2] == 'movie':
require "movie.php";
break;
case $url[2] == 'theme_animation':
require "theme_animation.php";
break;
case $url[2] == 'theme_action':
require "theme_action.php";
break;
case $url[2] == 'theme_sci_fi':
require "theme_sci_fi.php";
break;
case $url[2] == 'theme_nolan':
require "theme_nolan.php";
break;
case $url[2] == 'movie_list':
require "movie_list.php";
break;
case $url[2] == 'year_list':
require "year_list.php";
break;
case $url[2] == 'genre_list':
require "genre_list.php";
break;
case $url[2] == 'real_list':
require "real_list.php";
break;
default:
http_response_code(404);
echo "404";
break;
}
 