<?php
$uri = "http://anbobookstorerest.cloudapp.net/Service1.svc/books/";
$jsondata = file_get_contents($uri);
//print_r($jsondata);
$convertToAssociativeArray = true;
$books = json_decode($jsondata, $convertToAssociativeArray);

//print_r($books);
//return;

require_once '../vendor/autoload.php';
Twig_Autoloader::register();

$loader = new Twig_Loader_Filesystem('../views');
$twig = new Twig_Environment($loader, array(
    // 'cache' => '/path/to/compilation_cache',
    'auto_reload' => true
));
$template = $twig->loadTemplate('books.html.twig');

$parametersToTwig = array("books" => $books);
echo $template->render($parametersToTwig);