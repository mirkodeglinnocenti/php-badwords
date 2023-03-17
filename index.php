<?php 

$paragrafo = $_GET['paragrafo'];
$parola = $_GET['parola'];
// var_dump($_GET);

$paragrafo_censurato = str_replace($parola,'***',$paragrafo);

?>

<h1>Paragrafo</h1>

<p> <?php echo $paragrafo ?> e <?php echo strlen($paragrafo) ?> </p>

<p> <?php echo $paragrafo_censurato ?> e <?php echo strlen($paragrafo_censurato) ?></p>