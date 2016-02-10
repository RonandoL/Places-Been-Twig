<?php
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/Place.php";

    session_start();
    if (empty($_SESSION['list_of_places'])) {
        $_SESSION['list_of_places'] = array();
    }

    $app = new Silex\Application();

    $app->register(new Silex\Provider\TwigServiceProvider(), array(
    'twig.path' => __DIR__.'/../views'
    ));

    $app->get("/", function() use ($app) {
        return $app['twig']->render('places.html.twig', array('places' => Place::getAll()));
    });

    $app->post("/places", function() use ($app) {
        $new_city = new Place($_POST['city'], $_POST['photo'], $_POST['landmark'], $_POST['date']);
        $new_city->save();
        return $app['twig']->render('create_place.html.twig', array('newPlace' => $new_city));
    });


    return $app;

?>
