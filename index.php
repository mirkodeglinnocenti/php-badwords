<?php 

$paragrafo = $_GET['paragrafo'];
$parola = $_GET['parola'];
// var_dump($_GET);

$paragrafo_censurato = str_replace($parola,'***',$paragrafo);

?>

<h2>Paragrafo con la sua lunghezza</h2>

<p> <?php echo $paragrafo ?> , lunghezza: <?php echo strlen($paragrafo) ?> </p>

<h2>Paragrafo censurato con la sua lunghezza</h2>

<p> <?php echo $paragrafo_censurato ?> , lunghezza: <?php echo strlen($paragrafo_censurato) ?></p>