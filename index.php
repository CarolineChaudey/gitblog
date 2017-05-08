<?php

	require 'vendor/autoload.php';

	$app = new \Slim\App;

	require 'src/routes.php';

	$app->run();

?>
