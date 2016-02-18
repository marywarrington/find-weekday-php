<?php
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/Weekday.php";

    $app = new Silex\Application();
    $app->register(new Silex\Provider\TwigServiceProvider(), array(
    'twig.path' => __DIR__.'/../views'
    ));

    $app->get("/", function() use ($app) {
        return $app['twig']->render('index.html.twig', array(
            // twig input associative array
            "form" => true
        ));
    });

    $app->post("/results", function() use ($app) {
        $my_Weekday = new Weekday;
        $result = $my_Weekday->findDay($_POST['month'], $_POST['day'], $_POST['year']);
        return $app['twig']->render('index.html.twig', array(
            "form" => true, "message" => array(
                'type' => 'info',
                'text' => $result
            )
        ));
    });

    return $app;
?>
