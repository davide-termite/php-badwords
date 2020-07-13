<?php

  // Paragrafo
  $text = "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
  eiusmod tempor incididunt ut labore et dolore magna aliqua.
  Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
  Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
  Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. ";

  // Variabile contenente lunghezza paragrafo
  $text_len = strlen($text);

  $word_replace = $_GET["badword"];
  $text_replace = str_replace($word_replace, "***", $text);

?>

<p>Paragrafo scelto: <?php echo $text ?></p>

<p>Paragrafo con badword censurata: <?php echo $text_replace ?></p>

<p>Lunghezza paragrafo: <?php echo $text_len ?> caratteri</p>
