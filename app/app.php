<?php
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/ScrabbleCalculator.php";

    $app = new Silex\Application();

    $app['debug'] = true;

    $app->register(new Silex\Provider\TwigServiceProvider(), array ('twig.path' => __DIR__.'/../views'
    ));

    $app->get("/", function() use ($app) {
        return $app['twig']->render('index.html.twig', array('result' => NULL));
    });

    $app->get("/word", function() use ($app){
        $new_Scrabble = new ScrabbleCalculator;
        $new_input = $new_Scrabble->pointCalculator($_GET['scrabble']);
        return $app['twig']->render('index.html.twig', array('result'=> $new_input));
    });

    return $app;

?>
