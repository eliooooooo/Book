<?php
include('./src/twig.php');
$twig = init_twig();

include('./data.php');


echo $twig->render('template.twig', [
    $data => 'data'
]);