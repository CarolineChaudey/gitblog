<?php

	require 'vendor/autoload.php';

	$app = new \Slim\App;

	$container = $app->getContainer();
	$container['view'] = function ($container) {
		return new \Slim\Views\PhpRenderer('src/public/web/');
	};

	require 'src/routes.php';

	$app->run();

?>
