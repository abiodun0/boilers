<?php
require_once __DIR__.'/vendor/autoload.php';
 use Silex\Application;

 class Adidas extends Application
 {
 
 	use Application\TwigTrait;
 	use Application\SecurityTrait;
 	use Application\FormTrait;
 	use Application\UrlGeneratorTrait;
 	use Application\SwiftmailerTrait;


 }

 $app = new Adidas();

 $app->register(new Silex\Provider\TwigServiceProvider(),array('twig.path' => __DIR__.'/web/views'));

 require __DIR__.'/web/routes.php';

 $app->run();