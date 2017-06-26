<?php
	use \Psr\Http\Message\ServerRequestInterface as Request;
	use \Psr\Http\Message\ResponseInterface as Response;

	$servername = "localhost";
	$username 	= "root";
	$password 	= "password";
	$dbname		= "gitblog";

	try {
		$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
		// set the PDO error mode to exception
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	} catch(PDOException $e) {
		// TODO return error page
	}

	//accueil
	$app->get('/', function(Request $request, Response $response) {
		return $this->view->render($response, 'index.html');
	});

	//inscription
	$app->get('/join', function(Request $request, Response $response) {
		return $this->view->render($response, 'join.html');
	});

	//inscription
	$app->post('/join-handle', function(Request $request, Response $response) {
		return $this->view->render($response, 'index.html');
	});

?>
