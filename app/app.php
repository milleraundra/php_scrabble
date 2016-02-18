<?php
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/ScrabbleCalculator.php";

    $app = new Silex\Application();

    $app['debug'] = true;

    $app->register(new Silex\Provider\TwigServiceProvider(), array ('twig.path' => __DIR__.'/../views'
    ));

    $app->get("/", function() use ($app) {
        return $app['twig']->render('index.html.twig', array('result1' => NULL, 'result2' => NULL, 'tiles' => NULL));
    });

    $app->get("/start", function() use ($app) {
        $scrabble_game = new ScrabbleCalculator;
        $scrabble_tiles = $scrabble_game->randomLetters();
        return $app['twig']->render('index.html.twig', array('result1' => NULL, 'result2' => NULL, 'tiles' => $scrabble_tiles));
    });

    $app->get("/word", function() use ($app){
        $new_Scrabble = new ScrabbleCalculator;
        $new_Scrabble2 = new ScrabbleCalculator;
        $new_input = $new_Scrabble->pointCalculator($_GET['scrabble1']);
        $new_input2 = $new_Scrabble2->pointCalculator($_GET['scrabble2']);
        return $app['twig']->render('index.html.twig', array('result1'=> $new_input, 'result2' => $new_input2, 'tiles' => NULL));
    });


    return $app;

?>
