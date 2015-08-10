<?php
$app->get('/',function() use ($app){

	return $app->render('index.html');
});